@extends('backend.layouts.master')

@section('content')
    @include('backend.layouts.partials.breadcrumb', [
        'page' => 'Danh sách hướng dẫn',
    ])

    <div class="d-flex ">
        <div class="category-list">
            <div class="d-flex align-items-center justify-content-between mb-2" style=" gap: 10px;">
                <h3>Danh mục</h3> <button class="btn btn-primary btn-sm " id="btnAddCategory" type="button"
                    data-bs-toggle="modal" style="    margin-right: 6px;" data-bs-target="#categoryModal">
                    + Thêm danh mục
                </button>
            </div>
            <div id="categoryContainer"></div>

        </div>

        <!-- BÀI VIẾT -->
        <div class="post-list">
            <div class="d-flex align-items-center justify-content-between mb-2" style=" gap: 10px;">
                <h3 class="mt-0 mb-0">Bài viết</h3> <button class="btn btn-primary btn-sm" id="btnAddPost" type="button"
                    data-bs-toggle="modal" data-bs-target="#postModal">
                    + Thêm bài viết
                </button>
            </div>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Thứ tự</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Hành động</th>
                    </tr>
                </thead>

                <tbody id="postContainer">
                    <!-- Bài viết sẽ hiển thị ở đây -->
                </tbody>
            </table>

        </div>
    </div>

    <!-- Modal Thêm Danh Mục -->
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryModalLabel">Thêm danh mục mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
                </div>
                <input type="hidden" id="editingCategoryId" value="">

                <div class="modal-body">
                    <label for="newCategoryName" class="form-label required">Tên danh mục:</label>
                    <input type="text" class="form-control" id="newCategoryName" />
                    <span id="newCategoryName_error" style="color:red"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary btn-add-category">Thêm</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Thêm Bài Viết -->
    <div class="modal fade" id="postModal" aria-labelledby="postModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="
    width: 1029px;
