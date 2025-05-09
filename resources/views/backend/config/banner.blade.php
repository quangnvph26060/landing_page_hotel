@extends('backend.layouts.master')


@section('content')
    @include('backend.layouts.partials.breadcrumb', [
        'page' => 'Cấu hình banner',
    ])

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active fw-bold" id="info-tab" >Banner</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link fw-bold" id="seo-tab" href="{{ route('admin.highlights.index') }}">Đặc điểm nổi bật</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link fw-bold" id="seo-tab" href="{{ route('admin.technologies.index') }}">Hỗ trợ</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link fw-bold" id="seo-tab" href="{{ route('admin.configs.index') }}">Thông tin công ty</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link fw-bold" id="seo-tab" href="{{ route('admin.seo.index') }}">Seo</a>
        </li>
    </ul>



    <form action="{{ route('admin.banners.store') }}" method="post" enctype="multipart/form-data" id="myForm">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" aria-labelledby="info-tab">
                                <div class="row">

                                    <div class="form-group mb-3 col-lg-12">
                                        <label for="name" class="form-label">Tiêu đề banner<span
                                                class="text-danger">*</span></label>
                                        <input value="{{ $banner->title ?? '' }}"
                                            id="title" name="title" class="form-control" type="text"
                                            placeholder="Tên bài viết">
                                    </div>

                                    <div class="form-group mb-3 col-lg-12">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Ảnh <span
                                                    class="text-danger">*</span></label>
                                            <img class="img-fluid img-thumbnail w-100" id="show_image"
                                                style="cursor: pointer; height: 400px !important;"
                                                src="{{ showImage($banner->image ?? '') }}" alt=""
                                                onclick="document.getElementById('image').click();">
                                            <input type="file" name="image" id="image" class="form-control d-none"
                                                accept="image/*" onchange="previewImage(event, 'show_image')">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 col-lg-12">
                                        <div class="mb-3">
                                            <label for="image_footer" class="form-label">Banner Footer<span
                                                    class="text-danger">*</span></label>
                                            <img class="img-fluid img-thumbnail w-100" id="show_image_footer"
                                                style="cursor: pointer; height: 400px !important;"
                                                src="{{ showImage($banner->image_footer ?? '') }}" alt=""
                                                onclick="document.getElementById('image_footer').click();">
                                            <input type="file" name="image_footer" id="image_footer" class="form-control d-none"
                                                accept="image/*" onchange="previewImage(event, 'show_image_footer')">
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
@endpush
