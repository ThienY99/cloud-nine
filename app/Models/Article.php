<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    protected $fillable = ['title', 'content', 'image', 'published_at'];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Model relations -----------------------------------------------
    function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
    
}
