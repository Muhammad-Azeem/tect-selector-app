<?php


namespace App\Http\Controllers;

use App\Http\Resources\PhaseResource;
use App\Models\Phase;
use Illuminate\Http\Request;
use App\Services\PhaseService;
use Illuminate\Support\Facades\Log;

class PhaseController
{
    protected $phaseService;

    public function __construct(PhaseService $phaseService)
    {
        $this->phaseService = $phaseService;
    }
    public function show($id){
        Log::alert($this->phaseService->getByPhaseId($id));
        return new PhaseResource($this->phaseService->getByPhaseId($id));
    }
}
