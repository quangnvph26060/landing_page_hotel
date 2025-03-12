<div class="card-box">
    <div class="container">
        <div class="box-title text-center">
            <h3 class="card-heading mb-0">Quản lý Khách sạn &amp; Nhà nghỉ hiệu quả</h3>
            <div class="quantity-register d-flex justified-content-center align-items-center"><svg
                    class="svg-inline--fa fa-arrow-trend-up quantity-icon" aria-hidden="true" focusable="false"
                    data-prefix="far" data-icon="arrow-trend-up" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 576 512">
                    <path class="" fill="currentColor"
                        d="M352 120c0-13.3 10.7-24 24-24l176 0c13.3 0 24 10.7 24 24l0 176c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-118.1L337 369c-9.4 9.4-24.6 9.4-33.9 0l-111-111L41 409c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9L175 207c9.4-9.4 24.6-9.4 33.9 0l111 111L494.1 144 376 144c-13.3 0-24-10.7-24-24z">
                    </path>
                </svg><span class="quantity-user">10.000+</span><span class="industry-txt mb-0">Nhà kinh
                    doanh mới mỗi tháng</span></div>
        </div>
        <div class="row card-box-items">
            @forelse ($function as $index => $item)
                <div data-id="{{ $index }}" class="col-12 col-md-6 col-xl-10">
                    <div class="card-item" style="visibility: visible; background-color: #f2f8fe;">
                        <div class="{{ $index % 2 != 0 ? 'flex-row-reverse' : '' }}  row m-0">
                            <div class="card-img col-md-4">
                                <a style="background-color:#f2f8fe;" target="_blank">
                                    <img src="{{ showImage($item->image ?? '') }}" format="webp"
                                        alt="{{ $item->title }}">
                                </a>
                            </div>
                            <div class="card-content col-md-8">
                                <div class="card-wrap"><a class="card-title" target="_blank">{{ $item->title }}</a>
                                    <p>{!! $item->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse



        </div>
        <div class="box-footer"><button class="btn btn-primary box-popup-register"> Dùng thử miễn phí
            </button></div>
    </div>
</div>
