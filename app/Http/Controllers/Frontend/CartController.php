<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(Request $request)
    {
        if (session('idCustommer')) {
        $idProduct = $request->get('id');
        $infoProduct= DB::table('products')->select('products.*')
            ->where('id' , '=',$idProduct)->get();
        $request->session()->put('cart', $infoProduct);
//        session(['cart' => $infoProduct]);
        return view('frontend.cart.index');
        }else{
            $request->session()->flash('mess','Đăng nhập để mua hàng');
            return redirect(route('fr.login'));
        }
    }
}
