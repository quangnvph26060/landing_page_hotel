<div class="customer-box" style="background-color:#ffffff !important;">
    <div class="container">
        <div class="box-title">
            <h3 class="customer-heading mb-0">Khách hàng của chúng tôi</h3>
        </div>
        <div class="row customer-list" id="customer-load">
            @foreach ($post as $index => $item )
            <div data-id="{{ $index }}" class="col-xl-4 col-md-6">
                <div class="customer-item"><a href="{{ $item->slug }}"
                        target="_blank" class="images-form"><img format="webp" alt="customer-form-image" lazy="loaded"
                            src="{{ showImage($item->image ?? '') }}"></a>
                    <div class="content-form">
                        <h4 class="customer-title"><a
                                href="/{{ $item->slug }}"
                                target="_blank">{{ $item->title }}</a></h4>
                        <p class="font-small mb-0">{{ $item->address }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div data-id="1" class="col-xl-4 col-md-6">
                <div class="customer-item"><a
                        href="puna-ecolodge-dia-diem-nghi-duong-tuyet-dep-chi-cach-ha-noi-chua-toi-50km" target="_blank"
                        class="images-form"><img format="webp" alt="customer-form-image" lazy="loaded"
                        src="{{ asset('frontend/image/post2.png') }}"></a>
                    <div class="content-form">
                        <h4 class="customer-title"><a
                                href="/puna-ecolodge-dia-diem-nghi-duong-tuyet-dep-chi-cach-ha-noi-chua-toi-50km"
                                target="_blank">Punna Ecolodge - Địa điểm nghỉ dưỡng tuyệt đẹp chỉ cách
                                Hà Nội chưa tới 50km</a></h4>
                        <p class="font-small mb-0">Ngõ 14 đường Hoàng Hoa Thám, xã Ngọc Thanh, TP. Phúc
                            Yên, tỉnh Vĩnh Phúc.</p>
                    </div>
                </div>
            </div>
            <div data-id="2" class="col-xl-4 col-md-6">
                <div class="customer-item"><a
                        href="thien-trang-homestay-dau-tieng-hanh-trinh-chuyen-doi-quan-ly-tu-xa-ngay-tren-dien-thoai-cung-kiotviet"
                        target="_blank" class="images-form"><img format="webp" alt="customer-form-image" lazy="loaded"
                        src="{{ asset('frontend/image/post3.png') }}"></a>
                    <div class="content-form">
                        <h4 class="customer-title"><a
                                href="/thien-trang-homestay-dau-tieng-hanh-trinh-chuyen-doi-quan-ly-tu-xa-ngay-tren-dien-thoai-cung-kiotviet"
                                target="_blank">Thiên Trang Homestay - Dầu Tiếng: Hành trình chuyển đổi
                                quản lý từ xa, ngay trên điện thoại cùng KiotViet</a></h4>
                        <p class="font-small mb-0">DH710, Định Thành, Dầu Tiếng, Bình Dương</p>
                    </div>
                </div>
            </div>
            <div data-id="3" class="col-xl-4 col-md-6">
                <div class="customer-item"><a
                        href="t-a-hometel-apartment-toi-uu-quy-phong-kiem-soat-van-hanh-voi-kiotviet" target="_blank"
                        class="images-form"><img format="webp" alt="customer-form-image" lazy="loaded"
                        src="{{ asset('frontend/image/post4.png') }}"></a>
                    <div class="content-form">
                        <h4 class="customer-title"><a
                                href="/t-a-hometel-apartment-toi-uu-quy-phong-kiem-soat-van-hanh-voi-kiotviet"
                                target="_blank">T.A Hometel &amp; Apartment: Tối ưu quỹ phòng, kiểm
                                soát
                                vận hành với KiotViet</a></h4>
                        <p class="font-small mb-0">Số 51 Thiên Hiền, Mỹ Đình, Hà Nội</p>
                    </div>
                </div>
            </div>
            <div data-id="4" class="col-xl-4 col-md-6">
                <div class="customer-item"><a href="bay-view-hotel-kiem-soat-hoat-dong-kinh-doanh-ngay-tren-dien-thoai"
                        target="_blank" class="images-form"><img format="webp" alt="customer-form-image" lazy="loaded"
                        src="{{ asset('frontend/image/post5.png') }}"></a>
                    <div class="content-form">
                        <h4 class="customer-title"><a
                                href="/bay-view-hotel-kiem-soat-hoat-dong-kinh-doanh-ngay-tren-dien-thoai"
                                target="_blank">Bayview Hotel kiểm soát hoạt động kinh doanh ngay trên
                                điện thoại</a></h4>
                        <p class="font-small mb-0">146 Hạ Long, Phường 2, Vũng Tàu, Bà Rịa Vũng Tàu</p>
                    </div>
                </div>
            </div>
            <div data-id="5" class="col-xl-4 col-md-6">
                <div class="customer-item"><a href="apricot-garden-hotel-don-dau-xu-the-du-lich-thong-minh-voi-kiotviet"
                        target="_blank" class="images-form"><img format="webp" alt="customer-form-image" lazy="loaded"
                        src="{{ asset('frontend/image/post6.png') }}"></a>
                    <div class="content-form">
                        <h4 class="customer-title"><a
                                href="/apricot-garden-hotel-don-dau-xu-the-du-lich-thong-minh-voi-kiotviet"
                                target="_blank">Apricot Garden Hotel: Đón đầu xu thế du lịch thông minh
                                với KiotViet</a></h4>
                        <p class="font-small mb-0">740 Đường Điện Biên Phủ, TT. Sa Pa, Lào Cai</p>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <div class="box-link-customer"><a href=""
                class="btn btn-blur-primary btn-allcustomer" rel="nofollow">Tất cả khách hàng</a>
        </div> --}}
    </div>
</div>
