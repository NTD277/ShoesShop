<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DemoSHOPGIAY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- CSS only -->


    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/detail.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/base.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}">
    {{--    {{!-- <link rel="stylesheet" href="/css/admin.css"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/font/fontawesome-free-5.14.0-web/css/all.min.css')}}">

</head>
<body>
<div class="app">
    <header class="header">
        @include('frontend.partials.header')
    </header>

<div class="container margin-top">
    <div class="row">
        @foreach($newProduct as $keys => $items)
        <div class="col col-lg-6 col-md-6">
            <div class="row">

                <div class="col col-lg-12">
                    <div class="detail-main-image-wrap">
                        <img src="{{asset('upload/image/product/')}}" alt="" class="detail-main-image">

                    </div>
                </div>

            </div>
        </div>
        <div class="col col-lg-6 col-md-6">
            <div  class="product-title">
                <h2>{{$items->name}}</h2>
                <span class="code-product">
                    Mã : <span>{{$items->id}}</span>
                </span>
                @if($items->qty > 0)
                <span class="status-product">
                    Trạng thái : <b>Còn hàng</b>
                </span>
                @else
                <span class="status-product">
                    Trạng thái : <b>Hết hàng</b>
                </span>
                @endif
{{--                <span class="rate-product">--}}
{{--                    Xếp hạng :--}}
{{--                    <span><i class="fas fa-star"></i></span>--}}
{{--                    <span><i class="fas fa-star"></i></span>--}}
{{--                    <span><i class="fas fa-star"></i></span>--}}
{{--                    <span><i class="fas fa-star"></i></span>--}}
{{--                    <span><i class="fas fa-star"></i></span>--}}
{{--                </span>--}}
            </div>
            <div class="product-price">
                <span class="detail-price-current">{{number_format($items->price)}} ₫</span>
{{--                <del>{{docs.priceold}} ₫</del>--}}
                </br>
                </br>
                <span class="product-sale">Giảm 19%</span>
                <span class="product-vat">(Đã bao gồm VAT)</span>
            </div>
            <div style="display: inline" class="product-select">
                <div class="product-select-color">

                    <span>Màu sắc :</span>
                    <span class="color-text">Trắng</span>

                </div>
                <div class="product-select-size">
                    <span>Kích thước</span>
                    <a href="/" class="guild-size">(Hướng dẫn tính size giày)</a>
                    <ul class="list-size">
                        <li class="size">35</li>
                        <li class="size">36</li>
                        <li class="size">37</li>
                        <li class="size">38</li>
                    </ul>
                </div>
            </div>
            <div style="display: inline" class="select-button">
                <button  class="detail__button detail__button-buy">MUA NGAY</button>
                <button  class= "detail__button detail__button-show-cart"><i class="fas fa-shopping-cart"></i> XEM GIỎ HÀNG</button>
            </div>
        </div>
        @endforeach
    </div>
</div>


{{--@include('frontend.partials.footer')--}}
    <footer class="footer">
        @include('frontend.partials.footer')
    </footer>
</div>

<!-- JS, Popper.js, and jQuery -->
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/header.js')}}"></script>
<script src="{{asset('frontend/js/footer.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
