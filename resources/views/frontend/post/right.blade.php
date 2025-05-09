<div class="news-col-right">

    <div class="box-one blog-right mt-4">
        <h6 class="title-news-sub"><i class="far fa-newspaper"></i><span>Bài viết liên quan</span>
        </h6>
        <ul class="blog-choose">
            <div class="loader" style="display: none;"></div>
            @forelse ($postnews as $item)
                <li>
                    <a href="{{ route('post.detail', ['slug' => $item->slug]) }}"
                        title="{{ $item->title }}">
                        {{ $item->title }}
                    </a>
                </li>
            @empty
            @endforelse
            {{-- <li><a href="https://www.kiotviet.vn/chu-tai-khoan-vietin-bank-da-nhan-duoc-thong-bao-thanh-toan-qr-tren-kiot-viet"
                    title="Chủ tài khoản Vietinbank đã được nhận thông báo thanh toán QR trên KiotViet">Chủ
                    tài khoản Vietinbank đã được nhận thông báo thanh toán QR trên KiotViet</a></li>
            <li><a href="https://www.kiotviet.vn/qua-tang-cuc-hoi-hung-khoi-kinh-doanh-cung-chu-shop-kiotviet"
                    title="Quà tặng cực hời, hứng khởi kinh doanh cùng chủ shop KiotViet">Quà tặng cực
                    hời, hứng khởi kinh doanh cùng chủ shop KiotViet</a></li>
            <li><a href="https://www.kiotviet.vn/kiotviet-thong-bao-dieu-chinh-gia-ban-san-pham-phan-mem-quan-ly-ban-hang"
                    title="KIOTVIET THÔNG BÁO ĐIỀU CHỈNH GIÁ BÁN SẢN PHẨM PHẦN MỀM QUẢN LÝ BÁN HÀNG">KIOTVIET
                    THÔNG BÁO ĐIỀU CHỈNH GIÁ BÁN SẢN PHẨM PHẦN MỀM QUẢN LÝ BÁN HÀNG</a></li>
            <li><a href="https://www.kiotviet.vn/kiotviet-chi-chu-shop-cach-de-tien-lam-viec-loi-sinh-moi-ngay"
                    title="KiotViet chỉ chủ shop cách để tiền “làm việc”, lời sinh mỗi ngày">KiotViet
                    chỉ chủ shop cách để tiền “làm việc”, lời sinh mỗi ngày</a></li>
            <li><a href="https://www.kiotviet.vn/yeu-nuoc-dau-phai-cho-den-le-lon-cau-chuyen-genz-khoi-nghiep-bang-tinh-yeu-thuong-cua-khach-hang"
                    title="“Yêu nước đâu phải chờ đến lễ lớn!” - Câu chuyện GenZ khởi nghiệp bằng tình yêu thương của khách hàng">“Yêu
                    nước đâu phải chờ đến lễ lớn!” - Câu chuyện GenZ khởi nghiệp bằng tình yêu thương
                    của khách hàng</a></li>
            <li><a href="https://www.kiotviet.vn/quan-ly-cua-hang-vat-tu-nong-nghiep-nhanh-gon-hon-nho-phan-mem-ho-tro" --}}
            {{-- title="Quản lý cửa hàng vật tư nông nghiệp nhanh gọn hơn nhờ phần mềm hỗ trợ">Quản
            lý cửa hàng vật tư nông nghiệp nhanh gọn hơn nhờ phần mềm hỗ trợ</a></li> --}}
        </ul>
    </div>

</div>
