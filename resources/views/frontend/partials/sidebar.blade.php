<div class="col col-lg-3 ">
    <ul class="list-category-right-pc hide-on-mobile-tablet mt-24">
        <li class="heading-category-pc">Lựa chọn mua sắm</li>
        <li class="item-category-pc">
            <div>
                <div><i class="fas fa-book"></i> Thương hiệu</div>
                <i class="fas fa-chevron-down"></i>
            </div>
            <ul class="list-category-children hide">
                @foreach($data['newBrand'] as $keys => $items)
                    <li class="item-category-children">
                        <a href="{{route('fr.brand',['slug'=> $items->slug,'select'=>$data['select']])}}">
{{--                            ,'select' => $select--}}
                            {{$items->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="item-category-pc">
            <div>
                <div><i class="fas fa-palette"></i>Màu sắc</div> <i class="fas fa-chevron-down"></i>
            </div>
            <ul class="list-category-children hide">
                <li class="item-category-children">Đỏ</li>
                <li class="item-category-children">Cam</li>
                <li class="item-category-children">Vàng</li>
                <li class="item-category-children">Lục</li>
                <li class="item-category-children">Lam</li>
                <li class="item-category-children">Tràm</li>
                <li class="item-category-children">Tìm</li>
                <li class="item-category-children">Trắng</li>
                <li class="item-category-children">Đen</li>
            </ul>
        </li>
        <li class="item-category-pc">
            <div>
                <div><i class="fas fa-sitemap"></i>Kích cỡ</div> <i class="fas fa-chevron-down"></i>
            </div>
            <ul class="list-category-children hide">

                <li class="item-category-children">36</li>
                <li class="item-category-children">37</li>
                <li class="item-category-children">38</li>
                <li class="item-category-children">39</li>
                <li class="item-category-children">40</li>
                <li class="item-category-children">41</li>
                <li class="item-category-children">42</li>
                <li class="item-category-children">43</li>
                <li class="item-category-children">44</li>
                <li class="item-category-children">45</li>
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
