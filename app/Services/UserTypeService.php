<?php


namespace App\Services;


use App\Models\UserType;
use App\Repositories\UserTypeRepository;

class UserTypeService
{
  protected $userType;

    /**
     * UserTypeService constructor.
     * @param UserType $userType
     */
    public function __construct(UserType $userType)
    {
        $this->userType = $userType ;
    }

    public function all()
    {
        return $this->userType->all();
    }


}
