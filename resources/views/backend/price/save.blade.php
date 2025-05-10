@extends('backend.layouts.master')


@section('content')
    @include('backend.layouts.partials.breadcrumb', [
       'page' => isset($price)? 'Sửa bảng giá' : 'Thêm bảng giá',
        'href' => route('admin.prices.index'),
    ])
    @php
        $action = isset($price) ? route('admin.prices.update', $price) : route('admin.prices.store');
    @endphp

    <form action="{{ $action }}" method="post" enctype="multipart/form-data" id="myForm">
        {{-- @csrf --}}
        @isset($price)
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
                                        <label for="name" class="form-label">Tên gói<span
                                                class="text-danger">*</span></label>
                                        <input value="{{ $price->name ?? '' }}"
                                            id="name" name="name" class="form-control" type="text"
                                            placeholder="Tên gói">
                                    </div>

                                    <div class="form-group mb-3 col-lg-6">
                                        <label for="price" class="form-label">Giá gói vnd<span
                                                class="text-danger">*</span></label>
                                        <input value="{{ $price->price ?? '' }}"
                                            id="price" name="price" class="form-control" type="text"
                                            placeholder="Giá gói">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="branch_price" class="form-label">Chức năng thêm cho chi nhánh</label>
                                        <input id="branch_price" value="{{ $price->branch_price ?? '' }}"
                                            name="branch_price">
                                    </div>

                                    <div class="form-group mb-3 col-lg-12">
                                        <label for="description" class="form-label">Mô tả chi tiết</label>
                                        <textarea name="description" class="form-control ckeditor" id="description" placeholder="Mô tả ">{!! $price->description ?? '' !!}</textarea>
                                    </div>


                                    <div class="form-group mb-3">
                                        <label for="features" class="form-label">Chức năng có sẵn</label>
                                        <input id="features" value="{{ $price->features ?? '' }}"
                                            name="features">
                                    </div>

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
                        <select name="recommended" id="recommended" class="form-select">
                            <option value="true" @selected(($price->recommended ?? 'true') == 'true')>Nổi bật</option>
                            <option value="false" @selected(($price->recommended ?? '') == 'false')>Thường</option>

                        </select>
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

            var input = document.querySelector('#branch_price');
            var tagify = new Tagify(input, {
                maxTags: 20,
                placeholder: "Nhập chức năng update thêm...",
            });

            var input_tags = document.querySelector('#features');
            var tagify_tags = new Tagify(input_tags, {
                maxTags: 20,
                placeholder: "Nhập đặc điểm nổi bật...",
            });


            submitForm('#myForm', function(response) {
                window.location.href = "{{ route('admin.prices.index') }}"
            });
        });
    </script>
@endpush
