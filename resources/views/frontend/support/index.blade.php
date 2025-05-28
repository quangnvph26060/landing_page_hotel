@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet"
        href="{{ asset('frontend/css/suport.css') }}?v={{ filemtime(public_path('frontend/css/suport.css')) }}">
    <style>
        p:not(.price-packagename),
        li {
            font-family: 'Rajdhani', sans-serif !important;
        }
    </style>
    <div class="card-box">
        <div class="container">
            <div class="supportMain-Nav">
                <ul class="supdetailNav" id="supdetailNav">
                </ul>
            </div>

            <div class="supportMain-content">
                {{-- <div class="supportMain-content_sidebar">

                    <span class="supportMain-content_sidebar-title"> Quản lý mẫu in </span>
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
                                                data-id="4v-su-dung-mau-in" data-root="4v-su-dung-mau-in">
                                                <a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#v-su-dung-mau-in">V.
                                                    Sử dụng mẫu in</a>
                                            </li>
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


                </div> --}}

                <div class="supportMain-content_article">
                    {{-- supportMain-content_article-wrapper --}}
                    <div class="supportMain-content_article-wrapper">

                    </div>
                    <div class="box-register-new text-center">
                        <h4 class="txt">Fasthotel - <a style="color:#002146!important" href="https://fasthotel.vn/">
                                Phần mềm quản lý Khách sạn & Homestay</a></h4>
                        <div class="text-center list">
                            <ul class="clearfix" style="list-style:none !important">
                                <li style=" list-style: none; " class="pull-left">Với <span>300.000</span> nhà kinh
                                    doanh sử dụng</li>
                                <li style=" list-style: none; " class="pull-left">Chỉ từ: <span>8.000đ</span>/ ngày
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const domain = "{{ env('APP_URL') }}";
            const supdetailNav = document.getElementById('supdetailNav');

            $.ajax({
                url: "{{ route('admin.categorie.support') }}",
                method: 'GET',
                dataType: 'json',
                success: function(result) {
                    if (result.success) {
                        const navItems = result.data;

                        const navWithLinks = navItems.map(item => ({
                            text: item.name,
                            slug: item.slug,
                            link: domain + '/huong-dan-su-dung-fasthotel/' + item.slug
                        }));

                        supdetailNav.innerHTML = ''; // Xóa nội dung cũ nếu có
const currentSlug = getSlugFromUrl();
                        // Tạo 7 mục đầu tiên
                        for (let i = 0; i < 7 && i < navWithLinks.length; i++) {
                            const item = navWithLinks[i];
                            const li = document.createElement('li');
                            li.classList.add('supdetailNav-item');
                             if (item.slug === currentSlug) {
                                li.classList.add('active');
                            }
                            li.innerHTML = `<a class="a-item" data-slug="${item.slug}" href="${item.link}">${item.text}</a>`;
                            supdetailNav.appendChild(li);
                        }

                        // Nếu có nhiều hơn 7 mục thì thêm nút "Xem thêm"
                        if (navWithLinks.length > 7) {
                            const lastItem = document.createElement('li');
                            lastItem.classList.add('supdetailNav-item', 'lastItem');
                            lastItem.innerHTML =
                                `<a class="load-more" href="javascript:void(0);">Xem thêm</a>`;

                            const wrapNavlist = document.createElement('div');
                            wrapNavlist.classList.add('wrap-navlist');
                            wrapNavlist.style.display = 'none'; // Mặc định ẩn

                            const sublist = document.createElement('ul');
                            sublist.classList.add('supdetailNav-sublist');

                            // Thêm các mục còn lại vào danh sách con
                            for (let i = 7; i < navWithLinks.length; i++) {
                                const item = navWithLinks[i];
                                const subItem = document.createElement('li');
                                subItem.classList.add('supdetailNav-sublist-item');
                                subItem.innerHTML =
                                    `<a class="a-sub-item" data-slug="${item.slug}" href="${item.link}" >${item.text}</a>`;
                                sublist.appendChild(subItem);
                            }

                            wrapNavlist.appendChild(sublist);
                            lastItem.appendChild(wrapNavlist);
                            supdetailNav.appendChild(lastItem);

                            // Xử lý sự kiện click vào "Xem thêm"
                            const loadMore = lastItem.querySelector('.load-more');
                            loadMore.addEventListener('click', function() {
                                wrapNavlist.style.display = wrapNavlist.style.display ===
                                    'none' ? 'block' : 'none';
                            });
                        }
                    } else {
                        console.error('Lấy dữ liệu danh mục thất bại');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Lỗi khi gọi API:', error);
                }
            });

            function getSlugFromUrl() {
                const pathSegments = window.location.pathname.split('/').filter(Boolean);
                // Tìm vị trí của 'huong-dan-su-dung-fasthotel' trong đường dẫn
                const index = pathSegments.indexOf('huong-dan-su-dung-fasthotel');
                if (index !== -1 && pathSegments.length > index + 1) {
                    return pathSegments[index + 1]; // phần ngay sau 'huong-dan-su-dung-fasthotel'
                }
                return null; // không tìm thấy slug phù hợp
            }

            $(document).ready(function() {
                const slug = getSlugFromUrl();
                if (!slug) {
                    console.error('Không tìm thấy slug trong URL');
                    return;
                }

                $.ajax({
                    url: "{{ route('admin.support.category', '') }}/" + slug,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            const guides = response.data.guides;
                            const container = $('.supportMain-content_article-wrapper');
                            container.empty();

                            guides.forEach(guide => {
                                const contentElement = $('<div></div>').html(guide
                                    .content);
                                container.append(contentElement);
                            });

                        } else {
                            console.error('Lấy dữ liệu thất bại:', response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Lỗi khi gọi API:', error);
                    }
                });
            });

        });
    </script>
@endsection
