<div class="card-box">
    <div class="container">
        <div class="box-title text-center">

            <h3 class="card-heading mb-0">{{ $titleFunction->title ?? '' }}</h3>
            <div class="quantity-register d-flex justified-content-center align-items-center"><svg
                    class="svg-inline--fa fa-arrow-trend-up quantity-icon" aria-hidden="true" focusable="false"
                    data-prefix="far" data-icon="arrow-trend-up" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 576 512">

                </svg><span class="industry-txt mb-0" style="color: #ff0100">{{ $titleFunction->content ?? '' }}</span></div>
        </div>
        <div class="row card-box-items">
            @forelse ($function as $index => $item)
                <div data-id="{{ $index }}" class="col-12 col-md-6 col-xl-10">
                    <div class="card-item" style="visibility: visible; background-color: #f2f8fe;">
                        <div class="{{ $index % 2 != 0 ? 'flex-row-reverse' : '' }}  row m-0">
                            <div class="card-img col-md-4">
                                <a style="background-color:#f2f8fe;" target="_blank">
                                    <img src="{{ showImage($item->image ?? '') }}" format="webp"
                                        alt="{{ $item->title }}">
                                </a>
                            </div>
                            <div class="card-content col-md-8">
                                <div class="card-wrap"><a class="card-title" target="_blank">{{ $item->title }}</a>
                                    <p>{!! $item->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse



        </div>
        <div class="box-footer"><a href="{{ route('register') }}" class="btn btn-primary box-popup-register"> Dùng thử miễn phí
            </a></div>
    </div>
</div>
