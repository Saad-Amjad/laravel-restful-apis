<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
        $booksUrl = "api/v1/books/";

        return [
            'id' => $this->id,
            'title' => $this->title,
            'book_url' => $booksUrl . "" . $this->id,
            'author' => $this->author->name,
            'author_url' => $authorsUrl . "" . $this->author->id,
        ];
    }
}
