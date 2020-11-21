<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class BrandController extends BaseController
{
    private function SelectByBrand($slug)
    {
        $newProduct = DB::table('brands')
            ->join('products','brands.id','=','products.idBrand')
            ->where('brands.slug',$slug)
            ->where('products.status',1)
            ->orderBy('price')
            ->get();
        return $newProduct;
    }
    private function typeOfSelect($type, $slugBrand = null)
    {
        $newProduct = [];
        $product = new Product();
        if ($type == 'uptodown') {
            $newProduct = $product->UpToDown($slugBrand);
        } elseif ($type == 'downtoup') {
            $newProduct = $product->DownToUp($slugBrand);
        } elseif ($type == 'AZ') {
            $newProduct = $product->AToZ($slugBrand);
        } elseif ($type == 'ZA') {
            $newProduct = $product->ZToA($slugBrand);
        } else {
            $newProduct = $product->SelectiveDefault();
        }
        return $newProduct;
    }
    public function index($slug,$select = null)
    {
//        dd($slug);
        $title = 'Brand';
        $newProduct = $this->SelectByBrand($slug);
        if (!empty($select)) {
            $newProduct = $this->typeOfSelect($select, $slug);
        }
        if (!$this->checkBrand($slug)){
            abort(404);
        }
        return view('frontend.body', compact('title', 'newProduct','select'));
    }

    private function checkBrand($slug)
    {
        $checkBrand = Brand::where('status',1)->get();
        foreach ($checkBrand as $keys => $items)
        {
            $a[$keys] = $items->slug;
        }
        if (!in_array($slug,$a))
            return false;
        return true;
    }
}
