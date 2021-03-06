<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable =['id', 'idBrand', 'slug', 'name', 'price', 'qty', 'note', 'status', 'created_at', 'updated_at'];

    public function brands()
    {
        return $this->belongsTo('App\Model\Brand');
    }

    /* Hiển thị thông tin tất cả sản phẩm */
    public function SelectiveDefault()
    {
        $newProduct = DB::table('products')
//            ->paginate(15)
            ->where('status',1)
            ->get();
        return $newProduct;
    }
    /* Hiển thị tất cả sản phẩm theo thương hiệu*/
    public function SelectByBrand($slug)
    {
        $newProduct = DB::table('brands')
            ->join('products','brands.id','=','products.idBrand')
            ->where('brands.slug',$slug)
            ->where('products.status',1)
            ->get();
        return $newProduct;
    }

    public function SelectByBrandAndDescPrice($slug)
    {
        $newProduct = DB::table('brands')
            ->join('products','brands.id','=','products.idBrand')
            ->where('brands.slug',$slug)
            ->where('products.status',1)
            ->orderByDesc('price')
            ->get();
        return $newProduct;
    }

    public function SelectByBrandAndAscPrice($slug)
    {
        $newProduct = DB::table('brands')
            ->join('products','brands.id','=','products.idBrand')
            ->where('brands.slug',$slug)
            ->where('products.status',1)
            ->orderBy('price')
            ->get();
        return $newProduct;
    }

    /*Hien thi X sp*/
    public function SelectByNumber($limit,$nameBrand){
        $newProduct = DB::table('products')->select('products.*','brands.name as nameBrand','brands.slug as slugBrand' )
            ->join('brands','products.idBrand','=','brands.id')
            ->where('products.status',1)
            ->where('brands.name',$nameBrand)
            ->limit($limit)
            ->get();
        return $newProduct;
    }
    /* Hiển thị tất cả sản phẩm Gia tu cao xuong thap*/
    public function UpToDown($slugBrand = null)
    {
        $newProduct = [];
        if (empty($slugBrand)){
            $newProduct = DB::table('products')
                ->where('status',1)
                ->orderByDesc('price')
                ->get();
        }
        else {
            $newProduct = DB::table('brands')
                ->join('products', 'brands.id', '=', 'products.idBrand')
                ->where('products.status', 1)
                ->where('brands.slug', $slugBrand)
                ->orderByDesc('price')
                ->get();
        }
        return $newProduct;
    }

    /* Hiển thị tất cả sản phẩm Gia tu thap den cao*/
    public function DownToUp($slugBrand = null)
    {
        $newProduct = [];
        if (empty($slugBrand)){
            $newProduct = DB::table('products')
                ->where('status',1)
                ->orderBy('price')
                ->get();
        }
        else {
            $newProduct = DB::table('brands')
                ->join('products', 'brands.id', '=', 'products.idBrand')
                ->where('products.status', 1)
                ->where('brands.slug', $slugBrand)
                ->orderBy('price')
                ->get();
        }
        return $newProduct;
    }

    /* Hiển thị tất cả sản phẩm Z-A*/
    public function ZToA($slugBrand = null)
    {
        if (empty($slugBrand)){
            $newProduct = DB::table('products')
                ->where('status',1)
                ->orderByDesc('name')
                ->get();
        }
        else {
            $newProduct = DB::table('brands')
                ->join('products', 'brands.id', '=', 'products.idBrand')
                ->where('products.status', 1)
                ->where('brands.slug', $slugBrand)
                ->orderByDesc('products.name')
                ->get();
        }
        return $newProduct;
    }

    /* Hiển thị tất cả sản phẩm A-Z*/
    public function AToZ($slugBrand = null)
    {
        if (empty($slugBrand)){
            $newProduct = DB::table('products')
                ->where('status',1)
                ->orderBy('name')
                ->get();
        }
        else {
            $newProduct = DB::table('brands')
                ->join('products', 'brands.id', '=', 'products.idBrand')
                ->where('products.status', 1)
                ->where('brands.slug', $slugBrand)
                ->orderBy('products.name')
                ->get();
        }
        return $newProduct;
    }




