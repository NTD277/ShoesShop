@extends('backend.dashboard.index')
@section('content')

    @push('stylesheets')
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @endpush
    <style>
        .admin-product-image{
            height: 60px;
        }
        .right__tableWrapper{
            height: 80vh;
            overflow: auto;
        }
    </style>
<div class="right">
    <div class="right__content">
        <div class="right__title">Danh mục sản phẩm</div>
        <p class="right__desc">Xem danh mục</p>
        <div class="right__table">

            <div class="right__tableWrapper">
                @if (session('mess'))
                    <div class="alert alert-info">{{session('mess')}}</div>
                @endif
                <table>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Tên Thương hiệu</th>
                        <th>Hình Ảnh</th>
                        <th>Giá</th>
                        <th>Số lượng</th>


                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($product as $keys =>$items)
                    <tr>
                        <td style="color: {{$items->status == 0 ? 'white' : '' }}!important;> data-label="STT">{{$keys + 1}}</td>
                        <td style="color: {{$items->status == 0 ? 'white' : ''}} !important;> data-label="Tên">{{$items->name}}</td>
                        <td style="color: {{$items->status == 0 ? 'white' : ''}} !important;> data-label="Thương hiệu">{{$items->nameBrand}}</td>
                        <td style="color: {{$items->status == 0 ? 'white' : ''}} !important;> data-label="Hình ảnh"><img src="{{asset('upload/image/product/' . $items->avatar)}}" class="admin-product-image"></td>
                        <td style="color: {{$items->status == 0 ? 'white' : ''}} !important;> data-label="Gía">{{$items->price}}</td>
                        <td style="color: {{$items->status == 0 ? 'white' : ''}} !important;> data-label="Số lượng">{{$items->qty}}</td>
                        <td style="color: {{$items->status == 0 ? 'white' : ''}} !important;> data-label="Sửa" class="right__iconTable"><a href="{{route('admin.product.edit',['product' => $items->id])}}"><img src="{{asset('backend/assets/icon-edit.svg')}}" alt=""></a></td>
                        <form action="{{route('admin.product.destroy',$items->id)}}" method="post">
                            @csrf
                            @method('delete')
{{--                            <td data-label="Xoá" class="right__iconTable">--}}
{{--                                <a href="{{route('admin.brand.destroy',['brand' => $items->id])}}">--}}
{{--                                    <img src="{{asset('backend/assets/icon-trash-black.svg')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </td>--}}
                            <td class="right__iconTable">
                                <button type="submit"><img src="{{asset('backend/assets/icon-trash-black.svg')}}" alt=""></button>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
