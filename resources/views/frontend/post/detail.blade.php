@extends('frontend.layouts.master')
@section('og:title', strip_tags($post->title_seo))

@section('og:description', strip_tags($post->description_seo))

@section('description', strip_tags($post->description_seo))
@php
    $keywords =
        $post && $post->keyword_seo
            ? implode(
                ', ',
                collect(json_decode($post->keyword_seo))
                    ->pluck('value')
                    ->toArray(),
            )
            : '';
@endphp
@section('keywords', $keywords)
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

        .news-detail-head-left ul {
            list-style: inherit !important;
        }

        .news-detail-head-left li {
            list-style: inherit !important;
            margin-left: inherit !important;
        }

        .news-detail-head-left * {
            list-style: inherit !important;
            /* font-size: inherit !important; */

        }

        html p {
            margin: inherit !important;
            padding: inherit !important;
        }

        /* .news-col-left * {
                all: unset;
            } */

        p:not(.price-packagename),
        li {
            font-family: 'Rajdhani', sans-serif !important;
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
                <div class="news-page-main">
                    <div class="news-col-left">
                        <div class="breadcrumb">
                            <a href="{{ route('home') }}">Trang chủ</a>
                            <a href="{{ route('post') }}">Tin Tức</a>
                            <a>{{ $post->title }}</a>
                        </div>
                        <h1 class="title"> {{ $post->title }} </h1>
                        <div class="news-detail-head">
                            <div class="news-detail-head-left">
                                {{ $post->created_at->format('d/m/Y H:i:s') }}
                                <div class="mt-3">
                                    {!! $post->description !!}
                                </div>
                            </div>


                        </div>
                    </div>

                    @include('frontend.post.right')
                </div>


            </div>
        </div>
    </div>
@endsection
