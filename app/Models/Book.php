<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'author_id',
    ];

    /**
     * Get the Author record associated with Book.
     */
    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }

}

