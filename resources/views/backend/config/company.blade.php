@extends('backend.layouts.master')


@section('content')
    @include('backend.layouts.partials.breadcrumb', [
        'page' => 'Thông tin công ty',
    ])

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link  fw-bold" id="info-tab" href="{{ route('admin.banners.index') }}">Banner</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link  fw-bold" id="seo-tab" href="{{ route('admin.highlights.index') }}">Đặc điểm nổi bật</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link fw-bold" id="seo-tab" href="{{ route('admin.technologies.index') }}">Hỗ trợ</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link active fw-bold" id="seo-tab" href="#">Thông tin công ty</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link fw-bold" id="seo-tab" href="{{ route('admin.seo.index') }}">Seo</a>
        </li>
    </ul>



    <form action="{{ route('admin.configs.store') }}" method="post" enctype="multipart/form-data" id="myForm">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" aria-labelledby="info-tab">
                                <div class="row">
                                    <div class="col-md-8 row">
                                        <div class="form-group mb-2 col-lg-12">
                                            <label for="company" class="form-label">Tên công ty </label>
                                            <input value="{{ $config->company ?? '' }}" id="company"
                                                name="company"class="form-control" type="text" placeholder="Tên công ty">
                                        </div>

                                        <div class="form-group mb-2 col-lg-12">
                                            <label for="email" class="form-label">Email </label>
                                            <input value="{{ $config->email ?? '' }}" id="email"
                                                name="email"class="form-control" type="text" placeholder="Email">
                                        </div>

                                        <div class="form-group mb-2 col-lg-12">
                                            <label for="address" class="form-label">Trụ sợ chính </label>
                                            <textarea name="address" class="form-control " rows="3" placeholder="Trụ sở chính">{{ $config->address }}</textarea>
                                        </div>

                                        <div class="form-group mb-2 col-lg-12">
                                            <label for="hotline" class="form-label">Hotline</label>
                                            <input value="{{ $config->hotline ?? '' }}" id="hotline"
                                                name="hotline"class="form-control" type="text" placeholder="Hotline">
                                        </div>

                                        <div class="form-group mb-2 col-lg-12">
                                            <label for="salesPhone" class="form-label">Tư vấn bán hàng </label>
                                            <input value="{{ $config->salesPhone ?? '' }}" id="salesPhone"
                                                name="salesPhone"class="form-control" type="text"
                                                placeholder="Tư vấn bán hàng">
                                        </div>

                                        <div class="form-group mb-2 col-lg-12">
                                            <label for="carePhone" class="form-label">Chăm sóc khách hành </label>
                                            <input value="{{ $config->carePhone ?? '' }}" id="carePhone"
                                                name="carePhone"class="form-control" type="text"
                                                placeholder="Chăm sóc khách hành">
                                        </div>

                                        <div class="form-group mb-2 col-lg-12">
                                            <label for="footer" class="form-label">Footer</label>
                                            <input value="{{ $config->footer ?? '' }}" id="footer"
                                                name="footer"class="form-control" type="text" placeholder="Footer">
                                        </div>
                                    </div>

                                    <div class="col-md-4 row">
                                        <div class="form-group  col-lg-12">
                                            <div class="">
                                                <label for="image" class="form-label">Logo <span
                                                        class="text-danger">*</span></label>
                                                <img class="img-fluid img-thumbnail w-100" id="show_logo"
                                                    style="cursor: pointer;"
                                                    src="{{ showImage($config->logo ?? '') }}" alt=""
                                                    onclick="document.getElementById('logo').click();">
                                                <input type="file" name="logo" id="logo"
                                                    class="form-control d-none" accept="image/*"
                                                    onchange="previewImage(event, 'show_logo')">
                                            </div>
                                        </div>

                                        <div class="form-grou col-lg-12">
                                            <div class="">
                                                <label for="icon" class="form-label">Icon <span
                                                        class="text-danger">*</span></label>
                                                <img class="img-fluid img-thumbnail w-100" id="show_icon"
                                                    style="cursor: pointer;;"
                                                    src="{{ showImage($config->icon ?? '') }}" alt=""
                                                    onclick="document.getElementById('icon').click();">
                                                <input type="file" name="icon" id="icon"
                                                    class="form-control d-none" accept="image/*"
                                                    onchange="previewImage(event, 'show_icon')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label for="banner_login" class="form-label">Banner đăng ký <span
                                                    class="text-danger"></span></label>
                                            <img class="img-fluid img-thumbnail w-100" id="show_banner_login"
                                                style="cursor: pointer;"
                                                src="{{ showImage($config->banner_login ?? '') }}" alt=""
                                                onclick="document.getElementById('banner_login').click();">
                                            <input type="file" name="banner_login" id="banner_login"
                                                class="form-control d-none" accept="image/*"
                                                onchange="previewImage(event, 'show_banner_login')">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/image-uploader.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css">
    <style>
        .col-lg-9 .card {
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important;
            border: 1px solid #eee;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('backend/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/tagify.min.js') }}"></script>
    <script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('backend/assets/js/image-uploader.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush
