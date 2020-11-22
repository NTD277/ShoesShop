<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColorController extends BaseController
{
    private function SelectByColor($detail)
    {
        $newProduct = DB::table('products')->select('products.*')
            ->join('productproperties','productproperties.idProduct','=','products.id')
            ->join('properties','properties.id', '=' ,'productproperties.idProperty')
            ->where('properties.name','=', 'Màu')
            ->where('properties.detail','=', $detail)
            ->where('products.status',1)
//            ->orderBy('price')
            ->get();
        return $newProduct;
    }

    private function typeOfSelect($type, $color = null)
    {
        $newProduct = [];
        $product = new Product();
        if ($type == 'uptodown') {
            $newProduct = $product->UpToDownColor($color);
        }
        elseif ($type == 'downtoup') {
            $newProduct = $product->DownToUpColor($color);
        }
        elseif ($type == 'AZ') {
            $newProduct = $product->AToZColor($color);
        } elseif ($type == 'ZA') {
            $newProduct = $product->ZToAColor($color);
        } else {
            $newProduct = $product->SelectiveDefault();
        }
        return $newProduct;
    }
    public function index($detail,$select = null)
    {
        $title = 'Color';
        $newProduct = $this->SelectByColor($detail);
        if (!empty($select)) {
            $newProduct = $this->typeOfSelect($select, $detail);

        }
        return view('frontend.body', compact('title', 'newProduct','detail','select'));
    }
}
