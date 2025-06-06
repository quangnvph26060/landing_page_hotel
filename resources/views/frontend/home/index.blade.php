@extends('frontend.layouts.master')

@section('og:title', strip_tags($config_all->title_seo))

@section('og:description', strip_tags($config_all->description_seo))

@section('description', strip_tags($config_all->description_seo))
@php
    $keywords =
        $config_all && $config_all->keyword_seo
            ? implode(
                ', ',
                collect(json_decode($config_all->keyword_seo))
                    ->pluck('value')
                    ->toArray(),
            )
            : '';
@endphp
@section('content')
    <div class="bg-overflow"></div>
@section('keywords', $keywords)

@include('frontend.layouts.partials.content.cardBox')
@include('frontend.layouts.partials.content.reason')
@include('frontend.layouts.partials.content.customer')
@include('frontend.layouts.partials.content.featured')

@include('frontend.layouts.partials.content.contact')
{{-- @include('frontend.layouts.partials.content.hotline') --}}
@endsection
