@extends('backend.dashboard.index')

@section('content')

    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng Admin</div>
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
                <form action="{{route('admin.profile.update')}}" method="post" enctype="multipart/form-data">
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
                        <label for="image">Chức vụ </label>
                        <input type="text" placeholder="Họ tên" name="position" value="{{$position}}">
                    </div>

                    <div class="right__inputWrapper">
                        <label for="statusAdmin">Trạng thái</label>
                        <select name="statusAdmin" id="statusAdmin" class="form-control">
                            <option value="1" {{ $status == 1 ? 'selected' : ''}}>Active</option>
                            <option value="0" {{ $status == 0 ? 'selected' : ''}}>Deactive</option>
                        </select>
                    </div>
                    <button class="btn" type="submit">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
