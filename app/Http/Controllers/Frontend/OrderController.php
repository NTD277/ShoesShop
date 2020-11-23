<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $data['mess'] = $request->session()->get('mess');
        $infoCustomer = DB::table('customers')->where('status', '=', 1)
            ->where('id', '=', session('idCustomer'))->first();

        $qty = $request->qty;
        $price = $request->price;
        return view('frontend.order.index',$data, compact('qty', 'price', 'infoCustomer'));
    }

    public function handle(Request $request)
    {
        $idCustomer = session('idCustomer');
        $nameOrder = $request->fullname;
        $emailOrder = $request->email;
        $phoneOrder = $request->phone;
        $addressOrder = $request->address;
        $nameProduct = $request->nameProduct;
        $idProduct = $request->idProduct;
        $qtyProduct = $request->qtyProduct;
        $priceProduct = $request->priceProduct;
        $sumMoney = $request->sumMoney;
        $selectQtyProduct = DB::table('products')->where('id','=' , $idProduct)->first()->qty;
//        dd($selectQtyProduct);
        $createOrder = DB::table('orders')->insert([
            'idCustomer' => $idCustomer,
            'idAdmin' => 1,
            'price' => $sumMoney,
            'date' => date('Y-m-d H:i:s'),
            'namePerson' => $nameOrder,
            'address' => $addressOrder,
            'phone' => $phoneOrder,
            'note' => null,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        $createOrderDetail = DB::table('orderdetails')->insert([
            'idProduct' =>$idProduct,
            'qty' => $qtyProduct,
            'note' => null,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        $updateProduct = DB::table('products')
            ->join('orderdetails','orderdetails.idProduct','=','Products.id')
            ->where('products.id' , '=' ,$idProduct)
            ->update([
                'products.qty' => $selectQtyProduct - $qtyProduct,
            ]);
        if ($createOrder && $createOrderDetail){
            $request->session()->flash('mess','Đặt hàng thành công');
            return redirect(route('fr.order'));
        }else{
            $request->session()->flash('mess','Đặt hàng không thành công');
            return redirect(route('fr.order'));
        }
    }
}
