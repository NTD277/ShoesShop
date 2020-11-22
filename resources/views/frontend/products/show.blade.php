@extends('frontend.home.index')
{{--    <header class="header">--}}
{{--        @include('frontend.partials.header')--}}
{{--    </header>--}}
@section('content')
    <div class="container margin-top">
        <div class="row">
            @foreach($newProduct as $keys => $items)
                <div class="col col-lg-1 hide-on-mobile-tablet prodict-image-wrap-pc">
                    @foreach($imageProduct as $k => $i)
                        <div class="detail-main-image-wrap mbt-12">
                            <img class="product-image-small" src="{{asset('upload/image/product/' . $i->name)}}" alt="">
                        </div>
                    @endforeach
                </div>
                <div class="col col-lg-7 col-md-7 mbt-24">
                    <div class="row">
                        <div class="col col-lg-12">
                            <div class="detail-main-image-wrap product-image-large">
                                <img src="{{asset('upload/image/product/' . $items->avatar)}}" alt=""
                                     class="detail-main-image">

                            </div>
                            <div class="prodict-image-wrap-mobile-tablet">
                                @foreach($imageProduct as $k => $i)
                                    <div class="detail-main-image-wrap mt-24 mr-12 hide show-on-mobile-tablet">
                                        <img class="product-image-small"
                                             src="{{asset('upload/image/product/' . $i->name)}}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col col-lg-4 col-md-5">
                    <div class="product-title">
                        <div class="title">{{$items->name}}</div>
                        <div class="description">Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu
                            dáng phong cách. Độ bền cao. Dễ phối đồ.
                        </div>
                        @if($items->qty > 0)
                            <span class="status-product">
                    Trạng thái : <b>Còn hàng</b>
                </span>
                        @else
                            <span class="status-product">
                    Trạng thái : <b>Hết hàng</b>
                </span>
                        @endif
                    </div>
                    <div class="product-price">
                        <span class="detail-price-current">{{number_format($items->price)}} ₫</span>

                    </div>
                    <div style="display: inline" class="product-select">
                        <div class="product-select-color">

                            <span>Màu sắc có sẵn</span>
                            <div class="wrapper-choose-color">
                                @foreach($colorProduct as $k => $i)
                                    @if($i->detail)
                                    <div class="choose-color" style="background-color: {{$i->detail}}">

                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="product-select-size">
                            <span>Kích thước có sẵn</span>
                            <a href="/" class="guild-size">(Hướng dẫn tính size giày)</a>
                            <div class="wrapper-size">
                                @foreach($sizeProduct as $key =>$item)
                                    @if($item->detail)
                                        <div class="size">
                                            <span>{{$item->detail}}</span>
                                        </div>
                                    @else
                                        <span>Hết size</span>
                                    @endif
                                        @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="select-button">

                        <a href="{{route('fr.cart',['id' => $items->id])}}" class="detail__button detail__button-buy">
                            <span>THÊM VÀO GIỎ HÀNG</span>
                            <span class="description-button">Giao tận nhà - đổi dễ dàng</span>
                        </a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
    </body>
    </html>
