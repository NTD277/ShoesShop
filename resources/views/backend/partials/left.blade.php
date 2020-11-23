<div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
    <div class="left__content">
        <div class="left__logo">LOGO</div>
        <div class="left__profile">
            <div class="left__image"><img src="{{asset('backend/assets/profile.jpg')}}" alt=""></div>
            <p class="left__name">{{session('fullname')}}</p>
        </div>
        <ul class="left__menu">
            <li class="left__menuItem">
                <a href="{{asset(route('admin.dashboard'))}}" class="left__title"><img src="{{asset('backend/assets/icon-dashboard.svg')}}" alt="">Dashboard</a>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="{{asset('backend/assets/icon-tag.svg')}}" alt="">Sản Phẩm<img class="left__iconDown" src="{{asset('backend/assets/arrow-down.svg')}}" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="{{route('admin.product.create')}}">Thêm Sản Phẩm</a>
                    <a class="left__link" href="{{route('admin.product.index')}}">Xem Sản Phẩm</a>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="{{asset('backend/assets/icon-edit.svg')}}" alt="">Thương Hiệu<img class="left__iconDown" src="{{asset('backend/assets/arrow-down.svg')}}" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="{{route('admin.brand.create')}}">Thêm Thương Hiệu</a>
                    <a class="left__link" href="{{route('admin.brand.index')}}">Xem Thương Hiệu</a>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="{{asset('backend/assets/icon-edit.svg')}}" alt="">Đơn hàng nhập<img class="left__iconDown" src="{{asset('backend/assets/arrow-down.svg')}}" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="{{route('admin.import.create')}}">Thêm đơn nhâp</a>
                    <a class="left__link" href="{{route('admin.import.index')}}">Xem đơn nhập</a>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="{{asset('backend/assets/icon-user.svg')}}" alt="">Admin<img class="left__iconDown" src="{{asset('backend/assets/arrow-down.svg')}}" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="{{route('admin.profile.edit',['id' => session('id')])}}">Sửa thông tin</a>
                    <a class="left__link" href="{{route('admin.profile.index')}}">Thông tin</a>
                </div>
            </li>
            <li class="left__menuItem">
                @method('post')
                <a href="{{route('admin.logout')}}" class="left__title"><img src="{{asset('backend/assets/icon-logout.svg')}}" alt="">Đăng Xuất</a>
            </li>
        </ul>
    </div>
</div>
