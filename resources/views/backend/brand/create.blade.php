@extends('backend.dashboard.index')

@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Sửa thương hiệu</p>
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
                <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="right__inputWrapper">
                        <label for="title">Tên thương hiệu</label>
                        <input type="text" placeholder="Tên sản phẩm" name="nameBrand">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Hình ảnh</label>
                        <input type="file" name="image">
                    </div>
                    <button class="btn" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
@endsection
