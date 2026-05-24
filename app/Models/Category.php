<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\CategoryFactory;


class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $fillable = ['name'];

        public function articles()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'category_id', 'id');
    }

        public function products()
    {
        return $this->hasMany(Product::class);
    }
    
}
