@extends('backend.layouts.master')


@section('content')
    @include('backend.layouts.partials.breadcrumb', [
       'page' => isset($post)? 'Sửa bài viết' : 'Thêm bài viết',
        'href' => route('admin.posts.index'),
    ])

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active fw-bold" id="info-tab" data-bs-toggle="tab" href="#info" role="tab"
                aria-controls="info" aria-selected="true">Thông Tin Sản Phẩm</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link fw-bold" id="seo-tab" data-bs-toggle="tab" href="#seo" role="tab"
                aria-controls="seo" aria-selected="false">Cấu Hình Seo</a>
        </li>
    </ul>

    @php
        $action = isset($post) ? route('admin.posts.update', $post) : route('admin.posts.store');
    @endphp

    <form action="{{ $action }}" method="post" enctype="multipart/form-data" id="myForm">
        {{-- @csrf --}}
        @isset($post)
            @method('PUT')
        @endisset
        {{-- @csrf --}}
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="info" role="tabpanel"
                                aria-labelledby="info-tab">
                                <div class="row">
                                    <div class="form-group mb-3 col-lg-6">
                                        <label for="name" class="form-label">Tên bài viết<span
                                                class="text-danger">*</span></label>
                                        <input value="{{ $post->title ?? '' }}" oninput="convertSlug('#title', '#slug')"
                                            id="title" name="title" class="form-control" type="text"
                                            placeholder="Tên bài viết">
                                    </div>

                                    <div class="form-group mb-3 col-lg-6">
                                        <label for="slug" class="form-label">Đường dẫn thân thiện</label>
                                        <i class="fas fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Không nhập sẽ lấy theo tên"></i>
                                        <input id="slug" value="{{ $post->slug ?? '' }}" name="slug"
                                            class="form-control" type="text" placeholder="Đường dẫn thân thiện">
                                    </div>

                                    <div class="form-group mb-3 col-lg-12">
                                        <label for="name" class="form-label">Địa chỉ<span
                                                class="text-danger">*</span></label>
                                        <input value="{{ $post->address ?? '' }}"
                                            id="address" name="address" class="form-control" type="text"
                                            placeholder="Địa chỉ">
                                    </div>


                                    <div class="form-group mb-3 col-lg-12">
                                        <label for="slug" class="form-label">Mô tả chi tiết</label>
                                        <textarea name="description" class="form-control ckeditor" id="description" placeholder="Mô tả ">{!! $post->description ?? '' !!}</textarea>
                                    </div>




                                    {{-- <div class="form-group mb-3">
                                        <label for="tags" class="form-label">Tags</label>
                                        <input id="tags" class="form-control" value="{{ $post->tags ?? '' }}"
                                            name="tags">
                                    </div> --}}
                                </div>
                            </div>

                            <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                                <div class="form-group mb-3">
                                    <label for="title_seo" class="form-label">Tiêu đề seo</label>
                                    <input type="text" value="{{ $post->title_seo ?? '' }}"
                                        placeholder="Tiêu đề seo" id="title_seo" name="title_seo" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description_seo" class="form-label">Mô tả seo</label>
                                    <textarea name="description_seo" id="description_seo" cols="30" rows="4" class="form-control ckeditor"
                                        placeholder="Mô tả seo">{{ $post->description_seo ?? '' }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="keyword_seo" class="form-label">Từ khóa seo</label>
                                    <input id="keyword_seo" value="{{ $post->keyword_seo ?? '' }}"
                                        name="keyword_seo">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Trạng thái</h5>
                    </div>

                    <div class="card-body">
                        <select name="status" id="status" class="form-select">
                            <option value="1" @selected(($post->status ?? 1) == 1)>Xuất bản</option>
                            <option value="2" @selected(($post->status ?? '') == 2)>Chưa xuất bản</option>
                        </select>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Loại bài viết</h5>
                    </div>

                    <div class="card-body">
                        <select name="status" id="status" class="form-select">
                            <option value="post" @selected(($post->type ?? 'post') == 'post')>Tin tức</option>
                            <option value="customer" @selected(($post->type ?? '') =='customer')>Khách hàng</option>
                        </select>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Ảnh </h5>
                    </div>

                    <div class="card-body">
                        <img class="img-fluid img-thumbnail w-100" id="show_image" style="cursor: pointer; "
                            src="{{ showImage($post->image ?? '') }}" alt=""
                            onclick="document.getElementById('image').click();">
                        <input type="file" name="image" id="image" class="form-control d-none"
                            accept="image/*" onchange="previewImage(event, 'show_image')">
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button id="submitBtn" class="btn btn-primary btn-sm d-flex align-items-center gap-2" type="submit">
                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        <i class="fas fa-save me-1"></i> Lưu
                    </button>
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

    <script>
        $(document).ready(function() {

            var input = document.querySelector('#keyword_seo');
            var tagify = new Tagify(input, {
                maxTags: 10,
                placeholder: "Nhập từ khóa...",
            });

            var input_tags = document.querySelector('#tags');
            var tagify_tags = new Tagify(input_tags, {
                maxTags: 10,
                placeholder: "Nhập tags...",
            });

            ckeditor('description')
            ckeditor('description_seo')

            submitForm('#myForm', function(response) {
                window.location.href = "{{ route('admin.posts.index') }}"
            });


            $('.input-images').imageUploader({
                preloaded: preloaded, // Ảnh đã có sẵn
                imagesInputName: 'images', // Tên input khi upload ảnh mới
                preloadedInputName: 'old', // Tên input chứa ảnh cũ
                maxSize: 2 * 1024 * 1024, // Giới hạn ảnh 2MB
                maxFiles: 15, // Tối đa 15 ảnh
            });

            // formatDataInput('price');
        });
    </script>
@endpush
