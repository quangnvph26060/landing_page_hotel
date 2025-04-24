@extends('backend.layouts.master')


@section('content')
    @include('backend.layouts.partials.breadcrumb', [
        'page' => 'Hỗ trợ',
    ])

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link  fw-bold" id="info-tab" href="{{ route('admin.banners.index') }}">Banner</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link  fw-bold" id="seo-tab" href="{{ route('admin.highlights.index') }}">Đặc điểm nổi bật</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link active fw-bold" id="seo-tab" href="#">Hỗ trợ</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link fw-bold" id="seo-tab" href="{{ route('admin.configs.index') }}">Thông tin công ty</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link fw-bold" id="seo-tab" href="{{ route('admin.seo.index') }}">Seo</a>
        </li>
    </ul>



    <div class="card-body" style="background: #ffffff !important;">
        <div class="row">
            <!-- Form Thêm/Sửa Bài Viết -->
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">Thêm/Sửa Bài Viết</h5>
                        </div>

                        <form id="postForm" enctype="multipart/form-data" action="{{ route('admin.technologies.store') }}">

                            <input type="hidden" name="id" id="postId">
                            <label for="title" class="form-label">Icon </label>
                            <div class=" mb-3">
                                <input type="text" class="form-control iconpicker-input" name="icon" id="icon"
                                    placeholder="Nhập để tìm icon...">
                                <div class="error-message text-danger"></div>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Tiêu đề </label>
                                <input id="title" name="title" class="form-control" type="text"
                                    placeholder="Nhập tiêu đề">
                                <div class="error-message text-danger"></div>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Mô tả</label>
                                <textarea name="description" class="form-control ckeditor" id="description" placeholder="Nhập mô tả"></textarea>
                                {{-- <div class="error-message text-danger"></div> --}}
                            </div>


                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" id="save">Lưu</button>
                                <button type="button" id="cancelEdit" style="display: none"
                                    class="btn btn-secondary ms-2">Hủy</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <!-- Danh sách bài viết -->
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-content-center">
                        <h3 class="card-title">DANH SÁCH </h3>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="display" style="width:100%">
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/dataTables.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css">
    <style>
        .col-lg-9 .card {
            border-top-left-radius: 0 !important;
            border-top-right-radius: 0 !important;
            border: 1px solid #eee;
        }

        .cke_notification {
            display: none !important;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js">
    </script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script src="{{ asset('backend/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/columns/technologie.js') }}"></script>
    <script src="{{ asset('backend/assets/js/connectDataTable.js') }}"></script>

    <script>
        $(document).ready(function() {
            const api = "https://fasthotel.vn/admin/technologies"
            dataTables(api, columns, 'Technology');

            $('#save').click(function(event) {

                if (!validateForm()) {
                    event.preventDefault();
                    return; // Dừng nếu có lỗi
                }
                submitForm('#postForm', function(event) {
                    $('#myTable').DataTable().ajax.reload(); // Reload bảng sau khi lưu
                    reset();
                })
            })

            $(document).on('click', '.edit', function() {
                let title = $(this).data('title');
                let icon = $(this).data('icon');
                let description = $(this).data('description');
                let id = $(this).closest('tr').data('id');
                $('#postForm').append('<input type="hidden" name="_method" value="PUT">');
                // Gán dữ liệu vào form
                $('#title').val(title);
                CKEDITOR.instances['description'].setData(`${description}`);
                $('#icon').val(icon);
                $('#postId').val(id);


                $('#postForm').attr('action', "{{ route('admin.technologies.update', '') }}/" + id);
                $('#cancelEdit').show();
                $('#cancelEdit').on('click', function() {
                    reset()
                });
            });

            function validateForm() {
                console.log(1);
                let isValid = true;
                $('.error-message').text('').hide();

                let title = $('#title').val().trim();
                let icon = $('#icon').val().trim();

                if (!title) {
                    $('#title').next('.error-message').text('Vui lòng nhập tiêu đề').show();
                    isValid = false;
                }

                if (!icon) {
                    $('#icon').next('.error-message').text('Vui lòng nhập icon').show();
                    isValid = false;
                }

                return isValid;
            }

            function reset() {
                $('#postForm').attr('action', "{{ route('admin.technologies.store') }}");
                $('#postForm')[0].reset();
                $('#postId').val('');
                $('#title').val('');
                CKEDITOR.instances['description'].setData('');
                $('#icon').val('');
                $('#postForm input[name="_method"]').remove();
                $('#cancelEdit').hide();

            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            function initIconPicker() {
                $('.iconpicker-input').iconpicker({
                    placement: 'bottom',
                    animation: false,
                    search: true,
                    hideOnSelect: true,
                    inputSearch: true,
                }).on('iconpickerSelected', function(event) {
                    $(this).val(event.iconpickerValue);
                });

                $('.iconpicker-input').on('focus', function() {
                    $(this).iconpicker('show');
                });
            }
            initIconPicker();

        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (typeof CKEDITOR !== 'undefined') {
                CKEDITOR.replace('description', {
                    height: 140, // Chiều cao của editor
                    language: 'vi' // Ngôn ngữ Tiếng Việt
                });
            } else {
                console.error("CKEditor chưa được tải!");
            }
        });
    </script>
@endpush
