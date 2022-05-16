<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WebController extends Controller
{
   public function all_categories(){
        $categories = DB::table('categories')::all();
        return view('web-views.categories',compact('categories'));
   }
   public function categories_by_category($id)
    {
        $category = DB::table('categories')::with(['childes.childes'])->where('id', $id)->first();
        return response()->json([
            'view' => view('web-views.categories', compact('category'))->render(),
        ]);
    }
}
