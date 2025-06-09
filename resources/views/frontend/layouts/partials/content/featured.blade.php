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
        /* object-fit: cover; */
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
        /* object-fit: cover; */
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
                @foreach($post_highlight->take(2) as $post)
                    <div class="col-md-6">
                        <div class="news-card images_new">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="news-image">
                            <div class="card-body px-0">
                                <a class="news-title" href="{{ route('post.detail', ['slug' => $post->slug]) }}">
                                    {{ $post->title }}
                                </a>
                                <p class="color-gray">{!! \Illuminate\Support\Str::limit(strip_tags($post->description), 100) !!}</p>
                                <p class="news-date">{{ $post->created_at->format('d/m/Y H:i') }}</p>
                                <a class="btn btn-readmore" href="{{ route('post') }}">Xem thêm <span>→</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Cột bên phải -->
        <div class="col-md-4 d-flex">
            <div class="sidebar-container w-100">
                @foreach($post_highlight->slice(2) as $post)
                    <div class="sidebar-news d-flex">
                        <img src="{{ asset('storage/'.$post->image) }}" alt="sidebar-image">
                        <a class="news-title">{{ \Illuminate\Support\Str::limit($post->title, 80) }}</a>
                    </div>
                @endforeach
            </div>
        </div>


    </div>
</div>
