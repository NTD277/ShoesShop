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
                <a href="index.html" class="left__title"><img src="{{asset('backend/assets/icon-dashboard.svg')}}" alt="">Dashboard</a>
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
            <!-- <li class="left__menuItem">
                <div class="left__title"><img src="assets/icon-book.svg" alt="">Thể Loại<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="insert_category.html">Chèn Thể Loại</a>
                    <a class="left__link" href="view_category.html">Xem Thể Loại</a>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="assets/icon-settings.svg" alt="">Slide<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="insert_slide.html">Chèn Slide</a>
                    <a class="left__link" href="view_slides.html">Xem Slide</a>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="assets/icon-book.svg" alt="">Coupons<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="insert_coupon.html">Chèn Coupon</a>
                    <a class="left__link" href="view_coupons.html">Xem Coupons</a>
                </div>
            </li> -->
            <li class="left__menuItem">
                <a href="view_customers.html" class="left__title"><img src="{{asset('backend/assets/icon-users.svg')}}" alt="">Khách Hàng</a>
            </li>
            <li class="left__menuItem">
                <a href="view_orders.html" class="left__title"><img src="{{asset('backend/assets/icon-book.svg')}}" alt="">Đơn Đặt Hàng</a>
            </li>
            <!-- <li class="left__menuItem">
                <a href="edit_css.html" class="left__title"><img src="assets/icon-pencil.svg" alt="">Chỉnh CSS</a>
            </li> -->
            <li class="left__menuItem">
                <div class="left__title"><img src="{{asset('backend/assets/icon-user.svg')}}" alt="">Admin<img class="left__iconDown" src="{{asset('backend/assets/arrow-down.svg')}}" alt=""></div>
                <div class="left__text">
                    <a class="left__link" href="insert_admin.html">Chèn Admin</a>
                    <a class="left__link" href="view_admins.html">Xem Admins</a>
                </div>
            </li>
            <li class="left__menuItem">
                <a href="" class="left__title"><img src="{{asset('backend/assets/icon-logout.svg')}}" alt="">Đăng Xuất</a>
            </li>
        </ul>
    </div>
</div>
