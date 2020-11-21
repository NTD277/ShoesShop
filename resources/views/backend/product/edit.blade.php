@extends('backend.dashboard.index')

@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Thêm thương hiệu</p>
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
                <form action="{{route('admin.product.update',['product' => 1])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="right__inputWrapper">
                        <label for="title">Tên thương hiệu</label>
                        <input type="text" placeholder="Tên sản phẩm" name="nameBrand" value="{{$name}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Tên thuộc tính</label>
                        @foreach($nameProperty as $keys => $items)
                        <input type="text" placeholder="Tên thuộc tính" name="nameProperty" value="{{$items}}">
                        @endforeach

                        @foreach($detailProperty as $keys => $items)
                            <input type="text" placeholder="Tên thuộc tính" name="nameProperty" value="{{$items}}">
                        @endforeach
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
                            <option value="0" {{ $status == 0 ? 'selected' : ''}}>Deactive</option>
                        </select>
                    </div>
                    <button class="btn" type="submit">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
