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
.footer-info li {
    display: flex;
    align-items: center;
    line-height: 1.5;
}

.footer-info li::before {
    content: "➤";
    margin-right: 15px;
    color: white;
    font-size: 12px;
    display: inline-flex;
    align-items: center;
}

.footer-info-1 li a::before {
    content: "➤";
    margin-right: 15px;
    color: white;
    font-size: 12px;
    vertical-align: middle;
    line-height: 1;
}
.footer-info-1 li a:hover{
    text-decoration: none;
}




</style>
<footer class="footer shadow-bg get-section" id="sectionContact"
    style="background: url('{{ showImage($banner->image_footer) }}') no-repeat center center;
    background-size: cover;
    width: 100%">

    <div class="container">
        <div class="wrap-head-footer row">
            <div class="col-lg-6 col-md-12 footer-list info">

                <h4 class="footer-title" style="color: #ffff">{{ $config->company }}</h4>
                <ul class="footer-info">
                    <li class="p p-hotline">Trụ sở chính: {{ $config->headoffice }}</li>
                    <li class="p p-hotline">Địa chỉ: {{ $config->address }}</li>
                    <li class="p p-hotline">Điện thoại: {{ $config->salesPhone }} / Hotline: {{ $config->hotline }}</li>
                    <li class="p p-hotline">Email: {{ $config->email }}</li>
                    <li class="p p-hotline">MST: {{ $config->mst }}</li>
                    <li class="p p-hotline">STK: {{ $config->stk }}</li>
                </ul>

            </div>
            <div class="col-lg-3 col-sm-6 footer-list info">
                {{-- <div class="div-support tvbh"> --}}
                <h4 class="footer-title" style="color: #ffff">Về chúng tôi</h4>
                <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
                    <div class="chw-widget">
                        <div class="textwidget">
                            <div>
                                <ul class="footer-info-1">
                                    <li><a title="Về KiotViet" href="" target="_blank" rel="nofollow noopener">Giới thiệu</a></li>
                                    <li><a title="Khách hàng" href="" arget="_blank" rel="nofollow">Hồ sơ năng lực</a></li>
                                    <li><a title="Điều khoản sử dụng" href=""target="_blank" rel="nofollow noopener">Chính sách</a></li>
                                    <li><a title="Liên hệ" href="" arget="_blank" rel="nofollow">Tuyển dụng</a></li>
                                    <li><a title="Tuyển dụng KiotViet" href=""target="_blank" rel="nofollow noopener">Hướng dẫn thanh toán</a></li>
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
                                        <a href="{{ $config->facebook_link }}" target="_black" title="Facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $config->youtube_link }}" target="_black" title="YouTube">
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
                                alt="DMCA" loading="lazy"></a>{{ $config->footer }} </span></p>
            </div>
        </div>
    </div>
</footer>
