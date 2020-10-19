<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use phpDocumentor\Reflection\Types\Parent_;

class PhaseResource extends JsonResource
{
    /**
     * @var mixed
     */


    /**
     * @var mixed
     */


    public function toArray($request)
    {
//        return parent::toArray($request);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'questions' => QuestionResource::collection($this->questions)
        ];
    }
}
