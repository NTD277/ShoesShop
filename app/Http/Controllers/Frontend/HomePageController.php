<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

class HomePageController extends BaseController
{
    private function typeOfSelect($type)
    {
        $newProduct = [];
        $product = new Product();
        if ($type == 'uptodown') {
            $newProduct = $product->UpToDown();
        } elseif ($type == 'downtoup') {
            $newProduct = $product->DownToUp();
        } elseif ($type == 'AZ') {
            $newProduct = $product->AToZ();
        } elseif ($type == 'ZA') {
            $newProduct = $product->ZToA();
        } else {
            $newProduct = $product->SelectiveDefault();
        }
        return $newProduct;
    }
    public function index($select = null)
    {
        $title = 'Trang chủ';
        $route = Route::current();
        $select = $route->parameters['select'] ?? null;
        $newProduct = $this->typeOfSelect($select);

//        dd($newProduct);
        // lấy 1 ảnh theo idProduct;
        $image = DB::table('image_products')->select('image_products.name')
            ->join('products','products.id','=' , 'image_products.idProduct')
//            ->where('image_products.idProduct','=',$id)
            ->get();
//        dd($newProduct);
        return view('frontend.body', compact('title', 'newProduct','select'));
    }

}
