<?php


namespace App\Repositories;


use App\Models\Answer;

class AnswerRepository
{
    protected $answer;


    public function __construct(Answer $answer)
    {
        $this->answer = $answer;
    }

    public function find($id)
    {
        return $this->answer->find($id);
    }
}
