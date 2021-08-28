<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookCollection;
use App\Models\Book;
use Illuminate\Support\Facades\Cache;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cacheKey = md5('books');
        return Cache::remember($cacheKey, 30, function () {
            /* @var Book $books */
            $books = Book::with(['author'])->paginate(5);
            return new BookCollection($books);
        });
    }
}
