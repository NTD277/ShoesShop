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
        $newProduct = DB::table('brands')
            ->join('products','products.idBrand','=','brands.id')
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
    public function ZToA()
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
                ->orderByDesc('name')
                ->get();
        }
        return $newProduct;
    }

    /* Hiển thị tất cả sản phẩm A-Z*/
    public function AToZ()
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
                ->orderBy('name')
                ->get();
        }
        return $newProduct;
    }

//    public function countProduct()
//    {
//        $newProduct = DB::table('product')
//            ->count('name')
//            ->where('status',1)
//            ->get();
//        return $newProduct;
//    }
}
