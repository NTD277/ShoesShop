<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends BaseController
{
    public function index(Product $product, $slug)
    {
        $title = 'Chi tiết';
        $newProduct = DB::table('products')
            ->where('status', 1)
            ->where('slug', $slug)
            ->get();
        $colorProduct = DB::table('products')
            ->join('productproperties', 'productproperties.idProduct', '=', 'products.id')
            ->join('properties', 'properties.id', '=', 'productproperties.idProperty')
            ->where('slug', $slug)
            ->where('properties.name', '=', 'màu')
            ->get();
        $sizeProduct = DB::table('products')
            ->join('productproperties', 'productproperties.idProduct', '=', 'products.id')
            ->join('properties', 'properties.id', '=', 'productproperties.idProperty')
            ->where('slug', $slug)
            ->where('properties.name', '=', 'size')
            ->get();
        $imageProduct = DB::table('image_products')
            ->select('image_products.*')
            ->join('products', 'image_products.idProduct', '=','products.id')
            ->where('products.slug', $slug)
            ->get();
//        dd($imageProduct);
//        $newProductHeader = $product->SelectByNumber(5,'adidas');
        return view('frontend.products.show', compact('title','newProduct', 'colorProduct', 'sizeProduct','imageProduct'));
    }

    public function ProductBrand()
    {
        $newProduct = DB::table('Product')
            ->where('status', 1)
            ->get();
        return $newProduct;
    }
}
