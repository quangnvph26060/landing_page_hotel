<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('frontend.layouts.partials.meta')
    <script type="module" src="" crossorigin></script>
    <title>{{ $config_all ? $config_all->company : 'Quản lý khách sạn' }} </title>

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

                <div class="bg-overflow"></div>

                @include('frontend.layouts.partials.content.cardBox')

                @include('frontend.layouts.partials.content.industry')

                @include('frontend.layouts.partials.content.customer')

                @include('frontend.layouts.partials.content.hotline')

                <span title="Lên đầu trang" class="go_top cursor-pointer">
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
