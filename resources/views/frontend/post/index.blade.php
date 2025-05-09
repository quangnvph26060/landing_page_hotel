@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet"
        href="{{ asset('frontend/css/post.css') }}?v={{ filemtime(public_path('frontend/css/post.css')) }}">
    <style>
        @font-face {
            font-family: 'HandelGothicArabic';
            src: url('{{ asset('fonts/1FTV-ITCHandelGothicArabic.otf') }}') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        *:not(i, p, a) {
            font-family: 'HandelGothicArabic', sans-serif !important;
        }

        .breadcrumb a:not(:last-child)::after {
            content: " ›";
            margin: 0 5px;
            color: #888;
        }

    </style>
    <div class="sub-content news-page">
        <div class="container">
            <div class="wrapper-content">
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Trang chủ</a>
                    <a href="{{ route('post') }}">Tin Tức</a>
                </div>

                <div class="news-page-main">
                    <div class="blogs-new news-col-left">

                        <h3 class="title-news"><span>Bài viết </span></h3>
                        <ul class="blogs-list">
                            @forelse ($post as $item)
                                <li class="kv-news-item">
                                    <div class="images-form">
                                        <a class="img-content"
                                            href="{{ route('post.detail', ['slug' => $item->slug]) }}"
                                            title="“Yêu nước đâu phải chờ đến lễ lớn!” - Câu chuyện GenZ khởi nghiệp bằng tình yêu thương của khách hàng"
                                            style="background-image:url('{{ showImage($item->image ?? '') }}')">
                                            <img class="lazy" src="{{ showImage($item->image ?? '') }}"
                                                data-src="{{ showImage($item->image ?? '') }}"
                                                alt="“Yêu nước đâu phải chờ đến lễ lớn!” - Câu chuyện GenZ khởi nghiệp bằng tình yêu thương của khách hàng" />
                                        </a>
                                    </div>
                                    <div class="content-form">
                                        <h5 class="news-title">
                                            <a class="color-text-base"
                                                href="{{ route('post.detail', ['slug' => $item->slug]) }}"
                                                title="{{ $item->title }}">
                                                {{ $item->title }} </a>
                                        </h5>
                                        @php
                                            $rawText = strip_tags(html_entity_decode($item->description));
                                            $shortText = \Illuminate\Support\Str::limit($rawText, 173, '...');
                                        @endphp

                                        <p class="color-gray">{{ $shortText }}</p>

                                        <p class="news-date">{{ $item->created_at->format('d/m/Y H:i:s') }}</p>

                                    </div>
                                </li>
                            @empty
                            @endforelse
                            {{-- <li class="kv-news-item">
                                <div class="images-form">
                                    <a class="img-content"
                                        href="https://www.kiotviet.vn/yeu-nuoc-dau-phai-cho-den-le-lon-cau-chuyen-genz-khoi-nghiep-bang-tinh-yeu-thuong-cua-khach-hang/"
                                        title="“Yêu nước đâu phải chờ đến lễ lớn!” - Câu chuyện GenZ khởi nghiệp bằng tình yêu thương của khách hàng"
                                        style="background-image:url('https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2025/04/18110010/gen-z-khoi-nghiep-bang-tinh-yeu-thuong-cua-khach-hang-0.png')">
                                        <img class="lazy"
                                            src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2023/11/02103020/default_bg-1.webp"
                                            data-src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2025/04/18110010/gen-z-khoi-nghiep-bang-tinh-yeu-thuong-cua-khach-hang-0.png"
                                            alt="“Yêu nước đâu phải chờ đến lễ lớn!” - Câu chuyện GenZ khởi nghiệp bằng tình yêu thương của khách hàng" />
                                    </a>
                                </div>
                                <div class="content-form">
                                    <h5 class="news-title">
                                        <a class="color-text-base"
                                            href="https://www.kiotviet.vn/yeu-nuoc-dau-phai-cho-den-le-lon-cau-chuyen-genz-khoi-nghiep-bang-tinh-yeu-thuong-cua-khach-hang/"
                                            title="“Yêu nước đâu phải chờ đến lễ lớn!” - Câu chuyện GenZ khởi nghiệp bằng tình yêu thương của khách hàng">
                                            “Yêu nước đâu phải chờ đến lễ lớn!” &#8211; Câu chuyện GenZ khởi nghiệp
                                            bằng tình yêu thương của khách hàng </a>
                                    </h5>
                                    <p class="color-gray">
                                        Tay ngang khởi nghiệp với tình yêu lịch sử - văn hóa dân tộc, Ngọc Hà - cô
                                        chủ shop GenZ đã từng bước “thêu” nên giấc mơ của riêng&hellip; </p>
                                    <p class="news-date">19/04/2025 11:32:45</p>
                                </div>
                            </li>
                            <li class="kv-news-item">
                                <div class="images-form">
                                    <a class="img-content"
                                        href="https://www.kiotviet.vn/phan-mem-quan-ly-quan-pho-duoc-su-dung-pho-bien-nhat/"
                                        title="Phần mềm quản lý quán phở được sử dụng phổ biến nhất trong năm 2025"
                                        style="background-image:url('https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2025/04/02085658/phan-mem-quan-ly-quan-pho.jpg')">
                                        <img class="lazy"
                                            src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2023/11/02103020/default_bg-1.webp"
                                            data-src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2025/04/02085658/phan-mem-quan-ly-quan-pho.jpg"
                                            alt="Phần mềm quản lý quán phở được sử dụng phổ biến nhất trong năm 2025" />
                                    </a>
                                </div>
                                <div class="content-form">
                                    <h5 class="news-title">
                                        <a class="color-text-base"
                                            href="https://www.kiotviet.vn/phan-mem-quan-ly-quan-pho-duoc-su-dung-pho-bien-nhat/"
                                            title="Phần mềm quản lý quán phở được sử dụng phổ biến nhất trong năm 2025">
                                            Phần mềm quản lý quán phở được sử dụng phổ biến nhất trong năm 2025 </a>
                                    </h5>
                                    <p class="color-gray">
                                        Đằng sau bát phở nóng hổi là cả một quá trình vận hành đầy vất vả: làm sao
                                        để ghi nhận order nhanh chóng, tránh nhầm lẫn? Làm thế nào&hellip; </p>
                                    <p class="news-date">02/04/2025 16:03:08</p>
                                </div>
                            </li>
                            <li class="kv-news-item">
                                <div class="images-form">
                                    <a class="img-content"
                                        href="https://www.kiotviet.vn/giam-that-thoat-toi-uu-loi-nhuan-voi-phan-mem-quan-ly-kho-bang-ma-vach-kiotviet/"
                                        title="Giảm thất thoát, tối ưu lợi nhuận với phần mềm quản lý kho bằng mã vạch KiotViet"
                                        style="background-image:url('https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2025/04/02034715/phan-mem-kiem-kho-bang-ma-vach-4.jpg')">
                                        <img class="lazy"
                                            src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2023/11/02103020/default_bg-1.webp"
                                            data-src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2025/04/02034715/phan-mem-kiem-kho-bang-ma-vach-4.jpg"
                                            alt="Giảm thất thoát, tối ưu lợi nhuận với phần mềm quản lý kho bằng mã vạch KiotViet" />
                                    </a>
                                </div>
                                <div class="content-form">
                                    <h5 class="news-title">
                                        <a class="color-text-base"
                                            href="https://www.kiotviet.vn/giam-that-thoat-toi-uu-loi-nhuan-voi-phan-mem-quan-ly-kho-bang-ma-vach-kiotviet/"
                                            title="Giảm thất thoát, tối ưu lợi nhuận với phần mềm quản lý kho bằng mã vạch KiotViet">
                                            Giảm thất thoát, tối ưu lợi nhuận với phần mềm quản lý kho bằng mã vạch
                                            KiotViet </a>
                                    </h5>
                                    <p class="color-gray">
                                        Bạn đã từng gặp phải tình trạng không biết hàng nào sắp hết để nhập thêm?
                                        Hay phải mất hàng giờ kiểm kê nhưng số liệu vẫn không khớp? Đó&hellip; </p>
                                    <p class="news-date">02/04/2025 10:48:16</p>
                                </div>
                            </li> --}}
                        </ul>
                        {{-- <div class="pagination">
                            <a class="page-link page-prev" style="margin-right: 16px; color: #C2C7CE !important"
                                href="javascript:void(0)"><i class="fas fa-chevron-left"></i></a>
                            <div class="pageNumber-list">
                                <span id=1 class="current">1</span>
                                <a href="./?page=2" class="page-link">2</a>
                                <a href="./?page=3" class="page-link">3</a>
                                <a href="./?page=4" class="page-link">4</a>
                                <span class="">.....</span>
                                <a href="./?page=157" class="page-link">157</a>
                            </div>
                            <a href="./?page=2" class="page-link page-next" style="margin-left: 16px"><i class="fas fa-chevron-right"></i></a>
                        </div> --}}
                    </div>

                    @include('frontend.post.right')
                </div>


            </div>
        </div>
    </div>
@endsection
