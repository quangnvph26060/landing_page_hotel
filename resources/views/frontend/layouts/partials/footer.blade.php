<footer class="footer shadow-bg get-section" id="sectionContact" style="background: url('{{ asset('frontend/image/background-footer.jpg') }}') no-repeat top;">

    <div class="container">
        <div class="wrap-head-footer">
            <div data-id="0" class="col-lg-3 col-sm-6 footer-list info"><a href="/"
                    class="navbar-brand logo cursor-pointer"><img class="logo"
                        src="{{ showImage($config->logo) }}"
                        alt="{{ $config->company }}" width="170" height="48"></a>
                <p class="p p-company">{{ $config->company }}</p>
                <p class="p p-hotline">Hotline: {{ $config->hotline }}</p>
                <p class="p p-address">Trụ sở chính: {{ $config->address }}</p>
            </div>
            <div data-id="3" class="col-lg-3 col-sm-6 footer-list wrap-support">
                <div class="div-support tvbh">
                    <h4 class="footer-title">Tư vấn bán hàng</h4>
                    <h4 class="hotline-number"><a href="tel:{{ $config->salesPhone }}">{{ $config->salesPhone }}</a></h4>
                </div>
                <div class="div-support cskh">
                    <h4 class="footer-title">Chăm sóc khách hàng</h4>
                    <h4 class="hotline-number"><a href="tel:{{ $config->carePhone }}">{{ $config->carePhone }}</a></h4>
                </div>
                <ul>
                    <li data-id="0"><a title="email" href="mailto:hotro@kiotviet.com"
                            rel="nofollow">Email:
                            <span class="email-support">{{ $config->email }}</span></a></li>
                </ul>
            </div>
            {{-- <div data-id="1" class="col-lg-3 col-sm-6 footer-list company">
                <h4 class="footer-title">Doanh nghiệp</h4>
                <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
                    <div class="chw-widget">
                        <div class="textwidget">
                            <div>
                                <ul>
                                    <li><a title="Về KiotViet"
                                            href="https://about.kiotviet.vn/ve-chung-toi/" target="_blank"
                                            rel="nofollow noopener">Về KiotViet</a></li>
                                    <li><a title="Khách hàng" href="https://www.kiotviet.vn/khach-hang/"
                                            rel="nofollow">Khách hàng</a></li>
                                    <li><a title="Điều khoản sử dụng"
                                            href="https://www.kiotviet.vn/dieu-khoan-su-dung/"
                                            target="_blank" rel="nofollow noopener">Điều khoản &amp; chính
                                            sách sử dụng</a></li>
                                    <li><a title="Liên hệ" href="https://kiotviet.vn/lien-he"
                                            rel="nofollow">Liên hệ</a></li>
                                    <li><a title="Tuyển dụng KiotViet"
                                            href="https://about.kiotviet.vn/tuyen-dung/" target="_blank"
                                            rel="nofollow noopener">Tuyển dụng KiotViet</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div data-id="2" class="col-lg-3 col-sm-6 footer-list support">
                <h4 class="footer-title">Hỗ trợ</h4>
                <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
                    <div class="chw-widget">
                        <div class="textwidget">
                            <div>
                                <ul>
                                    <li><a title="Video hướng dẫn sử dụng"
                                            href="https://www.youtube.com/c/HDSDPhanmemKiotViet"
                                            target="_blank" rel="nofollow noopener">Video hướng dẫn sử
                                            dụng</a></li>
                                    <li><a title="Câu hỏi thường gặp"
                                            href="https://www.kiotviet.vn/ho-tro/#faqs" rel="nofollow">Câu
                                            hỏi thường gặp</a></li>
                                    <li><a title="Wiki KiotViet"
                                            href="https://www.kiotviet.vn/wiki-ki-ot-viet/"
                                            rel="nofollow">Wiki KiotViet</a></li>
                                    <li><a title="Hướng dẫn sử dụng"
                                            href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/"
                                            rel="nofollow">Hướng dẫn sử dụng</a></li>
                                    <li><a title="Blog" href="https://www.kiotviet.vn/blog/"
                                            rel="nofollow">Blog</a></li>
                                    <li><a title="Thông tin cập nhật Kiotviet"
                                            href="https://www.kiotviet.vn/noi-dung-cap-nhat-sap-toi/">Thông
                                            tin cập nhật Kiotviet</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
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
