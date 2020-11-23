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



        li.item-category-children > a:hover {
            color: white;
            background-color: #939393;
        }
        li.item-category-children > a{
            color: black;
            font-size: 10px;
            width: 100%;
            display: block;
            padding: 10px 4px;
            transition: .2s;
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

            cursor: pointer;
        }

        a.sort-link {
            padding: 10px 6px;
            font-size: 1.3rem;
            display: block;
            font-weight: 600;

            color: black;
        }

        .item-sort-home:hover {

            background-color: rgb(140, 133, 133);

        }

        .item-sort-home:hover>.sort-link {

            color: white;

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

        @media (max-width:739px) {
            .container.home {

                padding-bottom: 8px;
            }
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

            li.item-category-pc > div {
                padding: 15px 4px;
            }

            .heading-category-pc {
                padding: 15px;
            }


            .home-product {
                background-color: white;
                border-radius: 0;
                margin-top: 8px;
            }

            .button__product-action--show-details {
                background-color: #000;
                color: #fff;
            }

            .button__product-action--add-cart {
                background-color: rgb(255, 65, 65);
                color: #fff;
            }

            .btn__product {
                width: 88px;
            }
        }
    </style>
    <section id="mainbanner">
        <div class="banner-pre">
            <i class="fas fa-chevron-left"></i>
        </div>
        <a href="#" class="mainbanner--link">
            <img class="banner-image" src="{{asset('upload/image/banner/giay-adidas-ultra-boost-20-new-2020.jpg')}}" alt="bannermain"
                 width="100%">
        </a>
        <div class="banner-next">
            <i class="fas fa-chevron-right"></i>
        </div>
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
                            <span style="font-size: 1.3rem;font-weight:600"><a style="font-size: 1.3rem;color: #000" href="/">Tất cả sản phẩm</a> @if($title != "Trang chủ")
                                    <i class="fas fa-chevron-right"></i>  {{$title}}
                                @else
                                    @endif

                            </span>
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
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.brand',['select' => 'default','slug'=> $data['slugBrand']])}}">Mặc định</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.brand',['select' => 'uptodown','slug'=> $data['slugBrand']])}}">Giá từ cao đến thấp</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.brand',['select' => 'downtoup','slug'=> $data['slugBrand']])}}">Giá từ thấp đến cao</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.brand',['select' => 'AZ','slug'=> $data['slugBrand']])}}">A-Z</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.brand',['select' => 'ZA','slug'=> $data['slugBrand']])}}">Z-A</a></li>
                            @elseif(!empty($data['slugColor']))
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.color',['select' => 'default','detailColor'=> $data['slugColor']])}}">Mặc định</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.color',['select' => 'uptodown','detailColor'=> $data['slugColor']])}}">Giá từ cao đến thấp</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.color',['select' => 'downtoup','detailColor'=> $data['slugColor']])}}">Giá từ thấp đến cao</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.color',['select' => 'AZ','detailColor'=> $data['slugColor']])}}">A-Z</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.color',['select' => 'ZA','detailColor'=> $data['slugColor']])}}">Z-A</a></li>
                            @elseif(!empty($data['slugSize']))
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.size',['select' => 'default','detailSize'=> $data['slugSize']])}}">Mặc định</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.size',['select' => 'uptodown','detailSize'=> $data['slugSize']])}}">Giá từ cao đến thấp</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.size',['select' => 'downtoup','detailSize'=> $data['slugSize']])}}">Giá từ thấp đến cao</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.size',['select' => 'AZ','detailSize'=> $data['slugSize']])}}">A-Z</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.size',['select' => 'ZA','detailSize'=> $data['slugSize']])}}">Z-A</a></li>
                            @else
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.home',['select' => 'default'])}}">Mặc định</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.home',['select' => 'uptodown'])}}">Giá từ cao đến thấp</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.home',['select' => 'downtoup'])}}">Giá từ thấp đến cao</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.home',['select' => 'AZ'])}}">A-Z</a></li>
                                <li class="item-sort-home"><a class="sort-link" href="{{route('fr.home',['select' => 'ZA'])}}">Z-A</a></li>
                            @endif
                        </ul>
                    </div>
                    @foreach($newProduct as $keys => $item)
                    <div class="col col-lg-3 col-md-4 col-sm-6 mt-24">
                        <div class="home-product">

                            <div class="home-product-header">
                                <a href="/products/{{$item->slug}}" {{--href="/products/{{'this.slug'}}"--}} class="home__product-image-link">
{{--                                    @foreach($image as $k =>$i)--}}
                                    <img src="{{asset('upload/image/product/' . $item->avatar)}}" alt="fail" class="home__product-image">
{{--                                    @endforeach--}}
                                </a>
                            </div>

                            <div class="home-product-content">
                                <a href="/products/{{$item->slug}}" class="home-product-name">{{$item->name}}</a>
                                <div class="home-product-price">
                                    <span class="home-product-price--current">{{number_format($item->price)}} ₫ </span>
    {{--                                <span class="home-product-price--old">{{'this.priceold'}} ₫</span>--}}
                                </div>

                                <div class="button__product-action">
                                    <a class="btn__product button__product-action--show-details"
                                       href="/products/{{$item->slug}}">Xem Chi Tiết</a>
                                    <a class="btn__product button__product-action--add-cart" href="{{route('fr.cart',['id' => $item->id])}}">Thêm vào giỏ</a>
                                </div>
                            </div>

                        </div>
                    </div>
    {{--                {{/each}}--}}
                    @endforeach
                </div>
{{--                {{ $$newProduct->links() }}--}}
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
            const bannerImage =document.querySelector('.banner-image');
            const bannerPre = document.querySelector('.banner-pre');
            const bannerNext = document.querySelector('.banner-next');
            const arrayBanner = ['https://giaygiare.vn/upload/banner/sale-black-friday-2020-tuloshop.png','https://giaygiare.vn/upload/banner/giay-sneaker-nike-jordan-1-high-mid-low.png','https://giaygiare.vn/upload/banner/giay-adidas-ultra-boost-20-new-2020.jpg','https://giaygiare.vn/upload/banner/cap-nhat-nhung-mau-yeezy-moi-nhat-2019.png'];
            console.log(bannerImage.src)

            bannerPre.addEventListener('click',()=>{
                if(index==0){
                    index=arrayBanner.length-1;
                    index--;
                    bannerImage.src = arrayBanner[index];
                }
                else {
                    index--;
                    bannerImage.src = arrayBanner[index];
                }
            })
            bannerNext.addEventListener('click',()=>{
                if(index==arrayBanner.length-1){
                    index=0;
                    index++;
                    bannerImage.src = arrayBanner[index];

                }
                else {
                    index++;
                    bannerImage.src = arrayBanner[index];
                }
            })
            var index = 0;
            function slideShow(){
                setTimeout(function (){
                    if(index == arrayBanner.length-1){
                        index=0;
                    }
                    index++;
                    bannerImage.src = arrayBanner[index];


                    slideShow();
                },3000)
            }
            slideShow();


        })
    </script>
@endsection
