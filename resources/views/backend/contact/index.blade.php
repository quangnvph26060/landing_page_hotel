@extends('backend.layouts.master')


@section('content')
    @include('backend.layouts.partials.breadcrumb', [
        'page' => 'Hỗ trợ',
    ])

    <div class="row">
        <!-- Form Thêm/Sửa Bài Viết -->
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">Thêm/Sửa </h5>
                    </div>
                    <form id="postForm" enctype="multipart/form-data" action="{{ route('admin.contacts.store') }}">

                        <input type="hidden" name="id" id="postId">
                        <div class="mb-3">
                            <label for="title" class="form-label">Tiêu đề </label>
                            <input id="title" name="name" class="form-control" type="text"
                                placeholder="Nhập tiêu đề">
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
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/dataTables.min.css') }}">
    <style>
        th{
            text-align: start;
        }
    </style>
@endpush

@push('scripts')
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

    <script src="{{ asset('backend/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/columns/contact.js') }}"></script>
    <script src="{{ asset('backend/assets/js/connectDataTable.js') }}"></script>

    <script>
        $(document).ready(function() {
            const api = "https://fasthotel.vn/admin/contacts"
            dataTables(api, columns, 'Contact');

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
                let id = $(this).closest('tr').data('id');
                $('#postForm').append('<input type="hidden" name="_method" value="PUT">');
                $('#title').val(title);
                $('#postId').val(id);
                $('#postForm').attr('action', "{{ route('admin.contacts.update', '') }}/" + id);
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

                if (!title) {
                    $('#title').next('.error-message').text('Vui lòng nhập tiêu đề').show();
                    isValid = false;
                }

                return isValid;
            }

            function reset() {
                $('#postForm').attr('action', "{{ route('admin.contacts.store') }}");
                $('#postForm')[0].reset();
                $('#postId').val('');
                $('#title').val('');
                $('#postForm input[name="_method"]').remove();
                $('#cancelEdit').hide();

            }
        });
    </script>
@endpush
