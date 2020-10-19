<?php

namespace App\Http\Controllers;

use App\Services\UserTypeService;
use App\Http\Resources\UserTypeResource;
use Illuminate\Http\Request;
use App\Models\UserType;

class UserTypeController extends Controller
{
    protected $userTypeService;



    public function __construct(UserTypeService $userTypeService)
    {
        $this->userTypeService = $userTypeService;
    }
    public function index(){

        return UserTypeResource::collection($this->userTypeService->all());


    }
}
