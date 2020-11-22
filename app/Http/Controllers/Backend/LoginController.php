<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginPost;
use App\Models\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
//        $data = [];
//        $data['message'] = $request->session()->get('session_login');
//        return view('backend.login.index', $data);

        $msgErr = $request->session()->get('errAdminLogin');
        return view('backend.login.index', compact('msgErr'));
    }

    public function login(
        LoginPost $request,
        Admin $admin
    ) {
//        dd($request->session()->all());
        $username = $request->username;
        $password = $request->password;
        $infoAdmin = $admin->checkAdminLogin($username, $password);
        if($infoAdmin){
            // luu thong tin cua user vao session, de tien cho cac cong viec xu ly sau nay
            $request->session()->put('username', $infoAdmin['username']);
            $request->session()->put('id', $infoAdmin['id']);
            $request->session()->put('fullname', $infoAdmin['fullname']);
            // cho vao trang dashboard
            return redirect(route('admin.dashboard'));
        } else {
            // quay ve lai trang login
            $request -> session() ->flash('errAdminLogin','username or password invalid');
            return redirect(route('admin.login'));
        }

    }

    public function logout(Request $request)
    {
        $request->session()->forget('username');
        $request->session()->forget('id');
        // unset($_SESSION['id']);
        $request->session()->forget('email');
        return redirect(route('backend.login'));
    }
}
