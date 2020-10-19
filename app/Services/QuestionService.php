<?php


namespace App\Services;


use App\Models\Question;
use App\Repositories\QuestionRepository;

class QuestionService
{
    public function __construct(QuestionRepository $questionRepository)
    {
        $this->questionRepository = $questionRepository ;
    }
    public function find($id)
    {
        return $this->questionRepository->find($id);
    }
}
