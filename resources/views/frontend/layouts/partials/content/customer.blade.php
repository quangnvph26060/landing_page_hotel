<div class="customer-box" style="background-color:#ffffff !important;">
    <div class="container">
        <div class="box-title mt-0 mb-5">
            <h3 class="customer-heading mb-0">Khách hàng của chúng tôi</h3>
        </div>
        <div class="row customer-list" id="customer-load">
            @foreach ($post as $index => $item )
            {{-- href="{{ $item->slug }}" --}}
            <div data-id="{{ $index }}" class="col-xl-4 col-md-6">
                <div class="customer-item"><a
                        target="_blank" class="images-form"><img format="webp" alt="customer-form-image" lazy="loaded"
                            src="{{ showImage($item->image ?? '') }}"></a>
                    <div class="content-form">
                        <h4 class="customer-title"><a
                                target="_blank">{{ $item->title }}</a></h4>
                        <p class="font-small mb-0">{{ $item->address }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
