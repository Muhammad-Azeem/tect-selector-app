<?php


namespace App\Repositories;

use App\models\UserType;

class UserTypeRepository
{
    protected $userType;


    public function __construct(Usertype $userType)
    {
        $this->userType = $userType;
    }
    public function all()
    {
        return $this->userType->all();
    }


}