// ///////////////////////////////////   COLOR/////////////////////
    public function UpToDownColor($color = null)
    {
        $newProduct = [];
        if (empty($color)){
            $newProduct = DB::table('products')->select('products.*')
                ->where('status',1)
                ->orderByDesc('price')
                ->get();
        }
        else {
            $newProduct = DB::table('products')->select('products.*')
                ->join('productproperties','productproperties.idProduct','=','products.id')
                ->join('properties','properties.id', '=' ,'productproperties.idProperty')
                ->where('properties.name','=', 'Màu')
                ->where('products.status', 1)
                ->where('properties.detail', $color)
                ->orderByDesc('products.price')
                ->get();
        }
        return $newProduct;
    }


    public function DownToUpColor($color = null)
    {
        $newProduct = [];
        if (empty($color)){
            $newProduct = DB::table('products')->select('products.*')
                ->where('status',1)
                ->orderBy('price')
                ->get();
        }
        else {
            $newProduct = DB::table('products')->select('products.*')
                ->join('productproperties','productproperties.idProduct','=','products.id')
                ->join('properties','properties.id', '=' ,'productproperties.idProperty')
                ->where('properties.name','=', 'Màu')
                ->where('products.status', 1)
                ->where('properties.detail', $color)
                ->orderBy('products.price')
                ->get();
        }
        return $newProduct;
    }

    public function ZToAColor($color = null)
    {
        $newProduct = [];
        if (empty($color)){
            $newProduct = DB::table('products')->select('products.*')
                ->where('status',1)
                ->orderByDesc('price')
                ->get();
        }
        else {
            $newProduct = DB::table('products')->select('products.*')
                ->join('productproperties','productproperties.idProduct','=','products.id')
                ->join('properties','properties.id', '=' ,'productproperties.idProperty')
                ->where('properties.name','=', 'Màu')
                ->where('products.status', 1)
                ->where('properties.detail', $color)
                ->orderByDesc('products.name')
                ->get();
        }
        return $newProduct;
    }


    public function AToZColor($color = null)
    {
        $newProduct = [];
        if (empty($color)){
            $newProduct = DB::table('products')->select('products.*')
                ->where('status',1)
                ->orderBy('price')
                ->get();
        }
        else {
            $newProduct = DB::table('products')->select('products.*')
                ->join('productproperties','productproperties.idProduct','=','products.id')
                ->join('properties','properties.id', '=' ,'productproperties.idProperty')
                ->where('properties.name','=', 'Màu')
                ->where('products.status', 1)
                ->where('properties.detail', $color)
                ->orderBy('products.name')
                ->get();
        }
        return $newProduct;
    }

    /////////////////////////////////
    public function UpToDownSize($size = null)
    {
        $newProduct = [];
        if (empty($size)){
            $newProduct = DB::table('products')->select('products.*')
                ->where('status',1)
                ->orderByDesc('price')
                ->get();
        }
        else {
            $newProduct = DB::table('products')->select('products.*')
                ->join('productproperties','productproperties.idProduct','=','products.id')
                ->join('properties','properties.id', '=' ,'productproperties.idProperty')
                ->where('properties.name','=', 'size')
                ->where('products.status', 1)
                ->where('properties.detail', $size)
                ->orderByDesc('products.price')
                ->get();
        }
        return $newProduct;
    }

    public function DownToUpSize($size = null)
    {
        $newProduct = [];
        if (empty($size)){
            $newProduct = DB::table('products')->select('products.*')
                ->where('status',1)
                ->orderBy('price')
                ->get();
        }
        else {
            $newProduct = DB::table('products')->select('products.*')
                ->join('productproperties','productproperties.idProduct','=','products.id')
                ->join('properties','properties.id', '=' ,'productproperties.idProperty')
                ->where('properties.name','=', 'size')
                ->where('products.status', 1)
                ->where('properties.detail', $size)
                ->orderBy('products.price')
                ->get();
        }
        return $newProduct;
    }

    public function ZToASize($size = null)
    {
        $newProduct = [];
        if (empty($size)){
            $newProduct = DB::table('products')->select('products.*')
                ->where('status',1)
                ->orderByDesc('price')
                ->get();
        }
        else {
            $newProduct = DB::table('products')->select('products.*')
                ->join('productproperties','productproperties.idProduct','=','products.id')
                ->join('properties','properties.id', '=' ,'productproperties.idProperty')
                ->where('properties.name','=', 'size')
                ->where('products.status', 1)
                ->where('properties.detail', $size)
                ->orderByDesc('products.name')
                ->get();
        }
        return $newProduct;
    }

    public function AToZSize($size = null)
    {
        $newProduct = [];
        if (empty($size)){
            $newProduct = DB::table('products')->select('products.*')
                ->where('status',1)
                ->orderBy('price')
                ->get();
        }
        else {
            $newProduct = DB::table('products')->select('products.*')
                ->join('productproperties','productproperties.idProduct','=','products.id')
                ->join('properties','properties.id', '=' ,'productproperties.idProperty')
                ->where('properties.name','=', 'size')
                ->where('products.status', 1)
                ->where('properties.detail', $size)
                ->orderBy('products.name')
                ->get();
        }
        return $newProduct;
    }
}
