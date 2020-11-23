<style>
    table,
    th,
    td,
    tr {
        border: 1px solid #ccc;
        text-align: center;
        padding: 10px !important;
    }

    @keyframes phaisangtrai {
        from {
            transform: translateX(100%);
        }

        to {
            transform: translateX(0);
        }
    }

    .site-card-mobile {
        transition: 0.4s;

        position: fixed;
        background-color: white;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 1000;
        width: 80%;
        padding: 40px 30px 100px 30px;
        animation: phaisangtrai ease-in-out .4s;
    }

    p.title {
        font-size: 1.4rem;
        text-transform: uppercase;
        font-weight: 500;
        margin: 3px 0 0 0;
    }

    table.cart-mobile-view {
        width: 100%;
        border-bottom: 1px dotted #bcbcbc;
    }

    span.line {
        float: left;
        width: 100%;
        border-top: 2px solid #000000;
        margin: 10px 0px;
    }

    a.pro-title-view {
        float: left;
        float: left;
        width: 100%;
        font-size: 13px;
        font-weight: 600;
        text-transform: uppercase;
        color: black
    }

    span.variant {
        font-size: 12px;
        float: left;
        width: 100%;
        margin: 5px 0 12px;
        opacity: 0.66;
        text-transform: uppercase;
    }

    span.pro-quantity-view {
        float: left;
        width: 100%;
        background: #ededed;
        text-align: center;
        padding: 6px 12px;
        font-size: 12px;
        line-height: 1;

    }

    span.pro-price-view {
        display: block;
        text-align: center;
        float: left;
        line-height: 26px;
        font-weight: 500;
        opacity: 0.7;
        font-size: 1.6rem;
        width: 100%;
        margin-top: 4px;
    }

    a.linktocart.button.dark {
        font-size: 1.4rem;

        color: black;

    }

    a.linktocheckout.button.dark {
        color: black;
        font-size: 1.4rem;
    }

    .cart-mobile-wrap {
        padding-top: 50px;
    }

    .cart-mobile-view tr td {
        border: none !important;
    }

    .cart-mobile-view tr td.image-cart img {
        width: 70px;
        border: 1px solid #ededed;
        margin-right: 10px;
        max-width: none;
    }

    .cart-mobile-wrap .table-total {
        width: 100%;
        padding: 0px !important;
    }


    .text-left {
        font-size: 1.6rem;
    }

    .text-right {
        font-size: 1.6rem;
    }
</style>
<div class="header__topbar hide-on-mobile-tablet">
    <div class="container header__topbar-wrap">

        <div class="header__topbar-list-left">
            <ul class="header__topbar-list">

                <li class="header__topbar-item">
                    <a href="https://www.facebook.com/tungtrinh99" class="header__topbar-item-link">
                        <i class="fab fa-facebook header__topbar-item-icon"></i>
                        <span class="header__topbar-item-nameicon">Facebook</span>
                    </a>

                </li>
                <li class="header__topbar-item">
                    <a href="https://www.instagram.com/tungtrinh.js/" class="header__topbar-item-link">

                        <i class="fab fa-instagram header__topbar-item-icon"></i>
                        <span class="header__topbar-item-nameicon">Instagram</span>
                    </a>
                </li>
                <li class="header__topbar-item">
                    <a href="#" class="header__topbar-item-link">

                        <i class="fab fa-google header__topbar-item-icon"></i>
                        <span class="header__topbar-item-nameicon">Google</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="header__topbar-list-right">
            <ul class="header__topbar-list">

                <li class="header__topbar-item">
                    @if(!session('usernameCustomer'))
                        <a href="{{asset(route('fr.login'))}}" class="header__topbar-item-link">

                            <i class="fas fa-user header__topbar-item-icon"></i>
                            <span class="header__topbar-item-nameicon">Đăng nhập  </span>

                        </a>
                    @endif
                </li>
                <li class="header__topbar-item">
                    @if(!session('usernameCustomer'))
                        <a href="{{asset(route('fr.registration'))}}" class="header__topbar-item-link">

                            <i class="fas fa-user header__topbar-item-icon"></i>
                            <span class="header__topbar-item-nameicon">Đăng ký</span>

                        </a>
                    @endif
                </li>
                <li class="header__topbar-item wrapper-customer">
                    <a class="header__topbar-item-link">


                        @if(session('idCustomer'))
                            <span class="header__topbar-item-nameicon"><i
                                    class="fas fa-user header__topbar-item-icon"></i> {{session('usernameCustomer')}}</span>
                        @endif

                    </a>
                    <div class="info-customer">
                        <div class="avatar-customer">
                            <img class="avt-cus"
                                 src="https://scontent.fhan2-2.fna.fbcdn.net/v/t1.0-9/118592620_1735638136590577_536306083793923942_o.jpg?_nc_cat=111&ccb=2&_nc_sid=a4a2d7&_nc_ohc=aW2NOEGnqDoAX9U57Uv&_nc_ht=scontent.fhan2-2.fna&oh=88a006eb2ff54f646e24922a0b8586c8&oe=5FE0431D"
                                 alt="">
                        </div>
                        @if(session('idCustomer'))
                            <div class="name-customer">
                                <a href="{{asset(route('fr.profile'))}}">{{session('usernameCustomer')}}</a>
                            </div>
                        @endif
                        <div class="button-logout">
                            <a class="logout" href="{{asset(route('fr.logout'))}}">Đăng xuất</a>
                        </div>
                    </div>
                </li>


            </ul>

        </div>

    </div>
