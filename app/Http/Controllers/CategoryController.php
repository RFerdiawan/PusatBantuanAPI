<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request)
    {
        $category = Category::get();
        return Category::all();
        //return new CategoryCollection($category);
    }
}
