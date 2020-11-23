@extends('backend.dashboard.index')

@section('content')
<div class="right">
    <div class="right__content">
        <div class="right__title">Bảng điều khiển</div>
        <p class="right__desc">Bảng điều khiển</p>
        <div class="right__cards">
            <a class="right__card" href="/admin/product">
                <div class="right__cardTitle">Sản Phẩm</div>
                <div class="right__cardNumber">{{$sumProduct}}</div>
                <div class="right__cardDesc">Xem Chi Tiết <img src="{{asset('backend/assets/arrow-right.svg')}}" alt=""></div>
            </a>
{{--            <a class="right__card" href="view_customers.html">--}}
{{--                <div class="right__cardTitle">Khách Hàng</div>--}}
{{--                <div class="right__cardNumber">{{$sumCustomer}}</div>--}}
{{--                <div class="right__cardDesc">Xem Chi Tiết <img src="{{asset('backend/assets/arrow-right.svg')}}" alt=""></div>--}}
{{--            </a>--}}
            <a class="right__card" href="/admin/brand">
                <div class="right__cardTitle">Thương hiệu</div>
                <div class="right__cardNumber">{{$sumBrand}}</div>
                <div class="right__cardDesc">Xem Chi Tiết <img src="{{asset('backend/assets/arrow-right.svg')}}" alt=""></div>
            </a>
            <a class="right__card" href="/admin/dashboard">
                <div class="right__cardTitle">Đơn Hàng</div>
                <div class="right__cardNumber">{{$sumOrder}}</div>

            </a>
        </div>
        <div class="right__table">
            <p class="right__tableTitle">Tất cả đơn hàng</p>
            <div class="right__tableWrapper">
                <table>
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên khách hàng</th>
                        <th>Số Hoá Đơn</th>
                        <th>ID Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Tổng tiền</th>
                        <th>Trạng Thái</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($order as $keys => $items)
                    <tr>
                        <td data-label="STT">{{$keys +1 }}</td>
                        <td data-label="Tên">{{$items->namePerson}}</td>
                        <td data-label="Số Hoá Đơn">{{$items->id}}</td>
                        <td data-label="ID Sản Phẩm">{{$items->idProduct}}</td>
                        <td data-label="Số Lượng">{{$items->qty}}</td>
                        <td data-label="Tổng tiền">{{$items->price}}</td>
                        <td data-label="Trạng Thái">
                            @if($items->status == 1)
                                Chờ xử lý
                            @elseif($items->status == 1)
                                Hủy
                            @else Hoàn tất

                            @endif
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
