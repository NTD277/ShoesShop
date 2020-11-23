<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SizeController extends BaseController
{
    private function SelectBySize($detail)
    {
        $newProduct = DB::table('products')->select('products.*')
            ->join('productproperties','productproperties.idProduct','=','products.id')
            ->join('properties','properties.id', '=' ,'productproperties.idProperty')
            ->where('properties.name','=', 'size')
            ->where('properties.detail','=', $detail)
            ->where('products.status',1)
//            ->orderBy('price')
            ->get();
        return $newProduct;
    }

    private function typeOfSelect($type, $size = null)
    {
        $newProduct = [];
        $product = new Product();
        if ($type == 'uptodown') {
            $newProduct = $product->UpToDownSize($size);
        }
        elseif ($type == 'downtoup') {
            $newProduct = $product->DownToUpSize($size);
        }
        elseif ($type == 'AZ') {
            $newProduct = $product->AToZSize($size);
        } elseif ($type == 'ZA') {
            $newProduct = $product->ZToASize($size);
        } else {
            $newProduct = $product->SelectiveDefault();
        }
        return $newProduct;
    }
    public function index($detail,$select = null)
    {
        $title = 'size';
        $newProduct = $this->SelectBySize($detail);
        if (!empty($select)) {
            $newProduct = $this->typeOfSelect($select, $detail);

        }
        return view('frontend.body', compact('title', 'newProduct','detail','select'));
    }
}
