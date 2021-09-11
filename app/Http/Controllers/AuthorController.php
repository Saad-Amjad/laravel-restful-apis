<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorCollection;
use App\Models\Author;

class AuthorController extends Controller
{

    /**
     *
     * TODO Doc Block
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* @var Author $authors */
        $authors = Author::with(['books'])->paginate(5);
        return new AuthorCollection($authors);
    }
}
