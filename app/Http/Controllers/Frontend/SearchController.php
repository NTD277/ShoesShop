<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends BaseController
{
    public function index(Request $request, $select = null)
    {
        $title= 'Trang chủ';
        $keyword = $request->search;
        $newProduct = DB::table('products')
            ->where('name', 'like' , '%'. $keyword.'%' )
            ->get();
//        dd($newProduct);
        return view('frontend.body', compact('title', 'newProduct','select'));
    }

}
