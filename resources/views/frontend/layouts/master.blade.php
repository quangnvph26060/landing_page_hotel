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

        .news-col-left * {
            font-family: 'Rajdhani', sans-serif !important;
        }

        p:not(.price-packagename), li {
            font-family: 'Rajdhani', sans-serif !important;
        }

        input::placeholder {
            font-family: 'Rajdhani', sans-serif !important;
        }
        input, span{
            font-family: 'Rajdhani', sans-serif !important;
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


                <span title="Lên đầu trang" class="go_top cursor-pointer" style="background-color: #ff0100 !important">
                    <i class="fa-solid fa-up-long"></i>
                </span>

                <div class="zalo-wrapper">
                    <!-- Sóng -->
                    <div class="pulse-ring"></div>
                    <div class="pulse-ring"></div>

                    <!-- Nút Zalo -->
                    <a href="https://zalo.me/{{ preg_replace('/\D/', '', $config->hotline )}}" target="_blank" class="zalo-button">
                    </a>
                </div>
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
