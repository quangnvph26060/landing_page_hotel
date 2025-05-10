@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet"
        href="{{ asset('frontend/css/suport.css') }}?v={{ filemtime(public_path('frontend/css/suport.css')) }}">

    <div class="supportMain">
        <div class="container">
            <div class="supportMain-Nav">
                <ul class="supdetailNav" id="supdetailNav">
                </ul>
            </div>

            <div class="supportMain-content">
                <div class="supportMain-content_sidebar">
                    <div class="supportMain-content_sidebar_header">
                        <p>Mục lục</p>
                        <i class="fa-regular fa-xmark close-popup"></i>
                    </div>
                    <span class="supportMain-content_sidebar-title">
                        Quản lý mẫu in </span>
                    <div class="menu-tin-tuc-container">
                        <ul id="menu-tin-tuc" class="menu">
                            <li id="menu-item-89000"
                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-89000 menu_one">
                                <ul class="sub-menu supportMain-content_sidebar-list"
                                    id="quan-ly-mau-ini-quan-ly-mau-iniithem-mau-iniii-sua-mau-iniv-xoa-mau-inv-su-dung-mau-in1-man-hinh-thu-ngan2-man-hinh-quan-ly">
                                    <li id="menu-item-89018"
                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-88379 current_page_item menu-item-89018 supportMain-content_sidebar-item active has-child">
                                        <a aria-current="page"
                                            data-href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/">Quản
                                            lý mẫu in</a>
                                        <ul class="supportMain-content_sidebar-submenu">
                                            <li class="supportMain-content_sidebar-subitem menu-3 active" data-level="3"
                                                data-id="0i-quan-ly-mau-in" data-root="0i-quan-ly-mau-in"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#i-quan-ly-mau-in">I.
                                                    Quản lý mẫu in</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-3" data-level="3"
                                                data-id="1iithem-mau-in" data-root="1iithem-mau-in"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#iithem-mau-in">II.Thêm
                                                    mẫu in</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-3" data-level="3"
                                                data-id="2iii-sua-mau-in" data-root="2iii-sua-mau-in"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#iii-sua-mau-in">III.
                                                    Sửa mẫu in</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-3" data-level="3"
                                                data-id="3iv-xoa-mau-in" data-root="3iv-xoa-mau-in"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#iv-xoa-mau-in">IV.
                                                    Xóa mẫu in</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-3" data-level="3"
                                                data-id="4v-su-dung-mau-in" data-root="4v-su-dung-mau-in"><span
                                                    class="far arrow-menu-3 fa-chevron-down"></span><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#v-su-dung-mau-in">V.
                                                    Sử dụng mẫu in</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-4" data-stt-parent="5"
                                                data-level="4" data-id="41-man-hinh-thu-ngan"
                                                data-parent="4v-su-dung-mau-in" data-root="4v-su-dung-mau-in"
                                                style="display: list-item;"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#1-man-hinh-thu-ngan-4-5">1.
                                                    Màn hình Thu ngân</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-4" data-stt-parent="5"
                                                data-level="4" data-id="42-man-hinh-quan-ly" data-parent="4v-su-dung-mau-in"
                                                data-root="4v-su-dung-mau-in" style="display: list-item;"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#2-man-hinh-quan-ly-4-5">2.
                                                    Màn hình Quản lý</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>


                </div>

                <div class="supportMain-content_article">
                    <div class="supportMain-content_article-wrapper">
                        <div class="supportMain-breadcrumb">
                            <a href="/huong-dan-su-dung-kiotviet">Hỗ trợ</a>
                            <span class="supportMain-breadcrumb_arrow"></span>
                            <a href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/">Quản lý
                                mẫu in</a>
                        </div>

                        <div class="supportMain-content_header_title">
                            <p><i class="fa-regular fa-list"></i>Xem mục lục</p>
                        </div>

                        <h2 class="supportMain-content_article-title">Quản lý mẫu in</h2>

                        <h1 style="text-align: center;">
                            <span style="font-family:arial,helvetica,sans-serif;">
                                Hướng dẫn sử dụng tính năng Quản lý mẫu in
                            </span>
                        </h1>

                        <h2>
                            <span style="font-size:16px;">
                                <span style="font-family:arial,helvetica,sans-serif;">
                                    <strong>
                                        <span class="sub-menu" id="i-quan-ly-mau-in">I. Quản lý mẫu in</span>
                                    </strong>
                                </span>
                            </span>
                        </h2>

                        <p>- Trên màn hình <strong>Quản lý</strong>, bạn kích <strong>Thiết lập</strong> (1) → chọn
                            <strong>Quản lý mẫu in (2)</strong>
                        </p>

                        <p align="center">
                            <img alt="" class="alignnone size-full wp-image-70534"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2022/03/bk24032022dx1.png"
                                style="border: 1px solid rgb(170, 170, 170); max-height: 421px;" width="401">
                        </p>

                        <!-- Đã rút gọn phần HTML nội dung dài -->

                        <div>
                            <p>
                                <span style="font-family:arial,helvetica,sans-serif;">
                                    Như vậy, KiotViet đã thực hiện xong phần hướng dẫn tính năng Quản lý mẫu in.
                                </span>
                            </p>
                            <p>
                                <span style="font-family:arial,helvetica,sans-serif;">
                                    Mọi thắc mắc xin liên hệ tổng đài tư vấn bán hàng <strong>1800 6162</strong>, tổng đài
                                    hỗ trợ phần mềm <strong>1900 6522</strong>
                                    hoặc email cho chúng tôi tại địa chỉ: <strong>hotro@kiotviet.com</strong> để được hỗ trợ
                                    và giải đáp.
                                </span>
                            </p>
                            <p>
                                <span style="font-family:arial,helvetica,sans-serif;">Chúc Quý khách thành công!</span>
                            </p>
                            <p style="text-align: right;">
                                <span style="font-size:11px;">
                                    <span style="font-family:arial,helvetica,sans-serif;">
                                        <em>Tài liệu được cập nhật mới nhất...</em>
                                    </span>
                                </span>
                            </p>

                        </div>
                    </div>
                    <div class="box-register-new text-center">
                        <h4 class="txt">KiotViet - <a style="color:#002146!important"
                                href="https://www.kiotviet.vn/">Phần
                                mềm quản lý bán hàng</a> phổ biến nhất</h4>
                        <div class="text-center list">
                            <ul class="clearfix" style="list-style:none !important">
                                <li style=" list-style: none; " class="pull-left">Với <span>300.000</span> nhà
                                    kinh
                                    doanh sử dụng</li>
                                <li style=" list-style: none; " class="pull-left">Chỉ từ: <span>8.000đ</span>/
                                    ngày
                                </li>
                            </ul>
                        </div> <button class="register box-popup-register" id="box-register-single" data-scrolltop="no">
                            <span>Dùng thử miễn phí</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Dữ liệu demo (mô phỏng các item)
            const navItems = [{
                    text: "Khởi tạo gian hàng",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/huong-dan-su-dung/dang-ky-web-hotel/"
                },
                {
                    text: "Thiết lập cửa hàng",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/thiet-lap-cua-hang-web-hotel/"
                },
                {
                    text: "Quản lý mẫu in",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/"
                },
                {
                    text: "Phân quyền truy cập",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/phan-quyen-truy-cap-web-hotel/"
                },
                {
                    text: "Quản lý nhân viên",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-nhan-vien-tinh-luong-web-hotel/"
                },
                {
                    text: "Quản lý chi nhánh",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-chi-nhanh-web-hotel/"
                },
                {
                    text: "Phòng/ Hạng phòng",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-hang-phong-phong-web-hotel/"
                },
                {
                    text: "Lễ tân",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/man-hinh-le-tan-web-hotel/"
                },
                {
                    text: "Dịch vụ, sản phẩm",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/danh-muc-hang-hoa-web-hotel/"
                },
                {
                    text: "Sổ quỹ",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/so-quy-web-hotel/"
                },
                // Thêm các mục còn lại tại đây nếu cần
            ];

            // Lấy phần tử chứa danh sách
            const supdetailNav = document.getElementById('supdetailNav');

            // Chỉ hiển thị 7 mục đầu tiên
            for (let i = 0; i < 7; i++) {
                const item = navItems[i];
                const li = document.createElement('li');
                li.classList.add('supdetailNav-item');
                li.innerHTML = `<a class="a-item" href="${item.link}">${item.text}</a>`;
                supdetailNav.appendChild(li);
            }

            // Thêm nút "Xem thêm"
            const lastItem = document.createElement('li');
            lastItem.classList.add('supdetailNav-item', 'lastItem');
            lastItem.innerHTML = `<a class="load-more" href="javascript:void(0);">Xem thêm</a>`;

            const wrapNavlist = document.createElement('div');
            wrapNavlist.classList.add('wrap-navlist');
            const sublist = document.createElement('ul');
            sublist.classList.add('supdetailNav-sublist');

            // Thêm các mục còn lại vào danh sách con
            for (let i = 7; i < navItems.length; i++) {
                const item = navItems[i];
                const subItem = document.createElement('li');
                subItem.classList.add('supdetailNav-sublist-item');
                subItem.innerHTML = `<a class="a-sub-item" href="${item.link}">${item.text}</a>`;
                sublist.appendChild(subItem);
            }

            wrapNavlist.appendChild(sublist);
            lastItem.appendChild(wrapNavlist);
            supdetailNav.appendChild(lastItem);

            // Xử lý sự kiện click vào "Xem thêm"
            const loadMore = document.querySelector('.load-more');
            loadMore.addEventListener('click', function() {
                wrapNavlist.style.display = wrapNavlist.style.display === 'none' ? 'block' : 'none';
            });
        });
    </script>
@endsection
