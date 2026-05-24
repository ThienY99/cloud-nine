<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Category;

class CategoryController extends Controller
{
    function index() // Een lijst met alles
    {
        // Data laden
        $categories = Category::all();

        // Data doorgeven aan view
        return view('admin.categories.index', [
            'categories'=> $categories
        ]);
    }

    function create()
    {
        return view('admin.categories.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'name'=> ['required', 'string', 'min:3', 'max:10'],
        ]);

        Category::create([
            'name'=> $request->name
            ,
        ]);

        return redirect('/admin/categories');

    }
}
