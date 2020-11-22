<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('backend/login/css/main.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <title>Form Validation</title>
</head>
<body>
<div class="main" >
    @if (session('mess'))
        <div class="alert alert-info">
            <h3 style="text-align: center">{{session('mess')}}</h3>
        </div>
    @endif
    <form action="{{route('fr.handle.registration')}}" method="post" class="form" id="form-1">
        @csrf
        @method('GET')
        <h3 class="heading-label">Thành viên đăng ký</h3>
        <p class="desc">Cùng nhau chia sẻ kiến thức về điện thoại tại đây</p>
        <div class="form-group " >
            <label for="fullname " class="form-label">Tên đầy đủ</label>
            <input name="username" class="form-input" id="fullname" type="text"  placeholder="VD:Xuân Tùng">
            <span class="form-message"></span>
        </div>
        <div class="form-group " >
            <label for="email" class="form-label">Email</label>
            <input name="email" class="form-input  " id="email" type="text"  placeholder="VD:tungtrinh99@gmail.com">
            <span class="form-message"></span>
        </div>
        <div class="form-group" >
            <label for="password" class="form-label">Mật khẩu</label>
            <input name="password" class="form-input" id="password" type="password"  placeholder="Nhập mật khẩu">
            <span class="form-message"></span>
        </div>
        <div class="form-group" >
            <label for="password-comfirm" class="form-label">Nhập lại mật khẩu</label>
            <input class="form-input" id="password-comfirm" type="password"  placeholder="Nhập lại mật khẩu">
            <span class="form-message"></span>
        </div>
        <button class="form-submit" type="submit">Đăng ký</button>
    </form>
</div>
<script src="{{asset('backend/login/js/index.js')}}"></script>
</body>
</html>
a
