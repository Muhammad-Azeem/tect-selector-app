<?php


namespace App\Repositories;
use App\User;


class UserRepository
{
    protected $user;

    /**
     * UserRepository constructor.
     * @param $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create($data)
    {
        return $this->user->create($data);
    }
    public function updateOrCreate($data)
    {
        return $this->user->updateOrCreate([
            'email' => $data['email']
        ], $data);
    }
    public function find($id)
    {
        return $this->user->find($id);
    }
}
