<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function index()
    {
        $categories = Category::orderBy('name')->get();

        return view('categories.index', [
            'categories' => $categories
        ]);
    }



    function show(Category $category)
    {
        // Mag overgeslagen worden, want ik type-hint het model in de functie
        //$category = \App\Models\Category::findOrFail($category);

        return view('categories.show', [
            'category' => $category
        ]);
    }
}
