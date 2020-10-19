<?php


namespace App\Repositories;


use App\Models\Phase;
use Illuminate\Support\Facades\DB;

class PhaseRepository
{
    protected $phase;

    public function __construct(Phase $phase)
    {
        $this->phase = $phase;
    }
    public function getByPhaseId($id){
        return $this->phase->where('id', $id)->with(['questions.answers'])->get()->first();
    }

}
