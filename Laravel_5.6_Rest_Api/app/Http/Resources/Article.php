<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
    //    return parent::toArray($request);

    // Here we can manipulate what data this api will share
       return [
            'id'=>$this->id,
            'title'=>$this->title,
            'body'=>$this->body
       ];
    }
    
    public function with($request)
    {
        return [
            'Version'=>'1.0.0',
            'Author_url'=>url('http://look-reviews.com')
        ];
    }
}
