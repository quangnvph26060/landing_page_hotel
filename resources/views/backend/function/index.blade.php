@extends('backend.layouts.master')

@section('content')
    @include('backend.layouts.partials.breadcrumb', ['page' => 'Quản lý chức năng'])

    <div class="row">
        <!-- Form Thêm/Sửa Bài Viết -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Thêm/Sửa Bài Viết</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#postModal">
                        Tiêu đề
                    </button>

                    <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form class="modal-content" method="post" action="{{ route('admin.update.title') }}">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="postModalLabel">Tiêu đề</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="postTitle" class="form-label">Tiêu đề</label>
                                        <input type="text" class="form-control" id="postTitle" name="title" value="{{ $titleFunction->title ?? '' }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="postContent" class="form-label">Nội dung</label>
                                        <textarea class="form-control" id="postContent" name="content" rows="4">{{ $titleFunction->content ?? '' }}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Lưu</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form id="postForm" enctype="multipart/form-data" action="{{ route('admin.functions.store') }}">

                        <input type="hidden" name="id" id="postId">

                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề <span class="text-danger">*</span></label>
                            <input id="title" name="title" class="form-control" type="text"
                                placeholder="Nhập tiêu đề">
                            <div class="error-message text-danger"></div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Ảnh <span class="text-danger">*</span></label>
                            <img class="img-fluid img-thumbnail w-100" id="show_image"
                                style="cursor: pointer; height: 300px !important;" src="{{ showImage($post->image ?? '') }}"
                                alt="" onclick="document.getElementById('image').click();">
                            <input type="file" name="image" id="image" class="form-control d-none" accept="image/*"
                                onchange="previewImage(event, 'show_image')">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Nhập mô tả"></textarea>
                            <div class="error-message text-danger"></div>
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
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-content-center">
                    <h3 class="card-title">DANH SÁCH CHỨC NĂNG</h3>
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


@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/columns/function.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/image-uploader.min.css') }}">
    <script src="{{ asset('backend/assets/js/connectDataTable.js') }}"></script>
    <script>
        $(document).ready(function() {
             const APP_URL = "{{ config(key: 'app.url') }}";
            const api = APP_URL + "/admin/functions";
            dataTables(api, columns, 'Functions')

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
                let image = $(this).data('image'); // Ảnh từ data-image
                let description = $(this).data('description');
                let id = $(this).closest('tr').data('id'); // Lấy ID từ hàng
                $('#postForm').append('<input type="hidden" name="_method" value="PUT">');
                // Gán dữ liệu vào form
                $('#title').val(title);
                $('#description').val(description);
                $('#postId').val(id);

                // Xây dựng đường dẫn ảnh sử dụng hàm showImage
                let imageUrl = "{{ asset('storage') }}/" + image;

                // Hiển thị ảnh trong form
                $('#show_image').attr('src', imageUrl);

                // Đổi action form thành sửa
                $('#postForm').attr('action', "{{ route('admin.functions.update', '') }}/" + id);
                $('#cancelEdit').show();
                $('#cancelEdit').on('click', function() {
                    reset()
                });
            });

            function validateForm() {
                let isValid = true;
                $('.error-message').text('').hide();

                let title = $('#title').val().trim();
                let description = $('#description').val().trim();

                if (!title) {
                    $('#title').next('.error-message').text('Vui lòng nhập tiêu đề').show();
                    isValid = false;
                }

                if (!description) {
                    $('#description').next('.error-message').text('Vui lòng nhập mô tả').show();
                    isValid = false;
                }

                return isValid;
            }

            function reset() {
                $('#postForm').attr('action', "{{ route('admin.functions.store') }}");
                $('#postForm')[0].reset();
                $('#postId').val('');
                $('#show_image').attr('src', '{{ showImage('') }}');
                $('#postForm input[name="_method"]').remove();
                $('#cancelEdit').show();

            }

        })
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/dataTables.min.css') }}">
@endpush
