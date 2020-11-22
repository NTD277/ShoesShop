@extends('frontend.home.index')
{{--    <header class="header">--}}
{{--        @include('frontend.partials.header')--}}
{{--    </header>--}}
@section('content')
<div class="container margin-top">
    <div class="row">
        @foreach($newProduct as $keys => $items)
        <div class="col col-lg-6 col-md-6">
            <div class="row">
                <div class="col col-lg-12">
                    <div class="detail-main-image-wrap">
                        <img src="{{asset('upload/image/product/' . $items->avatar)}}" alt="" class="detail-main-image">
                    </div>
                </div>
                @foreach($imageProduct as $k => $i)
                    <div class="detail-main-image-wrap">
                        <img style="max-height: 300px" src="{{asset('upload/image/product/' . $i->name)}}" alt="">
                    </div>
                @endforeach
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
{{--                <span class="product-sale">Giảm 19%</span>--}}
{{--                <span class="product-vat">(Đã bao gồm VAT)</span>--}}
            </div>
            <div style="display: inline" class="product-select">
                <div class="product-select-color">

                    <span>Màu sắc :</span>
                    @foreach($colorProduct as $k => $i)
                    <span class="color-text">{{$i->detail}}</span>
                    @endforeach
                </div>
                <div class="product-select-size">
                    <span>Kích thước</span>
                    <a href="/" class="guild-size">(Hướng dẫn tính size giày)</a>
                    <ul class="list-size">
                        @foreach($sizeProduct as $keys =>$items)
                            <label style="font-size: 22px">{{$items->detail}}</label>
                            <input type="radio" name="size" value="{{$items->detail}}}}">
                        @endforeach
                    </ul>
                </div>
            </div>
            <div style="display: inline" class="select-button">
                <button  class="detail__button detail__button-buy">MUA NGAY</button>
                <a href="{{route('fr.cart',['id' => $items->id])}}"  class= "detail__button detail__button-show-cart"><i class="fas fa-shopping-cart"></i> XEM GIỎ HÀNG</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


{{--@include('frontend.partials.footer')--}}
@endsection
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
