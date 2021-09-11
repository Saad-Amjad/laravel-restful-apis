<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $authorsUrl = "api/v1/authors/";
        return [
            'id' => $this->id,
            'name' => $this->name,
            'author_url' => $authorsUrl . "" . $this->id,
            'books' => BookResource::collection($this->books()->get()),
        ];
    }
}
