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

    .image-product-cart img {
        width: 60px;
        height: 60px;
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
                    @foreach(session('cart') as $keys => $items)
                        <div class="image-product-cart">
                            <img src="{{asset('upload/image/product/' . $items->avatar)}}">
                        </div>
                        <div class="price-product">
                            <span>Giá</span>
                            {{number_format($items->price)}} đ
                        </div>
                        <div class="quantity">
                            <span>Số lượng</span>
                            <span>1</span>
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
<script>
    window.addEventListener("load", () => {
    })
</script>
</body>
</html>
