@extends('frontend.home.index')

@section('content')
    <style>
        .heading-category-pc {
            font-size: 1.3rem;
            padding-bottom: 10px;
            font-weight: 600;
            border-bottom: 1px solid #00000038;
        }



        li.item-category-pc {


            border-bottom: 1px solid #00000038;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: .2s;
            font-weight: 500;
        }

        li.item-category-pc>div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* display: block; */
            width: 100%;
            padding: 10px 4px;
            font-size: 1.1rem;
        }

        li.item-category-pc>div>div {
            font-size: 1.1rem;
            display: flex;
            align-items: center;
        }

        li.item-category-pc>div>div>i {
            margin-right: 10px;
            font-size: 1.2rem
        }

        li.item-category-pc>div:hover {
            background-color: rgb(140, 133, 133);
            color: #fff;
        }

        li.item-category-children {
            font-size: 1.1rem;
            padding: 10px 4px;
            transition: .2s;

        }
        li.item-category-children > a{
            font-size: 1.1rem;
            padding: 10px 4px;
            color: black;
        }
        li.item-category-children:hover {
            background-color: #939393;
        }

        .list-category-children {
            height: 108px;
            overflow: auto;
        }



        .home-right {
            display: flex;
            justify-content: space-between;
            justify-content: space-between;
            border-bottom: 1px solid #00000038;

            padding-bottom: 10px;
            position: relative;
        }


        .sort-home>div {
            font-size: 1.3rem;
            font-weight: 500;
            cursor: pointer;
        }

        .list-sort-home {
            position: absolute;
            top: 26px;
            right: 0;
            background-color: white;
            border: 1px solid #00000038;
            z-index: 1;
            width: 155px;
            box-shadow: 0px 6px 10px #00000045;
        }

        .item-sort-home {
            border-bottom: 1px solid #00000038;
            font-weight: 600;
            cursor: pointer;
            padding: 10px 6px;

        }
        .item-sort-home > a {
            font-size: 1.3rem;
            padding: 10px 6px;
            color: black;

        }
        .item-sort-home:hover {

            color: rgb(158, 61, 61);
        }

        .item-sort-home:nth-child(5) {
            border: none;
        }

        .current-sort-home {
            font-size: 1.3rem;
            font-weight: 600;
        }

        .category-home-mobile {
            display: none;
            border: 1px solid #00000038;
            border-right-color: #fff;
            border-left-color: #fff;
            cursor: pointer;
        }

        .filter-home-mobile {
            flex: 1;
            padding: 15px;
            text-align: center;
            border-right: 1px solid #00000038;
        }

        .sort-home-mobile {
            flex: 1;
            padding: 15px;
            text-align: center;

        }

        .filter-home-mobile span {
            font-size: 1.3rem;
        }

        .sort-home-mobile span {
            font-size: 1.3rem;
        }

        .filter-home-mobile i {
            font-size: 1.3rem;
            margin-right: 10px;
        }

        .sort-home-mobile i {
            margin-right: 10px;
            font-size: 1.3rem;
        }

        @media (max-width:1023px) {
            .home-right {
                display: none;
            }

            .list-sort-home {
                top: 0;
                width: 50%;
            }

            .mt-24 {
                margin-top: 0;
            }

            .category-home-mobile {
                display: flex;
            }

            ul.list-category-right-pc.mt-24 {
                position: fixed;
                right: 0;
                top: 0;
                bottom: 0;
                background-color: #fff;
                z-index: 1000;
                width: 80%;
                margin-top: 0;
                transition: 0.4s;
                animation: phaisangtrai ease-in-out .4s;
            }

            @keyframes phaisangtrai {
                from {
                    transform: translateX(100%);
                }

                to {
                    transform: translateX(0);
                }
            }

            li.item-category-pc>div {
                padding: 15px 4px;
            }

            .heading-category-pc {
                padding: 15px;
            }

            .container.home {
                background-color: #0000000f;
                padding-bottom: 8px;
            }
            .home-product{
                background-color: white;
                border-radius: 0;
                margin-top: 8px;
            }
            .button__product-action--show-details{
                background-color: #000;
                color:#fff;
            }
            .button__product-action--add-cart{
                background-color: rgb(255, 65, 65);
                color:#fff;
            }
            .btn__product{
                width: 88px;
            }
        }
    </style>
    <section id="mainbanner">
        <a href="#" class="mainbanner--link">
            <img src="https://file.hstatic.net/1000003969/file/cover_0027ed617027437888fc8a07920ff30e.jpg" alt="bannermain"
                 width="100%">
        </a>
    {{--    {{!-- <a href="#" class="mainbanner--link">--}}
    {{--            <img src="/img/banner3.jpg" alt="" width="100%" >--}}
    {{--        </a> --}}
    </section>

    <div class="category-home-mobile ">
        <div class="filter-home-mobile">
            <i class="fas fa-filter"></i> <span>Bộ lọc</span>
        </div>
        <div class="sort-home-mobile">
            <i class="fas fa-sort"></i> <span>Sắp xếp</span>
        </div>
    </div>

    <div class="container home">

        <div class="row">

            @include('frontend.partials.sidebar')
            <div class="col col-lg-9 col-sm-12">
                <div class="row">
                    <div class="col col-lg-12 mt-24 ">
                        <div class="home-right ">
                            <span style="font-size: 1.3rem;font-weight:600">Tất cả sản phẩm</span>
                            <div class="sort-home">
                                <div>Sắp xếp theo :
{{--                                    <h1>{{$select}}</h1>--}}
{{--                                    {{$select = null}}--}}
                                    @if($select == 'uptodown')
                                        <span class="current-sort-home">
                                            Giá từ cao đến thấp
                                        </span>
                                    @elseif($select == 'downtoup')
                                        <span class="current-sort-home">
                                            Giá từ thấp đến cao
                                        </span>
                                    @elseif($select == 'AZ')
                                        <span class="current-sort-home">
                                            A-Z
                                        </span>
                                    @elseif($select == 'ZA')
                                        <span class="current-sort-home">
                                            Z-A
                                        </span>
                                    @elseif($select == null ||$select == 'default')
                                    <span class="current-sort-home">
                                            Mặc định
                                    </span>
                                    @endif
                                    <i class="fas fa-chevron-down"></i></div>
                            </div>

                        </div>

                        <ul class="list-sort-home hide">
                            @if(!empty($data['slugBrand']))
{{--                                <li class="item-sort-home"><a href="{{route('fr.home',['select' => 'default','brand'=> $slug])}}">Mặc định</a></li>--}}
                                <li class="item-sort-home"><a href="{{route('fr.brand',['select' => 'default','slug'=> $data['slugBrand']])}}">Mặc định</a></li>
                                <li class="item-sort-home"><a href="{{route('fr.brand',['select' => 'uptodown','slug'=> $data['slugBrand']])}}">Giá từ cao đến thấp</a></li>
                                <li class="item-sort-home"><a href="{{route('fr.brand',['select' => 'downtoup','slug'=> $data['slugBrand']])}}">Giá từ thấp đến cao</a></li>
                                <li class="item-sort-home"><a href="{{route('fr.brand',['select' => 'AZ','slug'=> $data['slugBrand']])}}">A-Z</a></li>
                                <li class="item-sort-home"><a href="{{route('fr.brand',['select' => 'ZA','slug'=> $data['slugBrand']])}}">Z-A</a></li>
                            @else
                                <li class="item-sort-home"><a href="{{route('fr.home',['select' => 'default'])}}">Mặc định</a></li>
                                <li class="item-sort-home"><a href="{{route('fr.home',['select' => 'uptodown'])}}">Giá từ cao đến thấp</a></li>
                                <li class="item-sort-home"><a href="{{route('fr.home',['select' => 'downtoup'])}}">Giá từ thấp đến cao</a></li>
                                <li class="item-sort-home"><a href="{{route('fr.home',['select' => 'AZ'])}}">A-Z</a></li>
                                <li class="item-sort-home"><a href="{{route('fr.home',['select' => 'ZA'])}}">Z-A</a></li>
                            @endif
                        </ul>
                    </div>
                    @foreach($newProduct as $keys => $item)
                    <div class="col col-lg-3 col-md-4 col-sm-6 ">
                        <div class="home-product">

                            <div class="home-product-header">
                                <a href="/products/{{$item->slug}}" {{--href="/products/{{'this.slug'}}"--}} class="home__product-image-link">
                                    <img src="{{asset('frontend/img/yz700v2black.png')}}" alt="" class="home__product-image">
                                </a>
                            </div>

                            <div class="home-product-content">
                                <a href="/products/{{$item->slug}}" class="home-product-name">{{$item->name}}</a>
                                <div class="home-product-price">
                                    <span class="home-product-price--current">{{$item->price}} ₫ </span>
    {{--                                <span class="home-product-price--old">{{'this.priceold'}} ₫</span>--}}
                                </div>

                                <div class="button__product-action">
                                    <a class="btn__product button__product-action--show-details"
                                       href="/products/{{$item->slug}}">Xem Chi Tiết</a>
                                    <a class="btn__product button__product-action--add-cart" href="#">Thêm vào giỏ</a>
                                </div>
                            </div>

                        </div>
                    </div>
    {{--                {{/each}}--}}
                    @endforeach
                </div>
            </div>


        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const itemCategoryPc = document.querySelectorAll('.item-category-pc');
            for (let i = 0; i < itemCategoryPc.length; i++) {
                itemCategoryPc[i].addEventListener('click', () => {
                    const listCategoryChildren = document.querySelectorAll('.list-category-children');
                    listCategoryChildren[i].classList.toggle('hide');
                })
            }
            const sortHome = document.querySelector('.sort-home > div > span')
            sortHome.addEventListener('click', () => {
                const listSortHome = document.querySelector('.list-sort-home');
                listSortHome.classList.toggle('hide');
            })
            const filterHomeMobile = document.querySelector('.filter-home-mobile');
            filterHomeMobile.addEventListener('click', () => {
                const listCategoryRightPc = document.querySelector('.list-category-right-pc');
                const modal = document.querySelector('.modal');
                listCategoryRightPc.classList.toggle('hide-on-mobile-tablet');
                modal.classList.toggle('show');
            })
            const sortHomeMobile = document.querySelector('.sort-home-mobile');
            sortHomeMobile.addEventListener('click', () => {
                const listSortHome = document.querySelector('.list-sort-home');
                listSortHome.classList.toggle('hide')
            })
        })
    </script>
@endsection
