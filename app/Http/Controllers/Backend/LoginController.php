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
        $data = [];
        $data['message'] = $request->session()->get('session_login');
        // $data['message'] = $_SESSION['session_login'] ?? '';
        return view('backend.login.index', $data);
    }

    public function handleLogin(
        LoginPost $request,
        Admin $admin
    ) {
        $username = $request->username;

        $password = $request->password;
        $infoAdmin = $admin->checkAdminLogin($username, $password);
        if($infoAdmin){
            // luu thong tin cua user vao session, de tien cho cac cong viec xu ly sau nay
            $request->session()->put('username', $infoAdmin['username']);
            // $_SESSION['username'] = $infoAdmin['username']
            $request->session()->put('id', $infoAdmin['id']);
            $request->session()->put('fullname', $infoAdmin['fullname']);

            // cap nhat lai last_login trong db
//            $admin->updateLastLogin($infoAdmin['id']);
            // cho vao trang dashboard
            return redirect(route('admin.dashboard'));
        } else {
            // tao ra session flash de thong bao loi
            // quay ve lai trang login
            $request->session()->flash('session_login', 'Username hoac mat khau khong dung');
            return redirect(route('admin.login'));
        }

    }

    public function logout(Request $request)
    {
        // xoa het session
        // quay ve form login
        $request->session()->forget('username');
        $request->session()->forget('id');
        // unset($_SESSION['id']);
        $request->session()->forget('email');
        return redirect(route('backend.login'));
    }
}
