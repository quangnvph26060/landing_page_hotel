<!DOCTYPE html>
<html lang="vi" data-capo="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ $config_all ? $config_all->company : 'Quản lý khách sạn' }} </title>
    {{-- <meta name="facebook-domain-verification" content="596ckow31ceg2kaownqwu554p8p7qo">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@KiotViet">
    <meta name="twitter:title" content="KiotViet">
    <meta name="twitter:description" content="Cùng bạn làm giàu"> --}}

    <meta name="robots" content="max-image-preview:large">
    {{-- <meta name="keywords" content="phan mem quan ly ban hang, kiotviet, phan mem kiotviet"> --}}
    <meta property="og:type" content="website">
    <meta property="format-detection" content="telephone=no">
    <meta property="og:image:alt" content="{{ $config_all ? $config_all->company : 'Quản lý khách sạn' }}">
    <meta property="og:site_name" content="{{ $config_all ? $config_all->company : 'Quản lý khách sạn' }}">
    <meta property="og:image:width" content="740">
    <meta property="og:image:height" content="300">
    <meta property="fb:admins" content="n4mkut3">
    <meta property="fb:app_id" content="1138268722850522">
    <link rel="icon" type="image/png" href="{{ asset('storage/'.$config_all->icon) }}">
    {{-- <meta property="fb:pag" es content="361150274018793">
    <meta name="p:domain_verify" content="565cb621d9b2f74cd9a7917e31386206"> --}}
    <link rel="stylesheet" href="{{ asset('backend/auth/css/register.css') }}">

</head>

<body class="kiotviet-website wrap-register-desktop">
    <div id="__nuxt">

        <div id="wrap-template">

            <div style="" class="wrap-register-form"><input type="hidden" id="captchav3-score"><input
                    type="hidden" id="captchav3-score-limit"><input type="hidden" id="captchav3-authentication-code">
                <div class="new-website">
                    <div class="new-register w-100">
                        <div class="new-register-step-2 d-flex w-100">
                            <div class="new-register-left"
                                style="background-image: url(&quot;{{ 'storage/'.$config_all->banner_login }}&quot;);">
                                <div class="new-register-content">
                                    <div class="new-register-content-title " style="display: contents">
                                        <p  style="width: 60%;">{{ $config_all ? $config_all->company : 'Quản lý khách sạn' }}</p>
                                        {{-- <p>Bán hàng đơn giản</p> --}}
                                    </div>
                                    <div class="register-telephone text-center"><span class="telephone-wrap">Hỗ trợ đăng
                                            ký {{ $config_all->carePhone }}</span></div>
                                </div>
                            </div>
                            <div class="new-register-right position-relative">
                                <div class="new-register-top" style="margin-top: 75px"><a class="cursor-pointer"> Tạo tài khoản dùng thử miễn phí
                                    </a></div>
                                <form method="post" class="register-form new-register-form" novalidate
                                    action="{{ route('submit.register') }}">
                                    @csrf

                                    <div class="form-group w-100">

                                        <input id="fullname" name="fullname" type="text" class="form-control"
                                            placeholder="Họ và tên" autocomplete="one-time-code"
                                            value="{{ old('fullname') }}">
                                        @error('fullname')
                                            <span class="error-message text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group w-100">

                                        <input id="username" name="username" type="text" class="form-control"
                                            placeholder="Username" autocomplete="one-time-code"
                                            value="{{ old('username') }}">
                                        @error('username')
                                            <span class="error-message text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group w-100">

                                        <input name="phone" type="tel" class="form-control"
                                            placeholder="Số điện thoại" pattern="[0-9]{10,11}" autocomplete="tel"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="error-message text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group w-100">
                                        <input id="email" name="email" type="email" class="form-control"
                                            placeholder="Email" autocomplete="email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="error-message text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group w-100">

                                        <input id="password" name="password" type="password" class="form-control"
                                            placeholder="Mật khẩu" autocomplete="new-password">
                                        @error('password')
                                            <span class="error-message text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group w-100">

                                        <select name="province" id="province" class="form-select w-100">
                                            <option selected value="">Chọn khu vực</option>
                                            @forelse ($city as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('province') == $item->id ? 'selected' : '' }}>
                                                    {{ $item->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                        @error('province')
                                            <span class="error-message text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                    @error('g-recaptcha-response')
                                            <span class="error-message text-danger">{{ $message }}</span>
                                        @enderror

                                    <div class="form-group text-center w-100">
                                        <button class="btn btn-primary" type="submit">Tiếp tục</button>
                                    </div>
                                </form>



                            </div>
                            <!---->
                            <div class="bg-overflow"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!---->
        <div class="bg-overflow"></div>
        <!--]-->
    </div>
    <div id="teleports"></div>

</body>

<style>
    /* Container bọc select */
    .select-container {
        display: flex;
        flex-direction: column;
        gap: 5px;
        width: 100%;
        /* margin: 10px 0; */
        margin-bottom: 10px;
    }


    /* Tùy chỉnh select */
    .custom-select-new {
        width: 100%;
        padding: 13px 10px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 10px;
        /* background-color: white; */
        color: #acb1b7;
        cursor: pointer;
        transition: border 0.3s ease-in-out;
    }

    /* Hiệu ứng khi focus */
    .custom-select-new:focus {
        border-color: #007bff;
        outline: none;
    }


    .custom-select-new option {
        font-size: 14px;
        padding: 10px;
        color: #000000;
    }

    .register-form input {
        padding: 25px 15px !important;
    }

    .register-form select {
        padding: 18px 12px !important;
        border: 1px solid #ced4da;
        color: #495057;
        font-size: 1.3rem;
    }

    .form-group.text-center {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }

    .form-group.text-center button {
        display: block;
        margin: 0 auto;
        padding: 7px 14px;
    }
    .error-message {
        font-size: 11px;
    }
</style>


</html>
