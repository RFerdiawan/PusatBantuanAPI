<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubcategoryController extends Controller
{

    public function index(Subcategory $subcategory)
    {
        $subcategory = Subcategory::all();
        return Subcategory::all();
    }

    public function show($category_id)
    {
        $subcategory = Subcategory::where('category_id', $category_id)
            ->get();
        return $subcategory;

    }

    public function see($id)
    {
        $subcategory = Subcategory::where('id', $id)
            ->get();
        return $subcategory;

    }

    public function search(Request $request)
    {
        $subcategory = collect();

        if ($request->has('category_id')) {
            $subcategory = Subcategory::where('category_id', 'LIKE', '%' . $request->category_id . '%')->get();
        }

        if ($subcategory->isEmpty()) {
            return response([
                'Status' => 'failed',
                'Desc' => 'entry not found',
            ]);
        }
    }
}