">
                <div class="modal-header">
                    <h5 class="modal-title" id="postModalLabel">Thêm bài viết mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="hidden" id="editingPostId">
                        <label for="newPostTitle" class="form-label required">Tiêu đề:</label>
                        <input type="text" class="form-control" id="newPostTitle" />
                        <span class="newPostTitle_error text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="newPostContent" class="form-label required">Nội dung:</label>
                        <textarea class="form-control ckeditor" id="description" rows="4"></textarea>
                        <span class="description_error text-danger"></span>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="newPostStatus" class="form-label">Trạng thái:</label>
                        <select class="form-select" id="newPostStatus">
                            <option value="Hoạt động">Hoạt động</option>
                            <option value="Không hoạt động">Không hoạt động</option>
                        </select>
                    </div> --}}
                    <div class="mb-3">
                        <label for="postCategorySelect" class="form-label">Chọn danh mục:</label>
                        <select class="form-select" id="postCategorySelect"></select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary btn-add-post">Thêm</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/columns/support.js') }}"></script>
    <script src="{{ asset('backend/assets/js/connectDataTable.js') }}"></script>

    <script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
    <script>
        document.addEventListener('focusin', function(e) {
            if (e.target.closest('.cke_dialog, .cke')) {
                e.stopImmediatePropagation();
            }
        });





        $(document).ready(function() {
            const APP_URL = "{{ config('app.url') }}";
            const api = APP_URL + "/admin/support";
            // ckeditor('description')
            dataTables(api, columns, 'Support')
        })
    </script>

    <script>
        $(document).ready(function() {
            let categories = [];

            let currentCategoryId = null;

            // Hàm lấy danh mục bằng ajax
            function loadCategories() {
                $.ajax({
                    url: "{{ route('admin.guide.categories') }}", // bạn thay đúng url route blade ở đây
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {


                        categories = data.map(cat => ({
                            id: cat.id,
                            name: cat.name,
                        }));

                        // Nếu chưa chọn category nào thì mặc định chọn category đầu tiên
                        if (!currentCategoryId && categories.length > 0) {
                            currentCategoryId = categories[0].id;
                        }

                        renderCategories();
                        if (currentCategoryId) renderPosts(currentCategoryId);
                    },
                    error: function(xhr, status, error) {
                        alert('Lỗi khi tải danh mục: ' + error);
                    }
                });
            }

            function renderCategories() {
                const container = document.getElementById('categoryContainer');
                container.innerHTML = '';

                const parentCats = categories.filter(c => !c.parentId);

                parentCats.forEach(parent => {
                    container.appendChild(createCategoryElement(parent));

                    const children = categories.filter(c => c.parentId === parent.id);
                    children.forEach(child => {
                        let childEl = createCategoryElement(child, true);
                        container.appendChild(childEl);
                    });
                });

                updatePostCategorySelect();
            }

            function updatePostCategorySelect() {
                const select = document.getElementById('postCategorySelect');
                select.innerHTML = '';

                const parentCats = categories.filter(c => !c.parentId);
                parentCats.forEach(parent => {
                    let option = document.createElement('option');
                    option.value = parent.id;
                    option.textContent = parent.name;
                    select.appendChild(option);

                    const children = categories.filter(c => c.parentId === parent.id);
                    children.forEach(child => {
                        let optChild = document.createElement('option');
                        optChild.value = child.id;
                        optChild.textContent = '— ' + child.name;
                        select.appendChild(optChild);
                    });
                });

                select.value = currentCategoryId || (categories.length ? categories[0].id : '');
            }

            function createCategoryElement(category, isChild = false) {
                const div = document.createElement('div');
                div.className = 'category-item' + (isChild ? ' child-category' : '');
                div.setAttribute('data-id', category.id);

                const nameSpan = document.createElement('span');
                nameSpan.textContent = category.name + ' ';
                div.appendChild(nameSpan);

                if (category.id === currentCategoryId) {
                    div.classList.add('active');
                }

                const actions = document.createElement('div');
                actions.className = 'category-actions';

                const icon = document.createElement('span');
                icon.textContent = '⋮';
                actions.appendChild(icon);

                const menu = document.createElement('div');
                menu.className = 'action-menu';
                menu.style.display = 'none';
                menu.innerHTML = `
        <button data-id="${category.id}" class="btn-edit-category">Sửa</button>
        <button data-id="${category.id}" class="btn-delete-category">Xóa</button>
    `;
                actions.appendChild(menu);

                // Khi click vào dấu ⋮ thì mở menu, ngăn việc click div chọn category
                icon.onclick = (e) => {
                    e.stopPropagation();
                    // Ẩn hết menu khác
                    document.querySelectorAll('.action-menu').forEach(m => m.style.display = 'none');
                    menu.style.display = 'block';
                };

                // Click ngoài menu thì ẩn menu
                document.addEventListener('click', () => {
                    menu.style.display = 'none';
                });

                // Click vào div chọn category (ngoại trừ các nút menu)
                div.onclick = (e) => {
                    if (
                        e.target.closest('.btn-edit-category') ||
                        e.target.closest('.btn-delete-category') ||
                        e.target.closest('.action-menu')
                    ) return;

                    currentCategoryId = category.id;
                    renderCategories();
                    renderPosts(category.id);
                };

                div.appendChild(actions);

                return div;
            }

            let editingCategoryId = null;

            // Hàm thêm danh mục mới


            // Gán sự kiện mặc định cho nút Thêm (khi modal được mở để thêm mới)
            // document.querySelector('.btn-add-category').onclick = addCategoryHandler;

            // Khi bấm nút "Sửa danh mục"

            // Khi nhấn nút sửa danh mục
            $(document).on('click', '.btn-edit-category', function(e) {
                e.stopPropagation();
                const id = $(this).data('id');
                console.log(id);

                let cat = categories.find(c => c.id === id);
                if (!cat) return;
                console.log(cat.name);

                document.getElementById('editingCategoryId').value = id;

                // Mở modal
                const categoryModal = new bootstrap.Modal(document.getElementById('categoryModal'));
                categoryModal.show();

                // Set tiêu đề modal
                document.getElementById('categoryModalLabel').textContent = 'Sửa danh mục';

                // Set tên vào input
                document.getElementById('newCategoryName').value = cat.name;

                // Thay đổi nút thành "Lưu"
                const btnAdd = document.querySelector('.btn-add-category');
                btnAdd.textContent = 'Lưu';
            });
            $(document).on('click', '.btn-delete-post', function() {
                const id = $(this).data('id');
                const deletePostUrlTemplate = "{{ route('admin.deletePost', ['id' => ':id']) }}";
                const url = deletePostUrlTemplate.replace(':id', id);
                if (confirm('Bạn có chắc chắn muốn xóa bài viết này không?')) {
                    $.ajax({
                        url: url, // hoặc dùng route name với route helper nếu cần
                        type: 'DELETE',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content') // quan trọng!
                        },
                        success: function(response) {
                            loadCategories();
                            Toast.fire({
                                icon: "success",
                                title: response.message,
                            });
                        },
                        error: function() {
                            Toast.fire({
                                icon: "error",
                                title: response.message,
                            });
                        }
                    });
                }
            });

            $(document).on('click', '.btn-edit-post', function() {
                const findPostUrlTemplate = "{{ route('admin.findPost', ['id' => ':id']) }}";
                const id = $(this).data('id');
                const url = findPostUrlTemplate.replace(':id', id);
                $.ajax({
                    url: url,
                    type: 'POST', // method POST như route
                    dataType: 'json',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr(
                            'content') // thêm token CSRF nếu dùng Laravel
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            const post = response.data;

                            // Điền dữ liệu vào modal
                            $('#newPostTitle').val(post.title);

                            if (typeof CKEDITOR !== 'undefined' && CKEDITOR.instances
                                .description) {
                                CKEDITOR.instances.description.setData(post.content);
                            } else {
                                $('#description').val(post.content);
                            }
                            $('#postModalLabel').text('Cập nhật bài viết');
                            $('#postCategorySelect').val(post.category_id);
                            $('#editingPostId').val(post.id);

                            // Mở modal
                            const postModal = new bootstrap.Modal(document.getElementById(
                                'postModal'));
                            postModal.show();

                            // Đổi nút Thêm thành Lưu
                            $('.btn-add-post').text('Lưu');
                        } else {
                            alert('Không lấy được dữ liệu bài viết.');
                        }
                    },
                    error: function() {
                        alert('Không lấy được dữ liệu bài viết.');
                    }
                });
            });

            // Khi nhấn nút Thêm hoặc Lưu trong modal
            document.getElementById('btnAddPost').addEventListener('click', function() {
                $('#postModalLabel').text('Thêm bài viết mới');
                $('#newPostTitle').val('');
                $('.btn-add-post').text('Thêm');
                if (typeof CKEDITOR !== 'undefined' && CKEDITOR.instances
                    .description) {
                    CKEDITOR.instances.description.setData('');
                } else {
                    $('#description').val('');
                }
            });

            document.getElementById('btnAddCategory').addEventListener('click', function() {
                editingCategoryId = null;

                // Reset tiêu đề modal
                document.getElementById('categoryModalLabel').textContent = 'Thêm danh mục mới';

                // Reset input
                document.getElementById('newCategoryName').value = '';

                // Reset lỗi
                document.getElementById('newCategoryName_error').innerText = '';

                // Reset nút thêm
                const btnAdd = document.querySelector('.btn-add-category');
                btnAdd.textContent = 'Thêm';

                // Gán lại sự kiện thêm mới

            });



            // Sự kiện xóa category
            $(document).on('click', '.btn-delete-category', function(e) {
                e.stopPropagation();
                const id = $(this).data('id');
                const findPostUrlTemplate = "{{ route('admin.deleteCategory', ['id' => ':id']) }}";
              
                const url = findPostUrlTemplate.replace(':id', id);
                if (!confirm('Bạn có chắc muốn xoá danh mục này không?')) {
                    return; // nếu người dùng không đồng ý thì dừng
                }

                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr(
                            'content') // CSRF token cần thiết trong Laravel
                    },
                    success: function(response) {
                        loadCategories();
                            Toast.fire({
                                icon: "success",
                                title: data.message,
                            });
                        renderCategories(); 
                    },
                    error: function(xhr) {
                         Toast.fire({
                                icon: "error",
                                title: data.message,
                            });
                    }
                });

                renderCategories();
            });



            function renderPosts(catId) {

                const container = $('#postContainer');
                container.html(`<tr><td colspan="5" class="text-center">Đang tải dữ liệu...</td></tr>`);

                $.ajax({
                    url: "{{ route('admin.guide') }}",
                    method: 'GET',
                    data: {
                        category_id: catId
                    },
                    dataType: 'json',
                    success: function(data) {
                        container.html('');

                        if (!data || data.length === 0) {
                            container.html(
                                `<tr><td colspan="5" class="text-center">Chưa có bài viết</td></tr>`
                            );
                            return;
                        }

                        data.forEach((post, index) => {
                            const actionMenuId = `postActionMenu_${catId}_${post.id}`;
                            const tr = $(`
                    <tr>
                        <td>${index + 1}</td>
                        <td>${post.title}</td>
                        <td>đường dẫn</td>
                        <td style="position: relative;">
                            <div class="post-actions" style="cursor:pointer; font-size:18px;">⋮</div>
                            <div id="${actionMenuId}" class="action-menu" style="position:absolute; top: 25px; right: 0; display:none; width: 100px; background:#fff; border:1px solid #ccc; border-radius:4px; z-index: 99;">
                                <button  data-id="${post.id}" class="btn-edit-post">Sửa</button>
                                <button data-id="${post.id}" class="btn-delete-post">Xóa</button>
                            </div>
                        </td>
                    </tr>
                `);

                            container.append(tr);

                            const actionsBtn = tr.find('.post-actions');
                            const menu = tr.find('.action-menu');

                            actionsBtn.on('click', function(e) {
                                e.stopPropagation();
                                $('.post-list .action-menu').hide();
                                menu.show();
                            });
                        });

                        $(document).on('click', function() {
                            $('.post-list .action-menu').hide();
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Lỗi khi tải bài viết:', error);
                        container.html(
                            `<tr><td colspan="5" class="text-center text-danger">Không thể tải bài viết</td></tr>`
                        );
                    }
                });
            }






            function updatePostCategorySelect() {
                const select = document.getElementById('postCategorySelect');
                select.innerHTML = '';

                const parentCats = categories.filter(c => !c.parentId);
                parentCats.forEach(parent => {
                    let option = document.createElement('option');
                    option.value = parent.id;
                    option.textContent = parent.name;
                    select.appendChild(option);

                    const children = categories.filter(c => c.parentId === parent.id);
                    children.forEach(child => {
                        let optChild = document.createElement('option');
                        optChild.value = child.id;
                        optChild.textContent = '— ' + child.name;
                        select.appendChild(optChild);
                    });
                });

                // Set default to currentCategoryId or first category
                select.value = currentCategoryId || (categories.length ? categories[0].id : '');
            }

            $(document).on('click', '.btn-add-category', function() {
                const nameInput = document.getElementById('newCategoryName');
                const errorSpan = document.getElementById('newCategoryName_error');
                const name = nameInput.value.trim();
                const editingId = document.getElementById('editingCategoryId').value;
                errorSpan.innerText = '';

                if (name === '') {
                    errorSpan.innerText = 'Tên danh mục không được để trống.';
                    nameInput.focus();
                    return; // Không tiếp tục nếu không hợp lệ
                }

                $.ajax({
                    url: "{{ route('admin.add.guide.categories') }}", // bạn thay đúng url route blade ở đây
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        id: editingId ? editingId : null,
                        name: name,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        if (data.status == 'success') {
                            const categoryModal = bootstrap.Modal.getInstance(document
                                .getElementById('categoryModal'));
                            categoryModal.hide();
                            document.getElementById('newCategoryName').value = '';

                            loadCategories();
                            Toast.fire({
                                icon: "success",
                                title: data.msg,
                            });
                        }


                    },
                    error: function(xhr, status, error) {
                        Toast.fire({
                            icon: "error",
                            title: xhr.responseJSON.message,
                        });
                    }
                });

            });
            $(document).on('click', '.btn-add-post', function() {

                const titleInput = document.getElementById('newPostTitle');
                const contentInput = document.getElementById('description');
                const title = titleInput.value.trim();
                const content = CKEDITOR.instances.description.getData().trim();
                const editingId = document.getElementById('editingPostId').value;
                const catId = parseInt(document.getElementById('postCategorySelect').value);

                const titleError = document.querySelector('.newPostTitle_error');
                const contentError = document.querySelector('.description_error');

                // Reset lỗi
                titleError.textContent = '';
                contentError.textContent = '';
                titleInput.classList.remove('is-invalid');
                contentInput.classList.remove('is-invalid');

                let hasError = false;

                if (!title) {
                    titleError.textContent = 'Vui lòng nhập tiêu đề bài viết.';
                    titleInput.classList.add('is-invalid');
                    hasError = true;
                }

                if (!content) {
                    contentError.textContent = 'Vui lòng nhập nội dung bài viết.';
                    contentInput.classList.add('is-invalid');
                    hasError = true;
                }

                if (hasError) return;

                $.ajax({
                    url: "{{ route('admin.add.addPost') }}",
                    method: "POST",
                    dataType: "json",
                    data: {
                        id: editingId ? editingId : null,
                        title: title,
                        content: content,
                        category_id: catId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        if (res.status === 'success') {
                            Toast.fire({
                                icon: 'success',
                                title: res.msg || 'Thêm bài viết thành công!'
                            });


                            titleInput.value = '';
                            CKEDITOR.instances.description.setData('');

                            // Đóng modal
                            const postModal = bootstrap.Modal.getInstance(document
                                .getElementById('postModal'));
                            postModal.hide();
                            loadCategories();

                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: res.msg || 'Đã xảy ra lỗi.'
                            });
                        }
                    },
                    error: function(xhr) {
                        const errors = xhr.responseJSON?.errors;
                        if (errors) {
                            if (errors.title) {
                                titleError.textContent = errors.title[0];
                                titleInput.classList.add('is-invalid');
                            }
                            if (errors.content) {
                                contentError.textContent = errors.content[0];
                                contentInput.classList.add('is-invalid');
                            }
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: xhr.responseJSON?.message || 'Lỗi máy chủ!'
                            });
                        }
                    }
                });
            });
            loadCategories();
        });
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/dataTables.min.css') }}">
@endpush

