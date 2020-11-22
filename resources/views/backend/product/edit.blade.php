@extends('backend.dashboard.index')
@push('stylesheets')
    <link type="text/css" rel="stylesheet" href="{{asset('backend/css/image-uploader.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

@endpush
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
                <form action="{{route('admin.product.update',['product' => $id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="right__inputWrapper">
                        <label for="nameProduct">Tên sản phẩm</label>
                        <input type="text" placeholder="Tên sản phẩm" name="nameProduct" value="{{$name}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label>Thương hiệu</label>
                        <select class="form-control js-search-brand" id="brandProduct" name="brandProduct">
                            <option value="{{$nameBrand}}">{{$nameBrand}}</option>
                            @foreach($brand as $keys => $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

{{--                    <div class="right__inputWrapper">--}}
{{--                        <label for="title">Màu</label>--}}
{{--                        @foreach($color as $keys =>$items)--}}
{{--                            @foreach($colorProperty as $key => $item)--}}
{{--                                <input {{$item == $items->detail ? 'checked' : ''}} type="checkbox"--}}
{{--                                       name="{{$items->detail}}" value="{{$items->detail}}">--}}
{{--                                <lable for="{{$items->detail}}">{{$items->detail}}</lable>--}}
{{--                            @endforeach--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
                    <div class="right__inputWrapper">
                        <label for="title">Màu</label>
                        <select class="form-control js-search-brand" id="colorProduct" name="colorProduct">

                            <option value="">--Chọn màu--</option>
                            @foreach($properties as $keys =>$items)
                                <div class="right-checkbox-wrapper">
                                    <option value="{{$items->detail}}">{{$items->detail}}</option>
                                </div>
                            @endforeach
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">size</label>
                        @foreach($size as $keys => $items)
                            @foreach($sizeProperty as $key => $item)
                                <input {{$item == $items->detail ? 'checked' : ''}} type="checkbox"
                                       name="{{$items->detail}}" value="{{$items->detail}}">
                                <lable for="{{$items->detail}}">{{$items->detail}}</lable>
                            @endforeach
                        @endforeach
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Giá</label>
                        <input type="text" placeholder="Giá" name="priceProduct" value="{{$price}}">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Số lượng</label>
                        <input type="text" placeholder="Số lượng" name="qtyProduct" value="{{$qty}}">
                    </div>
                    <div class="right__inputWrapper input-field">
                        <label for="imageProducts">Ảnh sản phẩm</label>
                        <div class="input-images has-files" type="text" name="imageProducts" id="imageProducts"></div>
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
@push('javascripts')
    <script src="{{asset('backend/js/image-uploader.min.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            $('.input-images').imageUploader();
        });
    </script>
@endpush
