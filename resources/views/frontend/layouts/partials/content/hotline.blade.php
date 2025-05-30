<div class="hotline-box pt-0">
    <div class="container">
        <div class="hotline-top">
            <h3 class="hotline-title"> Hãy để chúng tôi đồng hành kinh doanh cùng bạn </h3><a href="{{ route('register') }}"
                class="btn btn-primary box-popup-register"> Dùng thử miễn phí </a>
        </div>
        <div class="row hotline-list">

            @forelse ($technologie as $item )
            <div data-id="3" class="col-xl-3 col-md-6">
                <div class="hotline-item">
                    <h4 class="hotline-name">
                        <span class="hotline-icon color-primary"><i style="display: flex; align-items: center;" class="{{ $item->icon }}"></i>
                        </span>
                        </span>{{ $item->title }}</span>
                    </h4>
                    <div class="font-small-1 mb-0">
                       {!! $item->description !!}
                    </div>
                </div>
            </div>
            @empty

            @endforelse
            <!--]-->
        </div>
    </div>
</div>
