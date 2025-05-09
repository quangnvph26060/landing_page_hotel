<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'HandelGothicArabic';
            src: url('{{ asset('fonts/1FTV-ITCHandelGothicArabic.otf') }}') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

        *:not(i, p, a, li) {
            font-family: 'HandelGothicArabic', sans-serif !important;
        }

        p:not(.price-packagename), li {
            font-family: 'Rajdhani', sans-serif !important;
        }

        #banner_main {
            height: 550px;
        }

        #banner_main {
            position: relative;
            overflow: hidden;
        }

        .background-layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: brightness(0.6);
            z-index: 0;
        }

        .page-banner-wrap {
            position: relative;
            z-index: 1;
            /* nội dung nằm trên ảnh */
        }



        @media (min-width: 1721px) {

            #banner_main {
                height: 800px;
            }
        }

        .nav-link {
            position: relative;
            display: inline-block;
            padding-bottom: 5px;
            /* tạo khoảng cho đường gạch */
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            /* bắt đầu từ 0 */
            height: 2px;
            background-color: #ff0100;
            /* màu đường gạch chân */
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: #ff0100 !important;
        }

        .nav-link:hover::after {
            width: 100%;
            /* chạy sang hết chiều ngang */
        }

        /* .nav-link-active {
            color: #ff0100 !important;
        } */

        .nav-link.nav-link-active::after {
            width: 100%;
        }

        .box-popup-register:hover {
            background-color: #ff0100 !important;
        }
    </style>


    @include('frontend.layouts.partials.meta')
    <script type="module" src="" crossorigin></script>
    <title>{{ $config_all ? $config_all->title_seo : 'Quản lý khách sạn' }} </title>

    <link rel="preload" as="fetch" fetchpriority="low" crossorigin="anonymous" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('storage/' . $config_all->icon) }}">
    @include('frontend.layouts.partials.style')

</head>

<body class="kiotviet-website">
    <div id="__nuxt">
        <!--[-->
        <div id="wrap-template">
            @include('frontend.layouts.partials.header')
            <div id="page-solution">
                @include('frontend.layouts.partials.content.banner')

                @yield('content')

                {{-- <div class="bg-overflow"></div> --}}

                {{-- @include('frontend.layouts.partials.content.cardBox') --}}

                {{-- @include('frontend.layouts.partials.content.industry') --}}

{{--
                @include('frontend.layouts.partials.content.customer')

                @include('frontend.layouts.partials.content.hotline') --}}

                <span title="Lên đầu trang" class="go_top cursor-pointer"
                    style="background-color: #ff0100 !important">
                    <i class="fa-solid fa-up-long"></i>
                </span>
                <!---->
            </div>
            @include('frontend.layouts.partials.footer')
        </div>
        <!---->
        <div class="bg-overflow"></div>
        <!--]-->
    </div>
    <div id="teleports"></div>

    @include('frontend.layouts.partials.script')
</body>

</html>
