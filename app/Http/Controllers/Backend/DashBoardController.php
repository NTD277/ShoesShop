<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        $title = 'Trang chủ  -  Admin';
        $sumProduct = DB::table('products')->count();
        $sumCustomer = DB::table('customers')->count();
        $sumBrand = DB::table('brands')->count();
        $sumOrder = DB::table('orders')->count();
        return view('backend.partials.right',compact('title','sumProduct','sumCustomer','sumBrand','sumOrder'));
    }
}
