<style>
    .news-card img,
    .sidebar-news img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .news-title {
        font-weight: bold;
        font-size: 15px;
        margin-bottom: 0.2rem !important;
    }
    .images_new img{
        width: 384px;
        height: 256px;
        margin-right: 10px;
        object-fit: cover;
        display: block;
    }

    .news-date {
        color: rgb(133, 144, 157);
        font-size: 1.4rem;
        font-weight: 400;
        line-height: 20px;
        margin-bottom: 0.8rem;
        margin-top: 0.5rem;
        padding-bottom: 0px;
    }

    .btn-readmore {
        background-color: #ff0100 ;
        color: white;
        border: none;
        font-size: 13px;
        padding: 5px 25px;
        border-radius: 20px;
    }
    .btn-readmore span{
        margin-left: 10px;
        width: 15px;
    }

    .sidebar-news p {
        font-size: 14px;
        margin-top: 6px;
    }

    .sidebar-container {
        display: flex;
        flex-direction: column;
        gap: 16px;
        height: 100%;
        overflow: hidden;
    }

    .sidebar-news {
        display: flex;
        justify-content: flex-start;
        margin-bottom: 10px;
    }

    .sidebar-news img {
        width: 180px;
        height: 120px;
        margin-right: 10px;
        object-fit: cover;
        display: block;
    }
    .btn:hover{
        color: #ffff;
    }
</style>

<div class="container mb-5">
    <div class="box-title mt-0 mb-5">
        <h3 class="customer-heading mb-0">Tin tức nổi bật</h3>
    </div>
    <div class="row">
        <!-- Cột bên trái -->
        <div class="col-md-8">
            <div class="row g-4">
                <!-- Bài viết 1 -->
                <div class="col-md-6">
                    <div class="news-card images_new">
                        <img  src="https://images2.thanhnien.vn/528068263637045248/2024/1/25/e093e9cfc9027d6a142358d24d2ee350-65a11ac2af785880-17061562929701875684912.jpg"
                            alt="news-image">
                        <div class="card-body px-0">
                            <a class="news-title">
                                TOP 10 sản phẩm & dịch vụ tín dụng 2024 - Nhóm ngành sản phẩm, dịch vụ công nghệ
                            </a>
                            <p class="color-gray">Ngày 20/12 vừa qua, tại chương trình Tin Dùng Việt Nam 2024 do Tạp chí
                                Kinh tế Việt…</p>
                            <p class="news-date">28/2/2024 01:55</p>
                            <button class="btn btn-readmore">Xem thêm <span>→</span></button>
                        </div>
                    </div>
                </div>

                <!-- Bài viết 2 -->
                <div class="col-md-6">
                    <div class="news-card images_new">
                        <img src="https://imagedelivery.net/ZeGtsGSjuQe1P3UP_zk3fQ/ede24b65-497e-4940-ea90-06cc2757a200/storedata"
                            alt="news-image">
                        <div class="card-body px-0">
                            <a class="news-title">
                                TOP 10 sản phẩm & dịch vụ tín dụng 2024 - Nhóm ngành sản phẩm, dịch vụ công nghệ
                            </a>
                            <p class="color-gray">Ngày 20/12 vừa qua, tại chương trình Tin Dùng Việt Nam 2024 do Tạp chí
                                Kinh tế Việt…</p>
                            <p class="news-date">28/2/2024 01:55</p>
                            <button class="btn btn-readmore">Xem thêm <span>→</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cột bên phải -->
        <!-- Cột bên phải -->
        <div class="col-md-4 d-flex">
            <div class="sidebar-container w-100">
                <div class="sidebar-news d-flex">
                    <img src="https://images2.thanhnien.vn/528068263637045248/2024/1/25/e093e9cfc9027d6a142358d24d2ee350-65a11ac2af785880-17061562929701875684912.jpg"
                        alt="sidebar-image">
                    <a class="news-title">Tích hợp giải pháp quản lý nhà vệ sinh giúp trải nghiệm khách sạn...</a>
                </div>
                <div class="sidebar-news d-flex">
                    <img src="https://images2.thanhnien.vn/528068263637045248/2024/1/25/e093e9cfc9027d6a142358d24d2ee350-65a11ac2af785880-17061562929701875684912.jpg"
                        alt="sidebar-image">
                    <a class="news-title">Tích hợp giải pháp quản lý nhà vệ sinh giúp trải nghiệm khách sạn...</a>
                </div>
                <div class="sidebar-news d-flex">
                    <img src="https://images2.thanhnien.vn/528068263637045248/2024/1/25/e093e9cfc9027d6a142358d24d2ee350-65a11ac2af785880-17061562929701875684912.jpg"
                        alt="sidebar-image">
                    <a class="news-title">Tích hợp giải pháp quản lý nhà vệ sinh giúp trải nghiệm khách sạn...</a>
                </div>
            </div>
        </div>

    </div>
</div>
