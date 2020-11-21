@extends('backend.dashboard.index')
@push('stylesheets')
    <link type="text/css" rel="stylesheet" href="{{asset('backend/css/image-uploader.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

@endpush
@section('content')
    <div class="right">
        <div class="right__content">
            <div class="right__title">Bảng điều khiển</div>
            <p class="right__desc">Sửa thương hiệu</p>
            <div class="right__formWrapper">
                @if (session('mess'))
                    <div class="alert alert-info">
                        <h3 style="text-align: center">{{session('mess')}}</h3>
                    </div>
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
                        <label for="title">Tên sản phẩm</label>
                        <input type="text" placeholder="Tên sản phẩm" name="nameProduct">
                    </div>


                    <div class="right__inputWrapper">
                        <label for="title">Tên thương hiệu</label>
                        <select class="form-control js-search-brand" id="brandProduct" name="brandProduct">
                            <option value="">--Chọn thương hiệu--</option>
                            @foreach($brand as $keys => $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Giá</label>
                        <input type="text" placeholder="Giá" name="priceProduct">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Số lượng</label>
                        <input type="text" placeholder="Số lượng" name="qtyProduct">
                    </div>
                    <div class="right__inputWrapper">
                        <label>Màu</label>
                        @foreach($properties as $keys =>$items)
                            <input type="checkbox" name="{{$items->id}}" value="{{$items->detail}}">
                            <lable for="{{$items->id}}">{{$items->detail}}</lable>
                        @endforeach
                    </div>
                    <div class="right__inputWrapper">
                        <label>Size</label>
                        @foreach($propertiesSize as $keys =>$items)
                            <input type="checkbox" name="{{$items->id}}" value="{{$items->detail}}">
                            <lable for="{{$items->id}}">{{$items->detail}}</lable>
                        @endforeach
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Ghi chú</label>
                        <input style="width: 100% !important;" type="text" placeholder="Ghi chú" name="noteProduct">
                    </div>
                    <div class="right__inputWrapper input-field">
                        <label for="avatarProduct">Ảnh đại diện sản phẩm</label>
                        <div class="input-images-1" type="text" name="avatarProduct" id="avatarProduct"></div>
                    </div>

                    <div class="right__inputWrapper input-field">
                        <label for="imageProducts">Ảnh chi tiết sản phẩm</label>
                        <div class="input-images" type="text" name="imageProducts" id="imageProducts"></div>
                    </div>
                    <button class="btn" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('javascripts')
    <script src="{{asset('backend/js/image-uploader.min.js')}}"></script>
    <script type="text/javascript">
        $(function (){
            $('.input-images').imageUploader();
            $('.input-images-1').imageUploader();
        });
    </script>
@endpush
