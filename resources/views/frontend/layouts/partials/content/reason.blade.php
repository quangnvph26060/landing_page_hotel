<style>
    .feature-box {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        height: 90%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .feature-header {
        background-color: #e60000;
        color: white;
        border-radius: 10px 10px 0 0;
        text-align: center;
        padding: 15px 10px 5px;
        font-weight: bold;
        font-size: 18px;
    }

    .feature-header span {
        display: block;
        font-size: 14px;
        font-weight: bold;
    }

    .feature-box ul li {
        margin-bottom: 10px;
        font-size: 14px;
    }

    .feature-box i {
        color: red;
        margin-right: 8px;
    }

    .btn-demo {
        background-color: red;
        color: white;
        border-radius: 25px;
        padding: 10px 20px;
        font-weight: bold;
        border: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .video-box {
        margin-bottom: 20px;
        text-align: center;
    }

    .video-box video {
        border-radius: 10px;
        width: 100%;
        height: 90%;
    }

    .video-caption {
        font-size: 13px;
        color: #555;
        margin-top: 5px;
        font-style: italic;
    }
    .list-unstyled{
        line-height: 33px;
    }

    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
        width: 100%;
        max-width: 400px;
    }

    .feature-list li {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .feature-list i {
        color: red;
        margin-right: 10px;
        min-width: 20px;
        text-align: center;
        margin-top: 2px;
    }
</style>

<div class="container pb-5">
    <div class="row justify-content-center">
        <!-- Cột trái -->
        <div class="col-md-5 mb-4 d-flex flex-column">
            <div class="feature-header">
                TẠI SAO NÊN CHỌN?<br />
                <span>FASTHOTEL</span>
            </div>
            <div class="feature-box">
                <ul class="list-unstyled feature-list">
                @php
                    $reasons = json_decode($reason->reason, true) ?? [];
                    //  dd($reasons);
                @endphp

                @forelse ($reasons as $item)
                    <li><i class="fa-solid fa-check-circle"></i>{{ $item['value'] }}</li>
                @empty
                @endforelse

                </ul>
                <div class="text-center mt-3">
                    <a href="{{ route('register') }}" class="btn-demo">Dùng thử miễn phí</a>
                </div>
            </div>
        </div>

        <!-- Cột phải - Video -->
        <div class="col-md-5 d-flex flex-column">
            <div class="video-box">
                <iframe
                    width="100%"
                    height="200"
                    src="{{ asset('storage/'.$reason->video_1_url) }}"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
                <div class="video-caption">Hướng dẫn sử dụng tính năng...</div>
            </div>

            <div class="video-box">
                <iframe
                    width="100%"
                    height="200"
                    src="{{ asset('storage/'.$reason->video_1_url) }}"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
                <div class="video-caption">Hướng dẫn sử dụng tính năng...</div>
            </div>

        </div>
    </div>
</div>
