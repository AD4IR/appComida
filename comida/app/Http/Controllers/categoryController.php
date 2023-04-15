<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function getCategorias(){
        return response()->Json(Category::all(),200);
    }

    public function postCategory(Request $request){
        $category=Category::create($request->all());
        return response($category,201);
    }
}
