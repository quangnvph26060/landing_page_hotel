<style>
    body {
        background: url('https://i.imgur.com/your-background.jpg') no-repeat center center;
        background-size: cover;
    }

    .form-container {
        background: linear-gradient(rgba(255, 252, 252, 0.8), rgba(255, 252, 252, 0.8)),
            url('{{ asset('frontend/image/banner_dang_ky.jpg') }}') no-repeat center center;
        background-size: cover;
        border-radius: 10px;
        padding: 20px;
        max-width: 960px;
        margin: 20px auto;
        margin-bottom: 5px !important;
        display: flex;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 0;
    }


    .left-form {
        background: linear-gradient(to bottom, #ec5358, #ec5358);
        padding: 20px;
        color: white;
        border-radius: 10px;
        flex: 40%;
        margin-right: 10px;
    }

    .left-form input {
        margin-bottom: 10px;

    }


    .right-info {
        flex: 60%;
        padding: 20px;
    }

    .info-box {
        background-color: white;
        border: 1px solid #ff0100;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .info-box i {
        font-size: 24px;
        color: #ff0100;
        margin-right: 15px;
    }

    .info-box span {
        font-weight: 500;
    }

    .left-form h5 {
        font-size: 25.5px
    }

    .left-form input {
        margin-bottom: 15px;
    }

    .right-info h5 {
        font-size: 29.5px
    }

    @media (max-width: 768px) {
        .form-container {
            flex-direction: column;
        }

        .left-form,
        .right-info {
            width: 100%;
        }
    }

    .custom-toast {
        margin-top: 80px !important;
        /* chỉnh khoảng cách top tại đây */
    }
</style>

<div style="margin-bottom: 30px">
    <div class="form-container">
        <!-- Left Form -->
        <div class="left-form">

            <h5 class="text-center fw-bold mb-4">ĐĂNG KÝ TƯ VẤN NGAY<br>ĐỂ NHẬN ƯU ĐÃI!</h5>
            <form id="consultForm" action="{{ route('register.advisories') }}" method="post">
                @csrf
                <input type="text" id="name" name="name" class="form-control form-control-lg"
                    placeholder="Họ và tên">
                <input type="email" id="email" name="email" class="form-control form-control-lg"
                    placeholder="Nhập Email">
                <input type="text" id="number_phone" name="phone" class="form-control form-control-lg"
                    placeholder="Nhập số điện thoại">
                <input type="text" id="address" name="address" class="form-control form-control-lg"
                    placeholder="Nhập địa chỉ">
                <button type="submit" class="btn-light w-100 mt-2 fw-bold form-control-lg">Đăng ký tư vấn</button>
            </form>

        </div>

        <!-- Right Information -->
        <div class="right-info">
            <h5 class="fw-bold text-danger mb-4">ĐĂNG KÝ NGAY<br>ĐỂ HƯỞNG ƯU ĐÃI HẤP DẪN</h5>
            <div class="info-box">
                <i class="fas fa-hotel"></i>
                <span>{{ $config->company }}</span>
            </div>
            <div class="info-box">
                <i class="fas fa-cogs"></i>
                <span>{{ $config->hotline }}</span>
            </div>
            <div class="info-box">
                <i class="fas fa-headset"></i>
                <span>{{ $config->salesPhone }}</span>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showAlert(message) {
        Swal.fire({
            toast: true,
            position: 'top',
            icon: 'error',
            title: message,
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            customClass: {
                popup: 'custom-toast'
            }
        });
    }
</script>

<script>
    $('#consultForm').on('submit', function(e) {
        const name = $('#name').val().trim();
        const email = $('#email').val().trim();
        const phone = $('#number_phone').val().trim();
        const address = $('#address').val().trim();

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const phoneRegex = /^(0[0-9]{9})$/;

        if (!name || !email || !phone || !address) {
            showAlert("Vui lòng điền đầy đủ thông tin.");
            e.preventDefault();
            return;
        }

        if (!emailRegex.test(email)) {
            showAlert("Email không đúng định dạng.");
            e.preventDefault();
            return;
        }

        if (!phoneRegex.test(phone)) {
            showAlert("Số điện thoại không đúng định dạng.");
            e.preventDefault();
            return;
        }
    });
</script>
