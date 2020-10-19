<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\User;
use App\Services\UserService;


class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function store(UserRequest $request)
    {
        return new UserResource($this->userService->updateOrCreate($request->all())) ;
    }
    public function getMail($id)
    {
        $this->userService->getMail($id);

        return response("E-mail has sent successfully");
    }
}
