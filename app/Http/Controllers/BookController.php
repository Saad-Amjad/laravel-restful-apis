<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookCollection;
use App\Models\Book;
use Illuminate\Support\Facades\Cache;

class BookController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/v1/books",
     *      operationId="index",
     *      tags={"Books"},
     *      summary="Get list of books",
     *      security={{"apiAuth":{}}},
     *      description="Returns list of books",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/BookCollection")
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *     )
     */
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
