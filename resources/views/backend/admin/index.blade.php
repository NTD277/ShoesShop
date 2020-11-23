@extends('backend.dashboard.index')
<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
@section('content')

    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng Admin</div>
            <p class="right__desc">thông tin </p>
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
                <form action="" method="" enctype="multipart/form-data">
                    @csrf
{{--                    @method('get')--}}
                    <div class="right__inputWrapper">
                        <label for="title">Tên đăng nhập</label>
                        <input readonly type="text" placeholder="Tên đăng nhập" name="username" value="{{$info->username}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Mật khẩu</label>
                        <input readonly type="password" placeholder="Mật khẩu" name="password" value="{{$info->password}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Họ tên</label>
                        <input readonly type="text" placeholder="Họ tên" name="fullname" value="{{$info->fullname}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Điện thoại</label>
                        <input readonly type="text" placeholder="Điện thoại" name="phone" value="{{$info->phone}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Email</label>
                        <input readonly type="email" placeholder="Email" name="email" value="{{$info->email}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Đỉa chỉ</label>
                        <input readonly type="text" placeholder="Địa chỉ" name="address" value="{{$info->address}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Chức vụ </label>
                        <input readonly type="text" placeholder="Họ tên" name="position" value="{{$info->position}}">
                    </div>

                    <div class="right__inputWrapper">
                        <label for="statusAdmin">Trạng thái</label>
                        <select name="statusAdmin" id="statusAdmin" class="form-control">
                            <option value="1" {{ $info->status == 1 ? 'selected' : ''}}>Active</option>
                            <option value="0" {{ $info->status == 0 ? 'selected' : ''}}>Deactive</option>
                        </select>
                    </div>
                    <a href="{{route('admin.profile.edit',['id' => $info->id])}}">Sửa</a>
                </form>
            </div>
        </div>
    </div>
@endsection
