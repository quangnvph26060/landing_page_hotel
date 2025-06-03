<div class="header header-transparent">
    <div class="container-wrap container-fluid">
        <nav class="navbar navbar-expand-xl fixed-top">
            <div class="container-fluid p-0">
                <a href="/" class="navbar-brand logo cursor-pointer">
                    <h2 class="mb-0"><img width="370" src="{{ showImage($config->logo) }}"
                            alt="{{ $config->company }}"></h2>
                </a>
                <button class="navbar-toggler" title="Menu"><i class="fa-solid fa-bars"></i></button>

                <div class="bg-overflow"></div>
                <div class="navbar-header offcanvas-end offcanvas">
                    <div class="offcanvas-header"><a>
                            <a href="/" class="logo-close">
                                <h2 class="mb-0"><img width="160" height="auto"
                                        src="{{ showImage($config->logo) }}" alt="{{ $config->company }}"></h2>
                            </a></a>
                        <button type="button" class="nav-close navbar-close" style="font-size: 25px !important;">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body pt-0">
                        <ul class="navbar-header-content navbar-nav">
                            <li class="nav-item nav-item-product">
                                <a class="nav-link">Tính năng</a>
                            </li>

                            <li class="nav-item nav-item-customer">
                                <a class="nav-link">Khách hàng</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('service') }}"
                                    class="nav-link {{ Request::is('dich-vu') ? 'nav-link-active' : '' }}"> Bảng giá</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('suport') }}"
                                    class="nav-link {{ Request::is('ho-tro') ? 'nav-link-active' : '' }}"> Hỗ trợ </a>
                            </li>
                            <li class="nav-item nav-item-blog">
                                <a href="{{ route('post') }}"
                                    class="nav-link {{ Request::is('tin-tuc*') ? 'nav-link-active' : '' }}"> Tin tức</a>
                            </li>
                            <li class="nav-item nav-item-blog">
                                <a class="nav-link ">Về Fasthotel</a>
                            </li>
                            <li>
                                <div class="registerandlogin">
                                    <ul class="w-100">
                                        <li class="nav-item header-register">
                                            <a class="btn btn-sm" style="color: #000 !important; border: 1px solid #000"
                                                data-bs-toggle="modal" data-bs-target="#loginModal">
                                                Đăng nhập
                                            </a>
                                        </li>

                                        <li class="nav-item header-login login"><a href="{{ route('register') }}"
                                                class="btn  btn-sm"
                                                style="background-color: #ff0100 !important ; color: #ffff">Đăng ký</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!-- Modal -->

                    </div>
                </div>
            </div>
        </nav>

    </div>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0" style="font-size: 16px">Đăng nhập tài khoản FastHotel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng" style="display: flex;align-items: center">x</button>
            </div>

            <div class="mb-3 input-group subdomain-input">
                <input type="text" class="form-control" style="height: 40px ;"
                    placeholder="Địa chỉ truy cập khách sạn / Homestay">
                <span class="input-group-text" style="padding: 0px 20px">fasthotel.vn</span>
            </div>

            <p class="mb-3">
                Bạn chưa có gian hàng trên FastHotel?
                <a href="{{ route('register') }}" class="text-primary text-decoration-none">Dùng thử miễn phí</a>
            </p>

            <button class="custom-btn w-100 box-popup-register btn" style="background: #ff0100">Vào cửa hàng</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .modal-content {
        border-radius: 12px;
        padding: 24px;
        line-height: 40px;
    }

    .form-control::placeholder {
        color: #ccc;
    }

    .custom-btn {
        border: none;
        color: #fff;
        padding: 10px 24px;
        border-radius: 30px;
        font-weight: 500;
    }

    .subdomain-input input {
        border-right: none;
        font-size: 15px;
    }

    .subdomain-input span {
        border-left: none;
        background-color: #f1f1f1;
        font-size: 15px;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const input = document.querySelector('.subdomain-input input');
        const button = document.querySelector('.box-popup-register');

        button.addEventListener('click', function() {
            const subdomain = input.value.trim();

            if (!subdomain) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Thiếu thông tin',
                    text: 'Vui lòng nhập địa chỉ cửa hàng!',
                    confirmButtonText: 'OK'
                });
                return;
            }

            const url = `https://${subdomain}.fasthotel.vn`;

            window.open(url, '_blank');
        });
    });
</script>
