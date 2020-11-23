<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/grid.css')}}">
</head>
<style>
    input {

        display: block;
        width: 100%;
        height: 40px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin: 10px 0;
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        display: flex;
        align-items: center;
        width: 266px;
    }


    .right__content {
        height: auto;
        padding: 60px 5%;
    }

    .right-footer {
        padding: 20px 5%;
        display: flex;
        align-items: center;
        justify-content: space-between;

    }

    .continue-method-shopping {
        margin-left: 63px;
    }

    .right {
        overflow-y: hidden;
        border-right: 1px solid #a79f9f
    }

    .dashboard {
        display: block;
    }
    .image-product-cart{
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #e0e0e0;
        padding-bottom: 30px;
    }
    .image-product-cart img {
        width: 60px;
        height: 60px;
        border: 1px solid #e0e0e0;
        margin-right: 8px;
    }
    .right-info{
        padding : 60px 5%;
    }
    .quantity span{
        font-size:11px ;
        color: #2e2e2e;
    }
    .price-product{
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    .money{
        padding: 30px 0;
        border-bottom: 1px solid #e0e0e0;
    }
    .cache-money{

        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 10px;
    }
    .cache-money span:nth-child(1) {
        font-size: 13px;
        color: #737373
    }
    .money-transport{

        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .money-transport span:nth-child(1){
        font-size: 13px;
        color: #737373
    }
    .total-money{
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 18px;
    }
    .total-money span:nth-child(2){
        font-size: 22px;
    }
    .wrapper-info-image {
        display: flex;
        align-items: center;
    }
    .wrapper-info-image span{
        font-size: 11px;
        color: #2e2e2e;
    }
</style>
<body>
<div class="wrapper">
    <div class="container">
        <div class="dashboard">
            <div class="row" style="height: 100%">
                <div class="col col-lg-6" style="height: 100%">
                    <div class="right">
                        <div class="right__content">
                            <div class="right__title">Xem giỏ hàng</div>
                            <p class="right__desc">Thông tin giao hàng</p>
                            <div class="form-info">
                                <input type="text" placeholder="Họ và tên">
                                <input type="email" placeholder="Email">
                                <input type="number" placeholder="Số điện thoại">
                                <input type="text" placeholder="Địa chỉ">

                            </div>
                        </div>
                        <div class="right-footer">
                            <a href="#">Quay lại giỏ hàng</a>
                            <a class="btn continue-method-shopping" href="">Tiếp tục đến phương thức thanh toán</a>
                        </div>

                    </div>
                </div>
                <div class="col col-lg-6">
                    <div class="right-info">
                        @foreach(session('cart') as $keys => $items)
                            <div class="image-product-cart">
                                <div class="wrapper-info-image">
                                    <img src="{{asset('upload/image/product/' . $items->avatar)}}">
                                    <span>{{$items->name}}</span>
                                </div>

                                <div class="price-product">
                                    {{number_format($items->price)}} đ
                                    <div class="quantity">
                                        <span>Số lượng : </span>
                                        <span>1</span>
                                    </div>
                                </div>
                            </div>

                            <div class="money">
                                <div class="money-transport">
                                    <span>Phí vận chuyển </span>
                                    <span>40.000 đ</span>
                                </div>
                                <div class="cache-money">
                                    <span>Tạm tính </span>
                                    <span>{{number_format($items->price)}} đ</span>
                                </div>

                            </div>
                            <div class="total-money">
                                <span>Tổng tiền</span>
                                <span>{{number_format($items->price)}} đ</span>
                            </div>

                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<script>
    window.addEventListener("load", () => {
    })
</script>
</body>
</html>
