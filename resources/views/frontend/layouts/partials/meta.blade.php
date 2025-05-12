<meta name="facebook-domain-verification" content="596ckow31ceg2kaownqwu554p8p7qo">
<meta name="robots" content="max-image-preview:large">
@php
    $keywords = $config_all && $config_all->keyword_seo
        ? implode(', ', collect(json_decode($config_all->keyword_seo))->pluck('value')->toArray())
        : '';
@endphp

<meta name="keywords" content="{{ $keywords }}">

<meta property="og:title" content="{{ $config_all ? $config_all->title_seo : '' }}">
<meta property="og:description" content="{!! strip_tags($config_all->description_seo) !!}">
<meta name="description" content="{!! strip_tags($config_all->description_seo) !!}">
<meta property="og:type" content="website">

<link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $config_all->icon) }}" sizes="64x64" fetchpriority="high">

<meta property="og:image" content="{{ asset('storage/' . $config_all->logo) }}">
<meta property="og:image:type" content="image/png">

