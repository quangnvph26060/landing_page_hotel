<footer class="footer shadow-bg get-section" id="sectionContact" style="background: url('{{ asset('frontend/image/background-footer.jpg') }}') no-repeat top;">

    <div class="container">
        <div class="wrap-head-footer">
            <div  class="col-lg-3 col-md-12 footer-list info">

                <p class="p p-company mb-3">{{ $config->company }}</p>
                <p class="p p-hotline">Hotline: {{ $config->hotline }}</p>
                <a title="email" href="#"  rel="nofollow">Email:
                <span class="email-support">{{ $config->email }}</span></a>
            </div>
            <div  class="col-lg-3 col-md-12 footer-list wrap-support" style="text-align: end">
                <div class="div-support tvbh">
                    <h4 class="footer-title">Tư vấn bán hàng</h4>
                    <h4 class="hotline-number mb-1"><a href="tel:{{ $config->salesPhone }}">{{ $config->salesPhone }}</a></h4>
                </div>

                <ul>
                    <li ></li>
                </ul>
            </div>
            <div  class="col-lg-3 col-md-12 footer-list company">
                <p class="p p-address">Trụ sở chính: {{ $config->address }}</p>
            </div>
            <div  class="col-lg-3 col-md-12 footer-list wrap-support" style="text-align: end">

                <div class="div-support cskh">
                    <h4 class="footer-title">Chăm sóc khách hàng</h4>
                    <h4 class="hotline-number"><a href="tel:{{ $config->carePhone }}">{{ $config->carePhone }}</a></h4>
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
