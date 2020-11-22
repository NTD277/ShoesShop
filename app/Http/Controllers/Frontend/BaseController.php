<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
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
    public function __construct()
    {
        $product = new Product();
        $brand = new Brand();
        $data = [];
        $route = Route::current();
        $data['slugBrand'] = $route->parameters['slug'] ?? '';
        $data['slugColor'] = $route->parameters['detailColor'] ?? '';
        $data['select'] = $route->parameters['select'] ?? '';
        $data['newBrand'] = Brand::where('status',1)->get();
        $data['color'] = Property::where('status',1)->where('name','Màu')->get();
        $data['size'] = Property::where('status',1)->where('name','size')->get();
        $data['productHeader'] = $product->SelectByNumber(5,'adidas');
        View::share('data',$data);
    }
}
