<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class productController extends Controller
{
    public function getProductos(){
        $products=Product::where('estado','=','1')->addSelect(['categoria'=>Category::select('nombre')
        ->whereColumn('category_id','id')])
        ->get();
        return response()->json($products,200);
    }
    
    public function postProduct(Request $request){
        $product=product::create($request->all());
        return response($product,201);
    }

    public function delProduct($id){
        $prod=Product::find($id);
        if(is_null($prod)){
            return response()->json(['mensaje'=>'producto no encontrado'],404);
        }
        $prod->delete();

        return response(null,204);
    }

    public function getProduct($id){
        $prod=Product::find($id);
        if(is_null($prod)){
            return response()->json(['mensaje'=>'producto no encontrado'],404);
        }
       return response()->json($prod,200);
    }

    public function putProduct($id, Request $req){
        $prod=Product::find($id);
        if(is_null($prod)){
            return response()->json(['mensaje'=>'producto no encontrado'],404);
        }
      $prod->update($req->all());
      return response($prod,200);
    }
}
