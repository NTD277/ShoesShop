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
                        <label for="title">Số lượng</label>
                        <input type="text" placeholder="Số lượng" name="qtyProduct">
                    </div>
                    <div class="right__inputWrapper">
                        <label for="title">Ghi chú</label>
                        <input type="text" placeholder="Ghi chú" name="noteProduct">
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
