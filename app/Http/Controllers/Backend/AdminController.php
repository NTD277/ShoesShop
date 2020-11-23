<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $info = DB::table('admins')->where('id','=',session('id'))
            ->where('status','=', 1)->first();
        return view('backend.admin.index',compact('info'));
    }
    public function edit($id)
    {
        $infoAdmin = DB::table('admins')
            ->where('status','1')
            ->where('id', '=', $id)
            ->first();
//        dd($infoAdmin);
        $data['username'] = $infoAdmin->username;
        $data['password'] = $infoAdmin->password;
        $data['fullname'] = $infoAdmin->fullname;
        $data['phone'] = $infoAdmin->phone;
        $data['email'] = $infoAdmin->email;
        $data['address'] = $infoAdmin->address;
        $data['position'] = $infoAdmin->position;
        $data['status'] = $infoAdmin->status;
        return view('backend.admin.edit',$data);
    }

    public function update(Request $request)
    {
        $id = session('id');
        $username = $request->username ?? '';
        $password = $request->password ?? '';
        $fullname = $request->fullname ?? '';
        $phone = $request->phone ?? '';
        $email = $request->email ?? '';
        $address = $request->address ?? '';
        $status = $request->statusAdmin;
        $updateAdmin = DB::table('admins')->where('id','=', $id)
            ->update([
                'password' => $password,
                'fullname' => $fullname,
                'phone' => $phone,
                'email' => $email,
                'address' => $address,
                'status' => $status,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        if ($updateAdmin){
            $request->session()->put('fullname', $fullname);
            $request->session()->flash('mess','Update thông tin thành công');
            return redirect(route('admin.profile.index'));
        }else{
            $request->session()->flash('mess','Update thông tin không thành công');
            return redirect(route('admin.profile.index'));
        }
    }
}
