<div class="banner-content-left industry-banner page-banner" id="banner_main">
    <div class="background-layer"
         style="background-image: url('{{ showImage($banner->image ?? '') }}');"></div>

    <div class="page-banner-wrap">
        <div class="solution-heading">
            <h1 class="heading-desktop" style="width: 800px;">{{ $banner->title }}</h1>
            <h1 class="heading-mobile">{{ $banner->title }}</h1>
        </div>
        <div class="banner-below-left d-flex justify-content-center">
            <a href="{{ route('register') }}"
               class="btn btn-primary register box-popup-register" id="show_signup">Dùng thử miễn phí</a>
        </div>
    </div>
</div>

<div class="video-banner-box">
    <div class="video-banner-youtube">
        <p class="modalyoutube-close"><span></span></p>
        <!---->
    </div>
</div>
