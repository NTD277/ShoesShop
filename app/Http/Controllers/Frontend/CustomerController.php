<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends BaseController
{
    public function index()
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
        $id = session('idCustomer');
        $username = $request->username;
        $password = $request->password;
        $fullname = $request->fullname;
        $phone = $request->phone;
        $email = $request->email;
        $address = $request->address;

        $update = DB::table('customers')->where('id','=',$id)
            ->update([
                'username' => $username,
                'password' => $password,
                'fullname' => $fullname,
                'phone' => $phone,
                'email' => $email,
                'address' => $address,
                'updated_at' =>date('Y-m-d H:i:s')
            ]);
        if ($update){
            $request->session()->flash('mess','Update thành công');
            return redirect(route('fr.profile'));
        }else{
            $request->session()->flash('mess','Update không thành công');
            return redirect(route('fr.profile'));
        }
    }
}
