<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ActivityResource extends JsonResource
{
    public function toArray($request)
    {
//        return parent::toArray($request);

        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'user_type_id' => $this->user_type_id,
            'data' => $this->data,
        ];
    }
}
