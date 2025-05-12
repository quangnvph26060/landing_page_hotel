<style>
 .social-icons {
  display: flex;
  gap: 12px;
  list-style: none;
  padding: 0;
  margin: 0;
}

.social-icons li a {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex !important;
  justify-content: center;
  align-items: center;
  font-size: 24px;
  color: white;
  text-decoration: none;
  transition: all 0.3s ease;
}

.social-icons li a[title="Facebook"] {
  background-color: #3b5998;
}

.social-icons li a[title="YouTube"] {
  background-color: #ff0000;
}

.social-icons li a:hover {
  transform: scale(1.1);
}
/* .social-icons i{
    font-size: 20px;
} */


</style>
<footer class="footer shadow-bg get-section" id="sectionContact"
    style="background: url('{{ showImage($banner->image_footer) }}') no-repeat top;">

    <div class="container">
        <div class="wrap-head-footer row">
            <div class="col-lg-6 col-md-12 footer-list info">

                <h4 class="footer-title" style="color: #ffff">{{ $config->company }}</h4>
                <p class="p p-hotline">Trụ sở chính: {{ $config->address }}</p>
                <p class="p p-hotline">Hotline: {{ $config->hotline }}</p>
                <p class="p p-hotline">Email: {{ $config->email }}</p>
                <p class="p p-hotline">MST: 0108806638 cấp ngày 05/07/2019</p>
                <p class="p p-hotline">STK: 4567789999 - VPbank</p>

            </div>
            <div class="col-lg-3 col-sm-6 footer-list info">
                {{-- <div class="div-support tvbh"> --}}
                <h4 class="footer-title" style="color: #ffff">Về chúng tôi</h4>
                <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
                    <div class="chw-widget">
                        <div class="textwidget">
                            <div>
                                <ul>
                                    <li><a title="Về KiotViet"
                                            href="https://about.kiotviet.vn/ve-chung-toi/?_gl=1*9r11pp*_gcl_au*NDk3MDM2ODc1LjE3NDA5Njg4NzY.*_ga*MTEwNjI0MzgyOS4xNzIxMTIxNjg3*_ga_6HE3N545ZW*czE3NDcwMzU5MDAkbzQyJGcwJHQxNzQ3MDM1OTAwJGo2MCRsMCRoMA.."
                                            target="_blank" rel="nofollow noopener">Giới thiệu</a></li>
                                    <li><a title="Khách hàng" href="https://www.kiotviet.vn/khach-hang/"
                                            rel="nofollow">Hồ sơ năng lực</a></li>
                                    <li><a title="Điều khoản sử dụng" href="https://www.kiotviet.vn/dieu-khoan-su-dung/"
                                            target="_blank" rel="nofollow noopener">CHính sách</a></li>
                                    <li><a title="Liên hệ" href="https://kiotviet.vn/lien-he" rel="nofollow">
                                            Tuyển dụng</a></li>
                                    <li><a title="Tuyển dụng KiotViet" href="https://about.kiotviet.vn/tuyen-dung/"
                                            target="_blank" rel="nofollow noopener">Hướng dẫn thanh toán</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}

                <ul>
                    <li></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 footer-list info">
                {{-- <div class="div-support tvbh"> --}}
                <h4 class="footer-title" style="color: #ffff">Theo dõi chúng tôi</h4>
                <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
                    <div class="chw-widget">
                        <div class="textwidget">
                            <div>
                                <ul class="social-icons">
                                    <li>
                                        <a href="https://facebook.com" title="Facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://youtube.com" title="YouTube">
                                            <i class="fab fa-youtube-square"></i>
                                        </a>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <div class="box-social">
        <div class="container">
            <div class="box-social-wrap">
                <p class="mb-0 p-0"><span><a
                            href="https://www.dmca.com/Protection/Status.aspx?ID=e9fda70b-1262-49c8-9689-028aa2d238c5&amp;refurl=https://www.kiotviet.vn/"
                            title="DMCA.com Protection Status" class="dmca"><img
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2023/10/31070200/DMCA.jpg"
                                alt="DMCA" loading="lazy"></a>{{ $config->footer }}</p>
                {{-- <ul class="social">
                    <li>
                        <a rel="nofollow" title="Facebook" href="https://facebook.com/PhanmembanhangKiotViet" target="_blank">
                            <b class="fa-brands fa-facebook"></b>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" title="Twitter" href="https://twitter.com/KiotViet" target="_blank">
                            <b class="fa-brands fa-twitter"></b>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow noopener noreferrer" title="YouTube"
                           href="https://www.youtube.com/channel/UCDLpNUxdUx7E81MV4K7ocxA"
                           target="_blank">
                            <b class="fa-brands fa-youtube"></b>
                        </a>
                    </li>

                </ul> --}}
            </div>
        </div>
    </div>
</footer>
