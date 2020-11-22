<div class="col col-lg-3 ">
    <ul class="list-category-right-pc hide-on-mobile-tablet mt-24">
        <li class="heading-category-pc">Lựa chọn mua sắm</li>
        <li class="item-category-pc">
            <div>
                <div><i class="fas fa-book"></i> Thương hiệu</div>
                <i class="fas fa-chevron-down"></i>
            </div>
            <ul class="list-category-children hide">
                @if(!empty($data['newBrand']))
                @foreach($data['newBrand'] as $keys => $items)
                    <li class="item-category-children">
                        <a href="{{route('fr.brand',['slug'=> $items->slug,'select'=>$data['select']])}}">
{{--                            ,'select' => $select--}}
                            {{$items->name}}
                        </a>
                    </li>
                @endforeach
                @endif
            </ul>
        </li>
        <li class="item-category-pc">
            <div>
                <div><i class="fas fa-palette"></i>Màu sắc</div> <i class="fas fa-chevron-down"></i>
            </div>
            <ul class="list-category-children hide">
                @foreach($data['color'] as $keys => $items)
                    <li class="item-category-children">
                        <a href="{{route('fr.color',['detailColor'=> $items->detail,'select'=>$data['select']])}}">
                            {{$items->detail}}
{{--                            @if($items->detail == 'Green')--}}
{{--                                Xanh--}}
{{--                            @endif--}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="item-category-pc">
            <div>
                <div><i class="fas fa-sitemap"></i>Kích cỡ</div> <i class="fas fa-chevron-down"></i>
            </div>
            <ul class="list-category-children hide">
                @foreach($data['size'] as $keys => $items)
                    <li class="item-category-children">
                        <a href="{{route('fr.size',['detailSize'=> $items->detail,'select'=>$data['select']])}}">
                            {{$items->detail}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="item-category-pc">
            <div>
                <div><i class="fas fa-tshirt"></i>Chất liệu</div> <i class="fas fa-chevron-down"></i>
            </div>
            <ul class="list-category-children hide">
                <li class="item-category-children">Da thật</li>
                <li class="item-category-children">Da giả</li>
                <li class="item-category-children">Cao su</li>

            </ul>
        </li>
    </ul>
</div>
