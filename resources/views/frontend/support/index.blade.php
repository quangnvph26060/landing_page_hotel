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
    <div class="mt-4">
        <div class="container">
            {{-- <div class="supportMain-Nav">
                 <ul class="supdetailNav" id="supdetailNav">
                        </ul>
            </div> --}}

            <div class="supportMain-content">
                <div class="supportMain-content_sidebar">
                    <div class="supportMain-Nav">
                        <ul class="supdetailNav" id="supdetailNav">
                        </ul>
                    </div>
                </div>

                <div class="supportMain-content_article">
                    {{-- supportMain-content_article-wrapper --}}
                    <div class="supportMain-content_article-wrapper">

                    </div>
                    <div class="box-register-new text-center">
                        {{-- <h4 class="txt">Fasthotel - <a style="color:#002146!important" href="https://fasthotel.vn/">
                                Phần mềm quản lý Khách sạn & Homestay</a></h4>
                        <div class="text-center list">
                            <ul class="clearfix" style="list-style:none !important">
                                <li style=" list-style: none; " class="pull-left">Với <span>300.000</span> nhà kinh
                                    doanh sử dụng</li>
                                <li style=" list-style: none; " class="pull-left">Chỉ từ: <span>8.000đ</span>/ ngày
                                </li>
                            </ul>
                        </div>  --}}
                        {{-- <button class="register box-popup-register" id="box-register-single" data-scrolltop="no">
                            <span>Dùng thử miễn phí</span>
                        </button> --}}
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
                        for (let i = 0; i < 1000 && i < navWithLinks.length; i++) {
                            const item = navWithLinks[i];
                            const li = document.createElement('li');
                            li.classList.add('supdetailNav-item');
                            if (item.slug === currentSlug) {
                                li.classList.add('active');
                            }
                            li.innerHTML =
                                `<a class="a-item" data-slug="${item.slug}" href="${item.link}">${item.text}</a>`;
                            supdetailNav.appendChild(li);
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
        // load trnag vẫn ở chỗ đó
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('scrollY', window.scrollY);
        });
        window.addEventListener('load', function() {
            const scrollY = localStorage.getItem('scrollY');
            if (scrollY !== null) {
                window.scrollTo(0, parseInt(scrollY));
                localStorage.removeItem('scrollY'); // chỉ dùng 1 lần
            }
        });
    </script>
@endsection
<style scoped>
    .supdetailNav {
        flex-direction: column;
        padding: 8px;
        margin-top: -15px;
    }

    .supportMain-Nav {
        top: 0px !important;
        background: none !important;
    }

    .supportMain-content {
        display: flex;
    }

    .supportMain-content_sidebar {
        width: 30%;
        padding-right: 20px;
        /* tùy chọn */
        box-sizing: border-box;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        /* top: 318px !important; */
        overflow-y: inherit !important;
    }

    .supdetailNav-item a {
        padding: 11px 0 !important;
    }

    .supdetailNav-item {
        text-align: start !important;
    }

    .supportMain-content_article {
        width: 70%;
        box-sizing: border-box;
    }
</style>
