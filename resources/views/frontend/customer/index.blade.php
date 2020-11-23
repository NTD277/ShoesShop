{{--@extends('frontend.home.index')--}}
{{--@push('stylesheets')--}}
{{--    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">--}}
{{--    <link type="text/css" rel="stylesheet" href="http://example.com/image-uploader.min.css">--}}
{{--    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">--}}
{{--@endpush--}}
{{--<style>--}}
{{--    .right{--}}
{{--        margin-top: var(--header-height);--}}
{{--    }--}}
{{--</style>--}}
{{--@section('content')--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
    <title>Document</title>
</head>
<style>
    input {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        display: flex;
        align-items: center;
        width: 45%;
        justify-content: center;
    }

    .btn-warning {
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236;
    }

    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }
    .wrapper-btn{
        display: flex;
        justify-content: space-between;
    }
</style>
<body>
<div class="wrapper">
    <div class="container">
        <div class="dashboard">
    <div class="right">
    <div class="right__content">
        <div class="right__title">Khách Hàng</div>
        <p class="right__desc">Sửa thông tin </p>
        <div class="right__formWrapper">
            @if (session('mess'))
                <div class="alert alert-info">{{session('mess')}}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="text-align: center">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('fr.profile.handle.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('get')
                <div class="right__inputWrapper">
                    <label for="title">Tên đăng nhập</label>
                    <input type="text" placeholder="Tên đăng nhập" name="username" value="{{$username}}">
                </div>
                <div class="right__inputWrapper">
                    <label for="image">Mật khẩu</label>
                    <input type="password" placeholder="Mật khẩu" name="password" value="{{$password}}">
                </div>
                <div class="right__inputWrapper">
                    <label for="image">Họ tên</label>
                    <input type="text" placeholder="Họ tên" name="fullname" value="{{$fullname}}">
                </div>
                <div class="right__inputWrapper">
                    <label for="image">Điện thoại</label>
                    <input type="text" placeholder="Điện thoại" name="phone" value="{{$phone}}">
                </div>
                <div class="right__inputWrapper">
                    <label for="image">Email</label>
                    <input type="email" placeholder="Email" name="email" value="{{$email}}">
                </div>
                <div class="right__inputWrapper">
                    <label for="image">Đỉa chỉ</label>
                    <input type="text" placeholder="Địa chỉ" name="address" value="{{$address}}">
                </div>

                <div class="right__inputWrapper">
                    <label for="statusAdmin">Trạng thái</label>
                    <select name="statusAdmin" id="statusAdmin" class="form-control">
                        <option value="1" {{ $status == 1 ? 'selected' : ''}}>Active</option>
                        <option value="0" {{ $status == 0 ? 'selected' : ''}}>Deactive</option>
                    </select>
                </div>
                <div class="wrapper-btn">
                    <a href="/" class="btn">Hủy</a>
                    <button class="btn" type="submit">Lưu</button>
                </div>

            </form>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
</body>
</html>

{{--@endsection--}}
{{--@push('javascripts')--}}
{{--<script type="text/javascript" src="{{asset('backend/js/jquery.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('backend/js/image-uploader.min.js')}}"></script>--}}
{{--<script src="{{asset('backend/js/main.js')}}"></script>--}}
{{--@endpush--}}
