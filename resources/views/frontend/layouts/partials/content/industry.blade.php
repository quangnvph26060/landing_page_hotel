<div class="industry-highlights-box text-center">
    <div class="industry-highlights-top pb-0"
        style="background-image: url(https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2023/10/08112249/ks_bg2.png)">
        <div class="container">
            <h3 class="industry-highlights-heading color-white d-inline-block">{{ $highlight->title }}
                {{-- <span class="d-block industry-highlights-note">Tích hợp mọi phần cứng</span> --}}
            </h3>
            <div class="industry-highlights-images d-block"><img class="" format="webp"
                    data-src="{{ showImage($highlight->banner ?? '') }}"
                    alt="Tích hợp mọi phần cứng" width="" height="" data-ll-status="loaded"
                    src="{{ showImage($highlight->image ?? '') }}">
            </div>
        </div>
    </div>
    <div class="industry-highlights-main">
        <div class="container">
            <div class="row">


                @foreach (json_decode($highlight->content, true) as $item )
                <div class="col-lg-4 col-md-12 d-flex">
                    <div class="industry-highlights-item w-100" style="background:#f2fbf5;">
                        <i class="{{ $item['icon'] }}"></i>


                        <h4 class="industry-highlights-title">{{ $item['name'] }}</h4>
                        <p class="industry-highlights-txt mb-0">{{ $item['description'] }}</p>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-lg-4 col-md-12 d-flex">
                    <div class="industry-highlights-item w-100" style="background:#fff9f2;">
                        <i class="fa-solid fa-print"></i>

                        <h4 class="industry-highlights-title">Quản lý dịch vụ, kiểm soát thông tin
                            khách
                            hàng tiện lợi</h4>
                        <p class="industry-highlights-txt mb-0">Hệ thống lưu trữ không giới hạn thông
                            tin khách hàng, linh hoạt điều chỉnh giúp đẩy nhanh quy trình phục vụ, gia
                            tăng trải nghiệm hài lòng từ khách hàng.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 d-flex">
                    <div class="industry-highlights-item w-100" style="background:#f2f8fe;">
                        <i class="fa-solid fa-barcode"></i>
                        <h4 class="industry-highlights-title">Tích hợp mọi thiết bị phần cứng hiện đại
                            nhất</h4>
                        <p class="industry-highlights-txt mb-0">Kết nối dễ dàng với nhiều thiết bị bán
                            hàng như máy quét mã vạch, máy in hóa đơn, két tiền... giúp khâu thanh toán,
                            phục vụ nhanh chóng hơn.</p>
                    </div>
                </div> --}}

            </div>
            <div class="box-footer"><button class="btn btn-primary box-popup-register"> Dùng thử miễn
                    phí </button></div>
        </div>
    </div>
</div>
