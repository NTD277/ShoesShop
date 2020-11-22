<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">
</head>
<style>
    input{
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .btn{
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
    }
    .btn-warning{
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236;
    }
    .btn-success{
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }
</style>
<body>
<div class="wrapper">
    <div class="container">
        <div class="dashboard">
            <div class="right">
                <div class="right__content">
                    <div class="right__title">Xem giỏ hàng</div>
                    <p class="right__desc">Tất cả sản phẩm</p>
                    <div class="right__table">
                        <div class="right__tableWrapper">
                            <table>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th>Xoá</th>

                                </tr>
                                </thead>

                                <tbody>

                                <tr>
                                    @foreach(session('cart') as $keys => $items)
                                        <td data-label="STT">
                                            <img src="https://giaygiare.vn/upload/sanpham/adidas-ultra-boost-20-space-race-grey-1-1.jpg">
                                        </td>
                                        <td data-label="Tên sản phẩm">{{$items->name}}Y</td>
                                        <td data-label="Giá">{{$items->price}}</td>
                                        <td data-label="Số lượng">
                                            <input type="number" value="1" id="quantity" name="quantity" min="1" max="100">
                                        </td>
                                        <td data-label="Tổng tiền">{{$items->price }}</td>
                                        <td data-label="Xoá" class="right__iconTable"><a href=""><img src="assets/icon-trash-black.svg" alt=""></a></td>
                                    @endforeach
                                </tr>
                                </tbody>
                                <tfoot>

                                <tr>
                                    <td colspan="1" style="border: none;background: #f5f6fa;"><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a></td>
                                    <td style="border: none;background: #f5f6fa;"></td>
                                    <td colspan="2" style="border: none;background: #f5f6fa;"><strong>Tổng tiền 500.000.000 đ</strong></td>
                                    <td colspan="2" style="border: none;background: #f5f6fa;"><a href="#" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a></td>

                                </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('backend/js/main.js')}}"></script>
</body>
</html>
