@extends('frontend.layouts.master')
@section('content')
    <link rel="stylesheet"
        href="{{ asset('frontend/css/suport.css') }}?v={{ filemtime(public_path('frontend/css/suport.css')) }}">
    <style>
        p:not(.price-packagename),
        li {
            font-family: 'Rajdhani', sans-serif !important;
        }
    </style>
    <div class="card-box">
        <div class="container">
            <div class="supportMain-Nav">
                <ul class="supdetailNav" id="supdetailNav">
                </ul>
            </div>

            <div class="supportMain-content">
                <div class="supportMain-content_sidebar">

                    <span class="supportMain-content_sidebar-title">
                        Quản lý mẫu in </span>
                    <div class="menu-tin-tuc-container">
                        <ul id="menu-tin-tuc" class="menu">
                            <li id="menu-item-89000"
                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-89000 menu_one">
                                <ul class="sub-menu supportMain-content_sidebar-list"
                                    id="quan-ly-mau-ini-quan-ly-mau-iniithem-mau-iniii-sua-mau-iniv-xoa-mau-inv-su-dung-mau-in1-man-hinh-thu-ngan2-man-hinh-quan-ly">
                                    <li id="menu-item-89018"
                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-88379 current_page_item menu-item-89018 supportMain-content_sidebar-item active has-child">
                                        <a aria-current="page" data-href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/">Quản lý mẫu in</a>
                                        <ul class="supportMain-content_sidebar-submenu">
                                            <li class="supportMain-content_sidebar-subitem menu-3 active" data-level="3"
                                                data-id="0i-quan-ly-mau-in" data-root="0i-quan-ly-mau-in"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#i-quan-ly-mau-in">I.
                                                    Quản lý mẫu in</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-3" data-level="3"
                                                data-id="1iithem-mau-in" data-root="1iithem-mau-in"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#iithem-mau-in">II.Thêm
                                                    mẫu in</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-3" data-level="3"
                                                data-id="2iii-sua-mau-in" data-root="2iii-sua-mau-in"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#iii-sua-mau-in">III.
                                                    Sửa mẫu in</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-3" data-level="3"
                                                data-id="3iv-xoa-mau-in" data-root="3iv-xoa-mau-in"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#iv-xoa-mau-in">IV.
                                                    Xóa mẫu in</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-3" data-level="3"
                                                data-id="4v-su-dung-mau-in" data-root="4v-su-dung-mau-in">
                                             <a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#v-su-dung-mau-in">V.
                                                    Sử dụng mẫu in</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-4" data-stt-parent="5"
                                                data-level="4" data-id="41-man-hinh-thu-ngan"
                                                data-parent="4v-su-dung-mau-in" data-root="4v-su-dung-mau-in"
                                                style="display: list-item;"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#1-man-hinh-thu-ngan-4-5">1.
                                                    Màn hình Thu ngân</a></li>
                                            <li class="supportMain-content_sidebar-subitem menu-4" data-stt-parent="5"
                                                data-level="4" data-id="42-man-hinh-quan-ly" data-parent="4v-su-dung-mau-in"
                                                data-root="4v-su-dung-mau-in" style="display: list-item;"><a
                                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/#2-man-hinh-quan-ly-4-5">2.
                                                    Màn hình Quản lý</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>


                </div>

                <div class="supportMain-content_article">
                    <div class="supportMain-content_article-wrapper">
                        <div class="supportMain-breadcrumb">
                            <a href="/huong-dan-su-dung-kiotviet">Hỗ trợ</a>
                            <span class="supportMain-breadcrumb_arrow"></span>
                            <a href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/">Quản lý
                                mẫu in</a>
                        </div>

                        <h1 class="supportMain-content_article-title fw-bold">Quản lý mẫu in</h1>
                        <h1 style="text-align: center;">
                            <span style="font-family:arial,helvetica,sans-serif;">Hướng dẫn sử dụng tính năng Quản lý mẫu
                                in</span>
                        </h1>
                        <h2>
                            <span style="font-size:16px;">
                                <span style="font-family:arial,helvetica,sans-serif;">
                                    <strong>
                                        <span class="sub-menu" id="i-quan-ly-mau-in">I. Quản lý mẫu in </span>
                                    </strong>
                                </span>
                            </span>
                        </h2>
                        <p>- Trên màn hình <strong>Quản lý</strong>, bạn kích <strong>Thiết lập</strong> (1) -&gt;&nbsp;chọn
                            <strong>Quản lý mẫu in (2)</strong>
                        </p>
                        <p align="center"><img alt="" class="alignnone size-full wp-image-70534"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2022/03/bk24032022dx1.png"
                                style="border: 1px solid rgb(170, 170, 170); max-height: 421px;" width="401"></p>
                        <p>- Tại màn hình&nbsp;<strong>Quản lý</strong>&nbsp;mẫu in có các thông tin sau:</p>
                        <ul style="list-style-type:circle;">
                            <li><strong>Tạm tính</strong>: Mẫu in được sử dụng để in báo giá trước khi thanh toán.<ul
                                    style="list-style-type:circle;">
                                    <li><strong>Hóa đơn</strong>: Mẫu in được sử dụng để in thông tin giao dịch bán hàng và
                                        thanh toán.</li>
                                    <li><strong>Nhập hàng</strong>: Mẫu in được sử dụng để in thông tin giao dịch nhập hàng
                                        với đối tác</li>
                                    <li><strong>Trả hàng nhập</strong>: Mẫu in được sử dụng để in thông tin giao dịch trả
                                        hàng đã nhập cho nhà cung cấp</li>
                                    <li><strong>Chuyển hàng</strong>: Mẫu in được sử dụng để in thông tin giao dịch chuyển
                                        hàng từ chi nhánh này sang chi nhánh khác</li>
                                    <li><strong>Phiếu thu</strong>: Mẫu in được sử dụng để in thông tin khi tạo phiếu thu
                                    </li>
                                    <li><strong>Phiếu chi</strong>: Mẫu in được sử dụng để in thông tin khi tạo phiếu chi
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p align="center" style="margin-left:9.0pt;"><img alt=""
                                class="alignnone size-full wp-image-68139"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2022/01/BKDX190122.7.png"
                                style="border: 1px solid rgb(170, 170, 170); max-height: 136px;" width="931"></p>
                        <p>- Tại màn hình&nbsp;<strong>Quản lý mẫu in<em>,&nbsp;</em></strong>chọn Giao dịch cần xem danh
                            sách mẫu in&nbsp;và kích chọn&nbsp;<strong><em>Mẫu in</em></strong>&nbsp;để xem danh sách các
                            mẫu in hỗ trợ cho giao dịch này. Ví dụ: Giao dịch Hóa đơn.</p>
                        <p align="center" style="margin-left:9.0pt;"><img alt=""
                                class="alignnone size-full wp-image-64407"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-3-1.jpg"
                                width="522" style="max-height: 243px;"></p>
                        <h2><span style="font-size:16px;"><span
                                    style="font-family:arial,helvetica,sans-serif;"><strong><span class="sub-menu"
                                            id="iithem-mau-in">II.Thêm mẫu in</span></strong></span></span></h2>
                        <p style="margin-left:9.0pt;">Với các giao dịch Tạm tính, Hóa đơn, Trả hàng hệ thống hỗ trợ tạo tối
                            đa 3 mẫu in. Giao dịch còn lại là Nhập hàng, Trả hàng nhập, Chuyển hàng, Phiếu thu, Phiếu chi:
                            hệ thống chỉ hỗ trợ 1 mẫu in.</p>
                        <p>- Tại màn hình&nbsp;<strong>Quản lý mẫu in</strong>, chọn giao dịch cần thêm mẫu in. Ví dụ: Giao
                            dịch Hóa đơn.</p>
                        <p>- Kích biểu tượng&nbsp; <img alt="" class="alignnone size-full wp-image-64408"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-4-1.jpg"
                                width="36" style="max-height: 28px;"> &nbsp;để thêm mới mẫu in.</p>
                        <p align="center"><img alt="" class="alignnone size-full wp-image-64409"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-5-1.jpg"
                                width="722" style="max-height: 217px;"></p>
                        <p>- Sau khi hệ thống hiển thị màn hình&nbsp;<strong>Thêm mẫu in hóa đơn</strong>, nhập thông tin
                            Tên mẫu in, lựa chọn Mẫu in gợi ý (A4 hoặc K80) và nội dung cho mẫu in mới.</p>
                        <p align="center"><img alt="" class="alignnone size-full wp-image-64410"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-6-1.jpg"
                                width="722" style="max-height: 310px;"></p>
                        <p>- Chọn&nbsp;<strong><em>Lưu</em></strong>&nbsp;để hoàn tất.</p>
                        <p>- Thao tác&nbsp;<strong><em>Thêm mẫu in</em></strong>&nbsp;hoàn tất khi hệ thống hiển thị thông
                            báo thành công.</p>
                        <h2><span style="font-size:16px;"><span
                                    style="font-family:arial,helvetica,sans-serif;"><strong><span class="sub-menu"
                                            id="iii-sua-mau-in">III. Sửa mẫu in</span></strong></span></span></h2>
                        <p>- Tại màn hình&nbsp;<strong>Quản lý mẫu in</strong>, chọn giao dịch cần sửa mẫu in. Ví dụ: Giao
                            dịch Hóa đơn</p>
                        <p>- Chọn mẫu in cần sửa và kích biểu tượng&nbsp; <img alt=""
                                class="alignnone size-full wp-image-64411"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-7-1.jpg"
                                width="35" style="max-height: 35px;"> &nbsp;để sửa mẫu in.</p>
                        <p style="text-align: center;"><img alt="" class="alignnone size-full wp-image-64412"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-8-1.jpg"
                                width="722" style="max-height: 217px;"></p>
                        <p>- Kích chữ “<strong>i</strong>” cạnh chữ sửa mẫu in hóa đơn, hệ thống sẽ hiển thị “Danh sách
                            token”</p>
                        <p align="center"><img alt="" class="alignnone size-full wp-image-64413"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-9-1.jpg"
                                width="722" style="max-height: 310px;"></p>
                        <p>- Danh sách token hiện ra:</p>
                        <p align="center"><img alt="" class="alignnone size-full wp-image-64414"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-10-1.jpg"
                                width="722" style="max-height: 417px;"></p>
                        <p>- Sau khi hệ thống hiển thị màn hình&nbsp;<strong>Sửa mẫu in hóa đơn</strong>, sửa các thông tin
                            trên mẫu in bao gồm: Tên mẫu in, Mẫu in gợi ý (A4 hoặc K80), nội dung mẫu in.</p>
                        <p align="center" style="margin-left:9.0pt;"><img alt=""
                                class="alignnone size-full wp-image-64415"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-11-1.jpg"
                                width="722" style="max-height: 249px;"></p>
                        <p>- Chọn&nbsp;<strong><em>Lưu</em></strong>&nbsp;để hoàn tất.</p>
                        <p>- Sau khi hệ thống hiển thị màn hình xác nhận&nbsp;<strong><em>Lưu mẫu in</em></strong>,
                            chọn&nbsp;<strong><em>Có</em></strong>.</p>
                        <p>- Thao tác&nbsp;<strong><em>Sửa mẫu in</em></strong>&nbsp;hoàn tất khi hệ thống hiển thị thông
                            báo thành công.</p>
                        <h2><span style="font-size:16px;"><span
                                    style="font-family:arial,helvetica,sans-serif;"><strong><span class="sub-menu"
                                            id="iv-xoa-mau-in">IV. Xóa mẫu in</span></strong></span></span></h2>
                        <p>- Tại màn hình&nbsp;<strong>Quản lý mẫu in</strong>, Chọn giao dịch cần xóa mẫu in. Ví dụ: Giao
                            dịch Hóa đơn.</p>
                        <p>- Chọn mẫu in cần xóa và Kích biểu tượng&nbsp; <img alt=""
                                class="alignnone size-full wp-image-64416"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-1-1.png"
                                width="32" style="max-height: 30px;"> &nbsp;để xóa mẫu in.</p>
                        <p align="center" style="margin-left:9.0pt;"><img alt=""
                                class="alignnone size-full wp-image-64417"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-12-1.jpg"
                                width="593" style="max-height: 345px;"></p>
                        <p>- Sau khi hệ thống hiển thị màn hình&nbsp;<strong>Sửa mẫu in hóa đơn</strong>,
                            chọn<strong><em>&nbsp;Xóa</em></strong>&nbsp;để xóa mẫu in.</p>
                        <p align="center"><img alt="" class="alignnone size-full wp-image-64418"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-13-1.jpg"
                                width="722" style="max-height: 419px;"></p>
                        <p>- Hệ thống hiển thị màn hình xác nhận&nbsp;<strong>Xóa mẫu in</strong>,
                            chọn&nbsp;<strong><em>Đồng ý</em></strong>.</p>
                        <p>- Thao tác&nbsp;<strong><em>Xóa mẫu in</em></strong>&nbsp;hoàn tất khi hệ thống hiển thị thông
                            báo thành công.</p>
                        <h2><span style="font-size:16px;"><span
                                    style="font-family:arial,helvetica,sans-serif;"><strong><span class="sub-menu"
                                            id="v-su-dung-mau-in">V. Sử dụng mẫu in</span></strong></span></span></h2>
                        <h3><span style="font-size:16px;"><span
                                    style="font-family:arial,helvetica,sans-serif;"><strong><span
                                            class="sub-child sub-menu-4-5" id="1-man-hinh-thu-ngan-4-5">1. Màn hình Thu
                                            ngân</span></strong></span></span></h3>
                        <p>- Với giao dịch Hóa đơn có thiết lập nhiều mẫu in, bạn lựa chọn mẫu in phù hợp với nhu cầu sử
                            dụng.</p>
                        <p>- Tại màn hình&nbsp;<strong>Lễ tân</strong>, kích vào biểu tượng&nbsp; <img alt=""
                                class="alignnone size-full wp-image-64419"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-14-1.jpg"
                                width="44" style="max-height: 40px;"> &nbsp;và chọn mẫu in. Sau đó
                            chọn&nbsp;<strong><em>Xong</em></strong>&nbsp;để hoàn tất.</p>
                        <p align="center"><img alt="" class="alignnone size-full wp-image-88392"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2023/03/mauin18.png"
                                style="border: 1px solid rgb(170, 170, 170); max-height: 329px;" title=""
                                width="471"></p>
                        <h3><span style="font-size:16px;"><span
                                    style="font-family:arial,helvetica,sans-serif;"><strong><span
                                            class="sub-child sub-menu-4-5" id="2-man-hinh-quan-ly-4-5">2. Màn hình Quản
                                            lý</span></strong></span></span></h3>
                        <p>- Với các giao dịch Nhập hàng, Trả hàng nhập, Chuyển hàng, Phiếu thu, Phiếu chi, khi thực hiện in
                            lại, bạn kích vào nút In trên từng giao dịch.</p>
                        <p>- Với các giao dịch Tạm tính, Hóa đơnx có thiết lập nhiều mẫu in, khi thực hiện in lại một giao
                            dịch, hệ thống hỗ trợ có thể tùy chọn mẫu in tương ứng của giao dịch đó.</p>
                        <ul style="list-style-type:circle;">
                            <li><strong>In một giao dịch</strong>
                                <ul>
                                    <li>Trên thông tin chi tiết của đơn hàng, chọn&nbsp;<strong><em>In</em></strong>.</li>
                                </ul>
                            </li>
                        </ul>
                        <p align="center"><img alt="" class="alignnone size-full wp-image-83740"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2022/12/3-7.png"
                                style="border: 1px solid rgb(170, 170, 170); max-height: 533px;" title=""
                                width="871"></p>
                        <ul>
                            <li>Hệ thống hiển thị màn hình&nbsp;<strong>Chọn mẫu in hóa đơn/trả hàng</strong>. Tại đây, lựa
                                chọn mẫu in và chọn&nbsp;<strong><em>In</em></strong>.</li>
                        </ul>
                        <p align="center"><img alt="" class="alignnone size-full wp-image-64422"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-17-1.jpg"
                                width="495" style="max-height: 192px;"></p>
                        <ul style="list-style-type:circle;">
                            <li><strong>In nhiều giao dịch: </strong>chỉ áp dụng với Hóa đơn<ul>
                                    <li>Bạn tích chọn các giao dịch cần in (1) -&gt;&nbsp;kích <strong><em>Thao tác
                                            </em></strong>(2)<strong> </strong>-&gt;&nbsp;chọn<strong><em> In
                                            </em></strong>(3)</li>
                                </ul>
                            </li>
                        </ul>
                        <p align="center"><img alt="" class="alignnone size-full wp-image-64423"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-18-1.jpg"
                                width="723" style="max-height: 133px;"></p>
                        <ul>
                            <li>Hệ thống hiển thị màn hình&nbsp;<strong>Chọn mẫu in hóa đơn</strong>. Tại đây lựa chọn mẫu
                                in và chọn&nbsp;<strong><em>In</em></strong>.</li>
                        </ul>
                        <p align="center" style="margin-left:.5in;"><img alt=""
                                class="alignnone size-full wp-image-64424"
                                src="https://cdn-kvweb.kiotviet.vn/kiotviet-website/wp-content/uploads/2021/11/BKQLMI-19-1.jpg"
                                width="495" style="max-height: 192px;"></p>
                        <div>
                            <p><span style="font-family:arial,helvetica,sans-serif;">Như vậy, KiotViet đã thực hiện xong
                                    phần hướng dẫn tính năng Quản lý mẫu in.</span></p>
                            <p><span style="font-family:arial,helvetica,sans-serif;">Mọi thắc mắc xin liên hệ tổng đài tư
                                    vấn bán hàng&nbsp;<strong>1800 6162</strong>, tổng đài hỗ trợ phần mềm&nbsp;<strong>1900
                                        6522</strong>&nbsp;hoặc email cho chúng tôi tại địa
                                    chỉ:&nbsp;<strong>hotro@kiotviet.com</strong>&nbsp;để được hỗ trợ và giải đáp.</span>
                            </p>
                            <p><span style="font-family:arial,helvetica,sans-serif;">Chúc Quý khách thành công!</span></p>
                            <p style="text-align: right;"><span style="font-size:11px;"><span
                                        style="font-family:arial,helvetica,sans-serif;"><em>Tài liệu được cập nhật mới nhất
                                            ngày 30/03/2023</em></span></span></p>
                        </div>
                        <div class="social2">
                            <div class="fb-share-button fb_iframe_widget"
                                data-href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/"
                                data-layout="button_count" fb-xfbml-state="rendered"
                                fb-iframe-plugin-query="app_id=1630263617258818&amp;container_width=0&amp;href=https%3A%2F%2Fwww.kiotviet.vn%2Fhuong-dan-su-dung-kiotviet%2Fquan-ly-mau-in-web-hotel%2F&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey">
                                <span style="vertical-align: bottom; width: 0px; height: 0px;"><iframe
                                        name="f9af18b02bad5ed02" width="1000px" height="1000px"
                                        data-testid="fb:share_button Facebook Social Plugin"
                                        title="fb:share_button Facebook Social Plugin" frameborder="0"
                                        allowtransparency="true" allowfullscreen="true" scrolling="no"
                                        allow="encrypted-media"
                                        src="https://www.facebook.com/v2.0/plugins/share_button.php?app_id=1630263617258818&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df7bc65fff68f3d5bb%26domain%3Dwww.kiotviet.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.kiotviet.vn%252Ffade0ada81290a822%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.kiotviet.vn%2Fhuong-dan-su-dung-kiotviet%2Fquan-ly-mau-in-web-hotel%2F&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey"
                                        class=""
                                        style="border: none; visibility: visible; width: 0px; height: 0px;"></iframe></span>
                            </div>
                            <div class="fb-like fb_iframe_widget"
                                data-href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/"
                                data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"
                                fb-xfbml-state="rendered"
                                fb-iframe-plugin-query="action=like&amp;app_id=1630263617258818&amp;container_width=0&amp;href=https%3A%2F%2Fwww.kiotviet.vn%2Fhuong-dan-su-dung-kiotviet%2Fquan-ly-mau-in-web-hotel%2F&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=false">
                                <span style="vertical-align: bottom; width: 90px; height: 28px;"><iframe
                                        name="feb5ff94f1372a966" width="1000px" height="1000px"
                                        data-testid="fb:like Facebook Social Plugin"
                                        title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true"
                                        allowfullscreen="true" scrolling="no" allow="encrypted-media"
                                        src="https://www.facebook.com/v2.0/plugins/like.php?action=like&amp;app_id=1630263617258818&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df86489491c27091e6%26domain%3Dwww.kiotviet.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.kiotviet.vn%252Ffade0ada81290a822%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.kiotviet.vn%2Fhuong-dan-su-dung-kiotviet%2Fquan-ly-mau-in-web-hotel%2F&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=false"
                                        class=""
                                        style="border: none; visibility: visible; width: 90px; height: 28px;"></iframe></span>
                            </div>
                            <div class="tw-share"><a class="twitter-share-button"
                                    href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/">Tweet</a>
                            </div>
                            <div class="gg-share" style="top:3px">
                                <div class="g-plusone"
                                    data-href="https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/"
                                    data-size="medium" data-source="google:developers"></div>
                            </div>
                        </div>

                        <div class="box-register-new text-center">
                            <h4 class="txt">KiotViet - <a style="color:#002146!important"
                                    href="https://www.kiotviet.vn/">Phần mềm quản lý bán hàng</a> phổ biến nhất</h4>
                            <div class="text-center list">
                                <ul class="clearfix" style="list-style:none !important">
                                    <li style=" list-style: none; " class="pull-left">Với <span>300.000</span> nhà kinh
                                        doanh sử dụng</li>
                                    <li style=" list-style: none; " class="pull-left">Chỉ từ: <span>8.000đ</span>/ ngày
                                    </li>
                                </ul>
                            </div> <button class="register box-popup-register" id="box-register-single"
                                data-scrolltop="no">
                                <span>Dùng thử miễn phí</span>
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const navItems = [{
                    text: "Khởi tạo gian hàng",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/huong-dan-su-dung/dang-ky-web-hotel/"
                },
                {
                    text: "Thiết lập cửa hàng",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/thiet-lap-cua-hang-web-hotel/"
                },
                {
                    text: "Quản lý mẫu in",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-mau-in-web-hotel/"
                },
                {
                    text: "Phân quyền truy cập",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/phan-quyen-truy-cap-web-hotel/"
                },
                {
                    text: "Quản lý nhân viên",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-nhan-vien-tinh-luong-web-hotel/"
                },
                {
                    text: "Quản lý chi nhánh",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-chi-nhanh-web-hotel/"
                },
                {
                    text: "Phòng/ Hạng phòng",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/quan-ly-hang-phong-phong-web-hotel/"
                },
                {
                    text: "Lễ tân",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/man-hinh-le-tan-web-hotel/"
                },
                {
                    text: "Dịch vụ, sản phẩm",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/danh-muc-hang-hoa-web-hotel/"
                },
                {
                    text: "Sổ quỹ",
                    link: "https://www.kiotviet.vn/huong-dan-su-dung-kiotviet/so-quy-web-hotel/"
                },

            ];
            const supdetailNav = document.getElementById('supdetailNav');

            for (let i = 0; i < 7; i++) {
                const item = navItems[i];
                const li = document.createElement('li');
                li.classList.add('supdetailNav-item');
                li.innerHTML = `<a class="a-item" href="${item.link}">${item.text}</a>`;
                supdetailNav.appendChild(li);
            }

            // Thêm nút "Xem thêm"
            const lastItem = document.createElement('li');
            lastItem.classList.add('supdetailNav-item', 'lastItem');
            lastItem.innerHTML = `<a class="load-more" href="javascript:void(0);">Xem thêm</a>`;

            const wrapNavlist = document.createElement('div');
            wrapNavlist.classList.add('wrap-navlist');
            const sublist = document.createElement('ul');
            sublist.classList.add('supdetailNav-sublist');

            // Thêm các mục còn lại vào danh sách con
            for (let i = 7; i < navItems.length; i++) {
                const item = navItems[i];
                const subItem = document.createElement('li');
                subItem.classList.add('supdetailNav-sublist-item');
                subItem.innerHTML = `<a class="a-sub-item" href="${item.link}">${item.text}</a>`;
                sublist.appendChild(subItem);
            }

            wrapNavlist.appendChild(sublist);
            lastItem.appendChild(wrapNavlist);
            supdetailNav.appendChild(lastItem);

            // Xử lý sự kiện click vào "Xem thêm"
            const loadMore = document.querySelector('.load-more');
            loadMore.addEventListener('click', function() {
                wrapNavlist.style.display = wrapNavlist.style.display === 'none' ? 'block' : 'none';
            });
        });
    </script>
@endsection
