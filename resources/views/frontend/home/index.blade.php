@extends('frontend.layouts.master')
@section('content')
    <div class="bg-overflow"></div>

    @include('frontend.layouts.partials.content.cardBox')
    @include('frontend.layouts.partials.content.reason')
    @include('frontend.layouts.partials.content.customer')
    @include('frontend.layouts.partials.content.featured')

    @include('frontend.layouts.partials.content.contact')
    {{-- @include('frontend.layouts.partials.content.hotline') --}}
@endsection
