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
                                            <img src="{{asset('upload/image/product/' . $items->avatar)}}">
                                        </td>
                                        <td data-label="Tên sản phẩm">{{$items->name}}</td>
                                        <td data-label="Giá">{{number_format($items->price)}} đ</td>
                                        <td data-label="Số lượng">
                                            <div class="quantity-buy">
                                                <div class="sub btn-cart">-</div>
                                                <input class="quantity-number" value="1" min="0" max="100">
                                                <div class="add btn-cart">+</div>
                                            </div>
                                        </td>
                                        <td class="total-item-money" data-label="Tổng tiền">{{number_format($items->price)}} đ</td>
                                        <td data-label="Xoá" class="right__iconTable"><a href=""><img src="{{asset('backend/assets/icon-trash-black.svg')}}" alt=""></a></td>
                                    @endforeach
                                </tr>
                                </tbody>



                            </table>
                            <div class="footer-cart">
                                <div class="total-order-money"><strong>{{number_format($items->price)}} đ</strong></div>
                                <div  class="continue-shopping"><a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a></div>
                                <div  class="pay"><a href="#" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener("load", () => {
        @foreach(session('cart') as $keys => $items)
        const subCart = document.querySelector('.sub');
        const addCart = document.querySelector('.add');
        const quantity =  document.querySelector('.quantity-number');
        const totalItemMoney = document.querySelector('.total-item-money');
        const totalOrderMoney = document.querySelector('.total-order-money');

        var qty =1;
        function number_format ($number , $decimals = 0 , $dec_point = '.' , $thousands_sep = ',' ) {}

        subCart.addEventListener('click',()=>{
            if(quantity.value == 1){
                quantity.value = 1;
            }
            else {
                qty--;
                totalItemMoney.innerHTML = Intl.NumberFormat().format({{$items->price}}*qty) + ' đ';
                totalOrderMoney.innerHTML = totalItemMoney.innerHTML;
                quantity.value = qty;

            }
        })
        addCart.addEventListener('click',()=>{
            qty++;
            totalItemMoney.innerHTML = Intl.NumberFormat().format({{$items->price}}*qty) + ' đ';
            totalOrderMoney.innerHTML = totalItemMoney.innerHTML;
            quantity.value = qty;
        })


        @endforeach
    })
</script>
</body>
</html>
