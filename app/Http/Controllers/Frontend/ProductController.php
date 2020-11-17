<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Product $product, $slug)
    {
//        dd($slug);
        $newProduct = DB::table('products')
            ->where('status', 1)
            ->where('slug', $slug)
            ->offset(0)
            ->limit(8)
            ->get();
//        dd($newProduct);

        $newProductHeader = $product->SelectByNumber(5, 'adidas');
        $newProductHeader2 = $product->SelectByNumber(5, 'nike');
//        $newProductHeader = $product->SelectByNumber(5,'adidas');
        return view('frontend.products.show', compact('newProduct', 'newProductHeader', '$newProductHeader2'));
    }

    public function ProductBrand()
    {
        $newProduct = DB::table('Product')
            ->where('status', 1)
            ->get();
        return $newProduct;
    }
}
