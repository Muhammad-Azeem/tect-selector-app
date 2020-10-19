<?php


namespace App\Services;


use App\Models\Phase;
use App\Repositories\PhaseRepository;
use Illuminate\Http\Request;

class PhaseService
{


    /**
     * @var PhaseRepository
     */
    protected $phaseRepository;

    public function  __construct(PhaseRepository $phaseRepository)
    {
        $this->phaseRepository = $phaseRepository;
    }
    public function getByPhaseId($id){
       return $this->phaseRepository->getByPhaseId($id);
    }




}
