<?php


namespace App\Services;


use App\Repositories\AnswerRepository;

class AnswerService
{
    protected $answerRepository;

    public function  __construct(AnswerRepository $answerRepository)
    {
        $this->answerRepository = $answerRepository;
    }

    public function find($id)
    {
        return $this->answerRepository->find($id);
    }
}
