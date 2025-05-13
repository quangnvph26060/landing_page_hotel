<div class="main-page">
    <div data-v-50fe0c44="" class="price-service">
        <div data-v-50fe0c44="" class="container">
            <p data-v-50fe0c44="" class="price-title mt-5">Phí dịch vụ Khách sạn &amp; Homestay</p>
            <div data-v-50fe0c44="" class="price-service-items" style="margin-bottom: 20px !important">

                @forelse ($prices as $item)
                    <div data-v-50fe0c44="" data-id="{{ $item->id }}"
                        class="price-service-item {{ $item->recommended == 'true' ? 'profession' : '' }}">
                        <div data-v-50fe0c44="" class="wrap-price">
                            <p data-v-50fe0c44="" class="price-packagename">{{ $item->name }} <span data-v-50fe0c44=""
                                    class="sub-title {{ $item->recommended == 'true' ? '' : 'd-none' }}">Nổi bật</span>
                            </p>
                            <div data-v-50fe0c44="" class="price-info">
                                <span data-v-50fe0c44="" class="price-value">{{ number_format($item->price) }} <em
                                        data-v-50fe0c44="">đ</em></span>
                                <span data-v-50fe0c44="" class="price-group">
                                    <span data-v-50fe0c44="" class="price-shop h-100" style="min-height: 40px;  display: block;">
                                        @php
                                            $branchPrices = json_decode($item->branch_price, true) ?? [];
                                        @endphp

                                        @forelse ($branchPrices as $value)
                                            {{ $value['value'] }}
                                        @empty
                                        @endforelse
                                    </span>
                                    <div data-v-50fe0c44="" class="wrap-button-register"><a
                                            href="{{ route('register') }}" data-v-50fe0c44=""
                                            class="btn box-popup-register btn-primary">
                                            Dùng thử miễn phí </a></div><span data-v-50fe0c44=""
                                        class="price-user">{!! $item->description !!}</span>
                                </span>
                                <p data-v-50fe0c44="" class="price-description">
                                <ul data-v-50fe0c44="" class="package-feature-main">

                                    @php
                                        $features = json_decode($item->features, true) ?? [];
                                    @endphp

                                    @forelse ($features as $value)
                                        <li data-v-50fe0c44="" class="package-description-detail"><svg
                                                data-v-50fe0c44="" class="svg-inline--fa fa-check" aria-hidden="true"
                                                focusable="false" data-prefix="far" data-icon="check" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path class="" fill="currentColor"
                                                    d="M441 103c9.4 9.4 9.4 24.6 0 33.9L177 401c-9.4 9.4-24.6 9.4-33.9 0L7 265c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l119 119L407 103c9.4-9.4 24.6-9.4 33.9 0z">
                                                </path>
                                            </svg> {{ $value['value'] }}
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>

    </div>

</div>
