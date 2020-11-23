@extends('backend.dashboard.index')
@push('stylesheets')
    <link type="text/css" rel="stylesheet" href="{{asset('backend/css/image-uploader.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <style lang="scss">
        .right-checkbox-wrapper{
            display: flex;
            margin: 4px 0;
        }
        input[type=checkbox]{
            width: 20px;
            height: 20px;
            transition: 1s;
            margin:0 8px;

        }
        .image-uploader{

        }
    </style>
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
                            <option value="{{$idBrand}}">{{$nameBrand}}</option>
                            @foreach($brand as $keys => $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="right__inputWrapper">

{{--                        <label for="title">Chọn màu</label>--}}
{{--                        <select class="form-control js-search-brand" id="colorProduct" name="colorProduct">--}}

{{--                            <option value=""></option>--}}
{{--                            @foreach($color as $keys =>$items)--}}
{{--                                <option name="{{$items->id}}" value="{{$items->detail}}">{{$items->detail}}</option>--}}

{{--                            @endforeach--}}
{{--                        </select>--}}

{{--                        <label for="title">Màu</label>--}}
{{--                        @foreach($color as $keys =>$items)--}}
{{--                            <input--}}
{{--                                @foreach($colorProperty as $key => $item)--}}
{{--                                    @if($item == $items->detail)--}}
{{--                                        checked--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
{{--                                type="checkbox" name="{{$items->detail}}" value="{{$items->detail}}">--}}
{{--                            <lable for="{{$items->detail}}">{{$items->detail}}</lable>--}}
{{--                        @endforeach--}}
                    </div>
{{--                    <div class="right__inputWrapper">--}}
{{--                        <label for="title">size</label>--}}
{{--                        @foreach($size as $keys =>$items)--}}
{{--                            <input--}}
{{--                                @foreach($sizeProperty as $key => $item)--}}
{{--                                @if($item == $items->detail)--}}
{{--                                checked--}}
{{--                                @endif--}}
{{--                                @endforeach--}}
{{--                                type="checkbox" name="{{$items->detail}}" value="{{$items->detail}}">--}}
{{--                            <lable for="{{$items->detail}}">{{$items->detail}}</lable>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
                    <div class="right__inputWrapper">
                        <label>Chọn size</label>
                        @foreach($size as $keys =>$items)

                            <div class="right-checkbox-wrapper">
                                <input @foreach($sizeProperty as $key => $item)
                                       @if($item == $items->detail)
                                       checked
                                       @endif
                                       @endforeach
                                       type="checkbox" name="{{$items->detail}}" value="{{$items->detail}}">
                                <lable for="{{$items->id}}">{{$items->detail}}</lable>
                            </div>
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
                        <label for="avatarProduct">Ảnh đại diện sản phẩm</label>
                        <div class="input-images-1" type="text" name="avatarProduct" id="avatarProduct"></div>
                    </div>

                    <div class="right__inputWrapper input-field">
                        <label for="imageProducts">Ảnh chi tiết sản phẩm</label>
                        <div class="input-images" type="text" name="imageProducts" id="imageProducts"></div>
                    </div>

                    <div class="right__inputWrapper">
                        <label for="statusProducts">Trạng thái</label>
                        <select name="statusProducts" id="statusProducts" class="form-control">
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
            $('.input-images-1').imageUploader();
            $('.input-images').imageUploader();
        });
    </script>
@endpush
