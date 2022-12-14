<?php

namespace DVelazquez\Timing\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TimingCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'elements' =>  parent::toArray($request),
            'totalElements' => 0,
            'currentPage' => 0,                        
        ];
    }
}
