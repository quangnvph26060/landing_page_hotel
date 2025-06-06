<meta name="facebook-domain-verification" content="596ckow31ceg2kaownqwu554p8p7qo">
<meta name="robots" content="max-image-preview:large">

<meta name="keywords" content="@yield('keywords')">

<meta property="og:title" content="@yield('og:title')">
 {{-- {{ $config_all ? $config_all->title_seo : '' }} --}}
<meta property="og:description" content="@yield('og:description')">
{{-- {!! strip_tags($config_all->description_seo) !!} --}}
<meta name="description" content="@yield('description')">
{{-- {!! strip_tags($config_all->description_seo) !!} --}}
<meta property="og:type" content="website" />

<link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $config_all->icon) }}" sizes="64x64" fetchpriority="high">

<meta property="og:image" content="@yield('og:image', asset('storage/' . $config_all->logo) )" >
{{-- {{ asset('storage/' . $config_all->logo) }} --}}
<meta property="og:image:width" content="380">
<meta property="og:image:height" content="200">
<meta property="og:image:type" content="image/png">
<meta property="og:url" content="https://fasthotel.vn/" />
{!! $config_all->meta !!}


