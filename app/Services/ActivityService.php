<?php


namespace App\Services;

use App\Models\Activity;
use App\Repositories\ActivityRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;

class ActivityService
{
    protected $activityRepository,$productService,$userService,$phaseService,$questionService,$answerService;


    /**
     * ActivityService constructor.
     * @param $activityRepository
     */
    public function __construct(AnswerService $answerService,QuestionService $questionService,PhaseService $phaseService,ActivityRepository $activityRepository,ProductService $productService,UserService $userService)
    {
        $this->activityRepository = $activityRepository;
        $this->productService = $productService;
        $this->userService = $userService;
        $this->phaseService = $phaseService;
        $this->questionService = $questionService;
        $this->answerService = $answerService;
    }

    public function create($data)
    {
        return $this->activityRepository->create($data);
    }

    public function update( Request $request, $id)
    {
        return $this->activityRepository->update($id, $request->all());
    }


    public function all()
    {
        return $this->activityRepository->all();
    }

    public function find($id)
    {
        $viewall = $this->activityRepository->find($id);
        return $viewall;
    }

    public function structureData($data)
    {
        $total=[];
        foreach($data as $key=>$item)
        {
            $finalItem= (object)[];
            $questions=[];
             $phase = $this->phaseService->getByPhaseId($item->phase_id);
             $finalItem->phase_name = $phase->name;
            foreach ($item->questions as $question)
            {
                $questionItem = (object)[];
                $questionItemAnswer=[];
                $getQuestion = $this->questionService->find($question->question_id);

                foreach ($question->answer_id as $answer_id)
                {
                    if(!($question->question_id == 11 || $question->question_id == 12 || $question->question_id == 13))
                    {
                        $answer = $this->answerService->find($answer_id);
                        if($answer)
                            array_push($questionItemAnswer, $answer->title);
                    }
                    else
                        {
                            $answer = $answer_id;
                            if($answer)
                                array_push($questionItemAnswer, $answer);
                        }


                }

                $questionItem->question_name = $getQuestion->title;
                $questionItem->answer_names = $questionItemAnswer;

                array_push($questions, $questionItem);
            }
            $finalItem->questions = $questions;
            array_push($total, $finalItem);


        }
        return $total;

    }
    public function getQuestions($questions)
    {
        foreach($questions as $question) {
                return $question->question_id;
        }
    }


    public function getProducts($request,$id)
    {
        $user = $this->userService->updateOrCreate($request);

        $activity = $this->activityRepository->find($id);
        $allProducts = $this->productService->all();
        $activities = collect(json_decode($activity->data))->pluck('questions')->flatten()->toArray();
        $recommendedProducts =[];
        foreach ($allProducts as $product) {
            $matches = [];
            foreach ($product->logical_expression as $key => $item) {
                if(is_array($item)) {
                    if (count($item) == 1) {
                        $questionMatch = false;
                        for ($i = 0; $i < count($activities); $i++) {

                            if ($activities[$i]->question_id == $item[0]['question_id']) {
                                $questionMatch = true;

                                if (array_intersect($activities[$i]->answer_id, $item[0]['answer_id'])) {
                                    /* if answer matches */
                                    array_push($matches, '1');
                                } else {
                                    /* if answer don't match */
                                    array_push($matches, '0');
                                }
                                break;

                            }
                        }
                        if ($questionMatch == false) {
                            array_push($matches, '0');
                        }
                    }
                    else {

                        array_push($matches, '(');
                        foreach ($item as $counter => $itemValue) {
                            $questionMatch = false;

                            if (is_array($itemValue)) {

                                for ($i = 0; $i < count($activities); $i++) {

                                    if ($activities[$i]->question_id == $itemValue['question_id']) {
                                        $questionMatch = true;

                                        if (array_intersect($activities[$i]->answer_id, $itemValue['answer_id'])) {
                                            /* if answer matches */

                                            array_push($matches, '1');
                                        } else {
                                            /* if answer don't match */
                                            array_push($matches, '0');
                                        }
                                        break;

                                    }

                                }
                                if ($questionMatch == false) {
                                    array_push($matches, '0');

                                }
                            } else {
                                array_push($matches, $itemValue);
                            }
                        }
                        array_push($matches, ')');
                    }
                } else {

                    array_push($matches, $item);
                }


            }
            $matches = implode(" ", $matches);
            if ((eval("return $matches;"))) {
                array_push($recommendedProducts, $product);
            }
        }
        $this->attachProducts($activity,$recommendedProducts);

        $this->sendActivityProductsEmail($recommendedProducts,$user);

    }

    public function attachProducts($activity,$products)
    {
        foreach($products as $product)
        {
            $activity->activityProducts()->attach($product);
        }
    }

    public function sendActivityProductsEmail($products,$user)
    {
        $output = PDF::loadView('urabilitypdf', compact('products'))->output();

        // The file name.
        $name = 'UrAbility Tech Selector -  Products.pdf';

        // Get our disk to store the PDF in.
        $disk = Storage::disk('public');

        // Save the file with the PDF output.
        if ($disk->put($name, $output)) {
            $fileName = $disk->path($name);
        }

        $user->notify(new \App\Notifications\UserReport($user, $fileName));
    }


}
