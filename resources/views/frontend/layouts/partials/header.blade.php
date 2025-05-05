<div class="header header-transparent">
    <div class="container-wrap container-fluid">
        <nav class="navbar navbar-expand-xl fixed-top">
            <div class="container-fluid p-0">
                <a href="/" class="navbar-brand logo cursor-pointer">
                    <h2 class="mb-0"><img width="170" height="auto"
                            src="{{ showImage($config->logo) }}"
                            alt="{{ $config->company }}"></h2>
                </a>
                <button class="navbar-toggler" title="Menu"><i class="fa-solid fa-bars"></i></button>

                <div class="bg-overflow"></div>
                <div class="navbar-header offcanvas-end offcanvas">
                    <div class="offcanvas-header"><span>
                            <a href="/" class="logo-close">
                                <h2 class="mb-0"><img width="160" height="auto"
                                        src="{{ showImage($config->logo) }}"
                                        alt="{{ $config->company }}"></h2>
                            </a></span>
                        <button type="button" class="nav-close navbar-close" style="font-size: 25px !important;">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body pt-0">
                        <ul class="navbar-header-content navbar-nav">
                            <li>
                                <div class="registerandlogin">
                                    <ul class="w-100">
                                        <li class="nav-item header-register"><a  class="btn btn-outline-primary btn-sm" href="http://123.31.31.39:6060/admin">Đăng nhập</a>
                                        </li>
                                        <li class="nav-item header-login login"><a href="{{ route('register') }}"
                                                class="btn btn-primary btn-sm">Đăng ký</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </div>
</div>
