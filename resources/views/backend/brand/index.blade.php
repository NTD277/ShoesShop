@extends('backend.dashboard.index')
@section('content')
@push('stylesheets')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@endpush
<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Xem danh mục</p>
        @if (session('mess'))
            <div class="alert alert-info">
                <h3 style="text-align: center">{{session('mess')}}</h3>
            </div>
        @endif
        <div class="right__table">

            <div class="right__tableWrapper">
                @if (session('mess'))
                    <div class="alert alert-info">{{session('mess')}}</div>
                @endif
                <table>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên thương hiệu</th>

                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($brand as $keys =>$items)
                    <tr style="background-color: {{$items->status == 0 ? 'red' : ''}}">
                        <td style="color: {{$items->status == 0 ? 'white' : ''}} !important;> data-label="STT">{{$keys + 1}}</td>
                        <td style="color: {{$items->status == 0 ? 'white' : ''}} !important;> data-label="Tiêu đề">{{$items->name}}</td>
                        <td style="color: {{$items->status == 0 ? 'white' : ''}} !important;> data-label="Sửa" class="right__iconTable"><a href="{{route('admin.brand.edit',['brand' => $items->id])}}"><img src="{{asset('backend/assets/icon-edit.svg')}}" alt=""></a></td>
                        <form action="{{route('admin.brand.destroy',$items->id)}}" method="post">
                            @csrf
                            @method('delete')
{{--                            <td data-label="Xoá" class="right__iconTable">--}}
{{--                                <a href="{{route('admin.brand.destroy',['brand' => $items->id])}}">--}}
{{--                                    <img src="{{asset('backend/assets/icon-trash-black.svg')}}" alt="">--}}
{{--                                </a>--}}
{{--                            </td>--}}
                            <td>
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
