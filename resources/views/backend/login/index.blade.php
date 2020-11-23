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

    <form action="{{route('admin.handle.login')}}" method="post" class="form" id="form-1">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="text-align: center">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h3 class="heading-label">Đăng nhập</h3>
        <div class="form-group" >
            <label for="fullname" class="form-label" >Tên đăng nhập</label>
            <input name="username" class="form-input" id="fullname" type="text"  placeholder="VD:Xuân Tùng">
            <span class="form-message"></span>
        </div>
        <div class="form-group" >
            <label for="password" class="form-label">Mật khẩu</label>
            <input name="password" class="form-input" id="password" type="password"  placeholder="Nhập mật khẩu">
            <span class="form-message"></span>
        </div>
        <button class="form-submit" type="submit">Đăng nhập</button>
    </form>

</div>
<script src="{{asset('backend/login/js/index.js')}}"></script>
</body>
</html>
