@extends('backend.layouts.master')


@section('content')
    @include('backend.layouts.partials.breadcrumb', [
        'page' => 'Cấu hình banner',
    ])

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link fw-bold" id="info-tab" >Banner</a>
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
        <li class="nav-item" role="presentation">
            <a class="nav-link active fw-bold" id="seo-tab" href="{{ route('admin.reason.index') }}">Lý do lựa chọn</a>
        </li>
    </ul>



    <form action="{{ route('admin.reason.store') }}" method="post" enctype="multipart/form-data" id="myForm">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" aria-labelledby="info-tab">
                                <div class="row">
                                    <div class="form-group mb-3 col-lg-12">
                                        <label for="reason" class="form-label">Lý do</label>
                                        <input id="reason" value="{{ $why->reason }}" name="reason">
                                    </div>

                                    <div class="form-group mb-3 col-lg-6">
                                        <div class="mb-3">
                                            <label for="video" class="form-label">Video 1 <span class="text-danger">*</span></label>
                                            <video id="show_video" class="w-100" style="cursor: pointer; height: 400px;" controls
                                                onclick="document.getElementById('video').click();">
                                                <source src="{{ asset('storage/'.$why->video_1_url ?? '') }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <input type="file" name="video_1_url" id="video" class="form-control d-none"
                                                accept="video/*" onchange="previewVideo(event, 'show_video')">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 col-lg-6">
                                        <div class="mb-3">
                                            <label for="video_footer" class="form-label">Video 2 <span class="text-danger">*</span></label>
                                            <video id="show_video_footer" class="w-100" style="cursor: pointer; height: 400px;" controls
                                                onclick="document.getElementById('video_footer').click();">
                                                <source src="{{ asset('storage/'.$why->video_2_url ?? '') }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            <input type="file" name="video_2_url" id="video_footer" class="form-control d-none"
                                                accept="video/*" onchange="previewVideo(event, 'show_video_footer')">
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
    <script>
        $(document).ready(function() {

            var input = document.querySelector('#reason');
            var tagify = new Tagify(input, {
                maxTags: 10,
                placeholder: "Nhập reason...",
            });
        });
    </script>
    <script>
        function previewVideo(event, videoId) {
            const file = event.target.files[0];
            const video = document.getElementById(videoId);

            if (file) {
                const blobURL = URL.createObjectURL(file);
                video.querySelector('source').src = blobURL;
                video.load();
            }
        }
        </script>

@endpush