<style scoped>
    .category-list {
        width: 350px;
        border-right: 1px solid #ccc;
    }

    .category-item {
        position: relative;
        padding: 8px 10px;
        margin-bottom: 5px;
        background-color: #f5f5f5;
        border-radius: 5px;
        cursor: pointer;
    }

    .category-item.active {
        background-color: #d0ebff;
        font-weight: bold;
    }

    .category-actions {
        position: absolute;
        top: 8px;
        right: 10px;
        cursor: pointer;
        font-size: 18px;
    }

    label.required:after {
        content: "*";
        color: #dc3545 !important;
        margin-left: 2px;
    }

    .action-menu {
        display: none;
        position: absolute;
        top: 25px;
        right: 0;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        z-index: 99;
        width: 100px;
    }


    .action-menu button {
        width: 100%;
        padding: 6px;
        background: none;
        border: none;
        text-align: left;
        cursor: pointer;
    }

    .action-menu button:hover {
        background-color: #eee;
    }

    .post-list {
        flex: 1;
    }

    .post-list h3 {
        margin-bottom: 10px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 6px 10px;
        text-align: left;
        vertical-align: top;
    }

    th {
        background-color: #f0f0f0;
    }

    .child-category {
        padding-left: 20px;
        font-style: italic;
        font-size: 0.9em;
    }
</style>
