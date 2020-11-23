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
                <form action="{{route('admin.brand.update',['brand' => $id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="right__inputWrapper">
                        <label for="title">Tên thương hiệu</label>
                        <input type="text" placeholder="Tên sản phẩm" name="nameBrand" value="{{$name}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="image">Hình ảnh</label>
                        <input type="file" name="imageBrand">
                        <img width="auto" src="{{asset('upload/image/brand/' . $image)}}" >
                    </div>
                    <div class="right__inputWrapper">
                        <label for="statusBrand">Trạng thái</label>
                        <select name="statusBrand" id="statusBrand" class="form-control">
                            <option value="1" {{ $status == 1 ? 'selected' : ''}}>Active</option>
                            <option value="0" {{ $status == 1 ? 'selected' : ''}}>Deactive</option>
                        </select>
                    </div>
                    <button class="btn" type="submit">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
