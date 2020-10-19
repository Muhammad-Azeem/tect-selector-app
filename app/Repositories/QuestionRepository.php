<?php


namespace App\Repositories;


use App\Models\Question;

class QuestionRepository
{

    protected $question;

    public function __construct(Question $question)
    {
        $this->question = $question;
    }

    public function getByPhaseId($id){
        $this->question->where('id', $id)->with(['phases.answers'])->get();
    }

    public function find($id){
        return $this->question->find($id);
    }
}
