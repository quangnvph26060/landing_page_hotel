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
                        </ul>
                    </div>

                    @include('frontend.post.right')
                </div>


            </div>
        </div>
    </div>
@endsection
