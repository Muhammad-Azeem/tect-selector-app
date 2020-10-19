<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Http\Resources\ActivityResource;

use App\Services\ActivityService;
use Illuminate\Http\Request;


class ActivityController extends Controller
{
    private $activityService;


    public function __construct(ActivityService $activityService )
    {
        $this->activityService = $activityService;
    }
    public function index(){

        $activities = $this->activityService->all();
        return view( 'activities.index', compact('activities'));

    }
    public function view($id){

        $activity = $this->activityService->find($id);
        $json =  json_decode($activity->data);
//        return $json[0]->phase_id;
        $newData = $this->activityService->structureData($json);

        return view( 'activities.view', compact('newData','activity'));
    }

    public function create(Request $request)
    {
        return new ActivityResource($this->activityService->create($request->all()));
    }

    public function update(Request $request, $id)
    {
        return $this->activityService->update($request, $id);
    }


    public function all()
    {
        $activities = $this->activityService->all();
        return view( 'activities.index', compact('activities'));
    }


    public function getProducts(Request $request,$id)
    {
         $this->activityService->getProducts($request->all(),$id);
    }
}
