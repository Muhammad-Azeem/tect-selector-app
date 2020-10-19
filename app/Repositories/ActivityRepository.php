<?php


namespace App\Repositories;

use App\Models\Activity;
use App\User;
use Illuminate\Http\Request;

class ActivityRepository
{
    protected $activity;
    protected $user;

    public function __construct(Activity $activity)
    {
        $this->activity = $activity;

    }

    public function create($data)
    {

        return $this->activity->create($data);
    }

    public function update($id, $data)
    {
        return $this->activity->find($id)->update($data);
    }


    public function all()
    {
        return $this->activity->all();
    }

    public function show($id)
    {
        return $this->activity->find($id);
    }
    public function find($id)
    {
        return $this->activity->where('id',$id)->first();

    }



}