</div>
<div class="header__main">
    <div class="container">

        <div class="row ">

            <div class="col col-lg-2 col-md-2 col-sm-10">
                <a href="/" class="header__main-logo-link">
                    <img src="{{asset('frontend/img/logo.png')}}" alt="logo" class="logo">
                </a>
            </div>
            <div class="col col-lg-8 hide-on-mobile-tablet">
                <div class="header__main-list">
                    <li class="header__main-item">
                        <a href="#" class="header__main-item-link">Sản phẩm mới</a>


                    </li>

                    <li class="header__main-item">
                        <a href="#" class="header__main-item-link">Adidas</a>
                        <i class="fas fa-chevron-down header__main-item-icon"></i>
                        <div class="header__main-category">
                            <div class="header__main-category-list">

                                <div class="col col-lg-3">
                                    <div class="header__main-category-item">
                                        @foreach($data['productHeaderAdidas'] as $keys => $items)
                                            <a href="{{asset(route('fr.detail',['slug'=>$items->slug]))}}"
                                               class="header__main-category-item-link">{{$items->name}}</a>
                                        @endforeach

                                    </div>
                                </div>
                                @foreach($data['productHeaderAdidas'] as $keys => $items)
                                    <div class="col col-lg-3">
                                        <div class="header__main-category-item">

                                            <a href="{{asset(route('fr.detail',['slug'=>$items->slug]))}}"
                                               class="header__main-category-item-image-link">
                                                <img class="header__main-category-item-image"
                                                     src="{{asset('upload/image/product/' . $items->avatar)}}"
                                                     alt="">
                                                <span class="header__main-category-item-text">

                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </li>

                    <li class="header__main-item">
                        <a href="#" class="header__main-item-link">Converse</a>
                        <i class="fas fa-chevron-down header__main-item-icon"></i>
                        <div class="header__main-category">
                            <div class="header__main-category-list">

                                <div class="col col-lg-3">
                                    <div class="header__main-category-item">
                                        @foreach($data['productHeaderConverse'] as $keys => $items)
                                            <a href="{{asset(route('fr.detail',['slug'=>$items->slug]))}}"
                                               class="header__main-category-item-link">{{$items->name}}</a>
                                        @endforeach

                                    </div>
                                </div>
                                @foreach($data['productHeaderConverse'] as $keys => $items)
                                    <div class="col col-lg-3">
                                        <div class="header__main-category-item">

                                            <a href="{{asset(route('fr.detail',['slug'=>$items->slug]))}}"
                                               class="header__main-category-item-image-link">
                                                <img class="header__main-category-item-image"
                                                     src="{{asset('upload/image/product/' . $items->avatar)}}"
                                                     alt="">
                                                <span class="header__main-category-item-text">
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>


                    <li class="header__main-item">
                        <a href="#" class="header__main-item-link">Gucci</a>
                        <i class="fas fa-chevron-down header__main-item-icon"></i>
                        <div class="header__main-category">
                            <div class="header__main-category-list">

                                <div class="col col-lg-3">
                                    <div class="header__main-category-item">
                                        @foreach($data['productHeaderGucci'] as $keys => $items)
                                            <a href="{{asset(route('fr.detail',['slug'=>$items->slug]))}}"
                                               class="header__main-category-item-link">{{$items->name}}</a>
                                        @endforeach

                                    </div>
                                </div>
                                @foreach($data['productHeaderGucci'] as $keys => $items)
                                    <div class="col col-lg-3">
                                        <div class="header__main-category-item">

                                            <a href="{{asset(route('fr.detail',['slug'=>$items->slug]))}}"
                                               class="header__main-category-item-image-link">
                                                <img class="header__main-category-item-image"
                                                     src="{{asset('upload/image/product/' . $items->avatar)}}"
                                                     alt="">
                                                <span class="header__main-category-item-text">
                                            </span>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>

                    </ul>
                </div>
            </div>
            <div class="col col-lg-2 col-md-8 header__main--right hide-on-mobile">
                <form method="get" class="header__search" action="{{route('fr.search')}}">
                    @csrf
                    <input name="search" type="text" class="search--input" placeholder="Tìm kiếm ...">
                    {{--                    <input type="submit" class="btn-search" value="search">--}}
                    <button type="submit" class="btn-search"></button>
                </form>
            </div>
            {{--            {{!-- <div class="col col-md-1  hide header__cart-tablet">--}}
            {{--              <a href="#" class="header__cart-tablet-link">--}}
            {{--                <i class="fas fa-shopping-cart header__cart-tablet-icon"></i>--}}
            {{--              </a>--}}
            {{--            </div> --}}
            <div class="col col-sm-1 col-md-1 hide cart-mobile">
                <i class="fas fa-shopping-cart"></i>
                <div class="site-card-mobile hide">
                    <p class="title">Giỏ hàng</p>
                    <div class="cart-mobile-wrap">
                        <table class="cart-mobile-view">
                            <tbody>
                            <tr class="item1">
                                <td class="image-cart">
                                    <a href="/products/bunny-1" title="/products/bunny-1"><img
                                            src="https://product.hstatic.net/1000351433/product/5f0df9ac-1630-4bd0-8d40-74150952c03f_0b852dbc36c84bfeb0d81d8ecb037a64_small.jpg"
                                            alt=""></a>
                                </td>
                                <td>
                                    <a class="pro-title-view" href="/products/bunny-1"
                                       title="/products/bunny-1">Bunny</a>
                                    <span class="variant">Đen / S</span>

                                    <span class="pro-quantity-view">1</span>
                                    <span class="pro-price-view">330,000₫</span>


                                    {{--                                    {{!-- <span class="remove_link remove-cart"><a href="javascript:void(0);" onclick="deleteCart(2)"><i--}}
                                    {{--                                        class="fa fa-times"></i></a></span> --}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <span class="line"></span>

                        <table class="table-total">
                            <tbody>
                            <tr>
                                <td class="text-left">TỔNG TIỀN:</td>
                                <td class="text-right" id="total-view-cart">660,000₫</td>
                            </tr>
                            <tr>
                                <td><a href="" class="linktocart button dark">Xem giỏ hàng</a></td>
                                <td><a href="/checkout" class="linktocheckout button dark">Thanh toán</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <div class="col col-md-1 col-sm-1 hide header-bar">
                <i class="fas fa-bars header-bar-icon"></i>
                <div class="modal"></div>
                <div class="nav-tablet">
                    <ul class="nav-tablet-list">
                        <li class="nav-tablet-item-head">
                            <span>Menu</span>
                            <i class="fas fa-times close"></i>
                        </li>
                        <li class="nav-tablet-item">
                            <a href="#" class="nav-tablet-link">Hàng Mới</a>
                        </li>
                        <li class="nav-tablet-item">
                            <a href="#" class="nav-tablet-link">Hàng Mới</a>
                        </li>
                        <li class="nav-tablet-item">
                            <a href="#" class="nav-tablet-link">Hàng Mới</a>
                        </li>
                        <li class="nav-tablet-item">
                            <a href="#" class="nav-tablet-link">Hàng Mới</a>
                        </li>
                        <li class="nav-tablet-item">
                            <a href="#" class="nav-tablet-link">Hàng Mới</a>
                        </li>
                    </ul>
                    <div class="authentication-mobile">
                        <div class="login-mobile">
                            <i class="fas fa-user"></i>
                            <a href="#">ĐĂNG NHẬP</a>
                        </div>
                        <div class="logout-mobile">

                            <a href="#">CHÍNH SÁCH MEMBERSHIP</a>
                        </div>
                    </div>
                    <div class="info-mobile">
                        <span>Trinh Xuan Tung 171203068</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    const cartMobile = document.querySelector('.cart-mobile > i');
    cartMobile.addEventListener('click', () => {
        const siteCardMobile = document.querySelector('.site-card-mobile ');
        const modal = document.querySelector('.modal');
        siteCardMobile.classList.toggle('hide');
        modal.classList.toggle('show')
    })
</script>
