<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends BaseController
{
    public function index(Request $request)
    {
        $title = 'Sửa thông tin';
        $data =[];
        $info = DB::table('customers')->where('id','=',session('idCustomer'))->where('status', '=', 1)->first();
        $data['username'] = session('usernameCustomer');
        $data['password'] = $info->password;
        $data['fullname'] = $info->fullname;
        $data['phone'] = $info->phone;
        $data['email'] = $info->email;
        $data['address'] = $info->address;
        $data['status'] = $info->status;
//        dd($data);
        return view('frontend.customer.index',$data,compact('title'));
    }
    public function update(Request $request)
    {
        dd($request->all());
    }
}
