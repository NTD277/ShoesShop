<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginCustomerPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login.index');
    }

    public function registration()
    {
        return view('frontend.login.registration');
    }

    public function handleRegistration(Request $request)
    {
        $username = $request->username ?? '';
        $email = $request->email ?? '' ;
        $password = $request->password ?? '';
        $registration = DB::table('customers')->insert([
            'username' => $username,
            'password' => $password,
            'fullname' => null,
            'phone' => null,
            'email' => $email,
            'address' => null,
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => null
        ]);
        if ($registration){
            //dang ky thanh cong
            $request->session()->flash('mess','Đăng ký thành công');
            return redirect(route('fr.login'));
        }else{
            //dang ky that bai
            $request->session()->flash('mess','Đăng ký không thành công');
            return redirect(route('fr.registration'));
        }
    }

    public function handleLogin (LoginCustomerPost $request)
    {
        $username = $request->username ?? '';
        $password = $request->password ?? '';
        $check = DB::table('customers')->select('*')
            ->where('username' , '=', $username)
            ->where('password', '=', $password)
            ->where('status', '=', 1)
            ->first() ?? false;
        if ($check){
            $request->session()->put('usernameCustomer', $check->username);
            $request->session()->put('idCustomer', $check->id);
            return redirect(route('fr.home'));
        }
        else{
            $request->session()->flash('mess','Đăng nhập không thành công');
            return redirect(route('fr.login'));
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('usernameCustomer');
        $request->session()->forget('idCustomer');
        return redirect(route('fr.home'));
    }
}
