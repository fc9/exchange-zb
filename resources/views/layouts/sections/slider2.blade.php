<!-- slider2 section start -->
<section class="config-area ptb-90" id="config">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>@lang('home.config.header')</h2>
                    <p>@lang('home.config.text')</p>
                    <img src="theme/icons/svg/android.svg" alt="@lang('home.config.android.label')"
                         class="icon-so active" data-slider="slider-android">
                    <img src="theme/icons/svg/ios.svg" alt="@lang('home.config.ios.label')"
                         class="icon-so" data-slider="slider-ios">
                </div>
            </div>
        </div>
        <div class="row flexbox-center" style="margin-top:.1rem">
            <div id="slider-android" class="swiper-container hero-slider swiper-container-horizontal swiper-container-wp8-horizontal">
                <div class="swiper-wrapper" style="transform: translate3d(-4464px, 0px, 0px); transition-duration: 0ms;">
                    @for($i = 0; $i <= 7; $i++)
                        <div class="swiper-slide hero-content-wrap" data-swiper-slide-index="{{ $i }}"
                             style="width: 1116px;">
                            <div class="hero-content-overlay position-absolute w-100 h-100">
                                <div class="container h-100">
                                    <div class="row h-100">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-4 text-center">
                                            <div class="single-showcase-box">
                                                <img src="theme/internet-config/android/screen-{{ $i }}.png" alt="Step {{ $i }}" class="step-image">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-showcase-box step-box">
                                                <h4>@lang('home.config.android.step' . $i . '.title')</h4>
                                                <p>@lang('home.config.android.step' . $i . '.description')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="pagination-wrap position-absolute w-100">
                    <div class="container">
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets text-center">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next flex justify-content-center align-items-center">
                    <span></span>
                </div>
                <div class="swiper-button-prev flex justify-content-center align-items-center">
                    <span></span>
                </div>
            </div>
            <div id="slider-ios" class="swiper-container hero-slider swiper-container-horizontal swiper-container-wp8-horizontal">
                <div class="swiper-wrapper" style="transform: translate3d(-4464px, 0px, 0px); transition-duration: 0ms;">
                    @for($i = 0; $i <= 7; $i++)
                        <div class="swiper-slide hero-content-wrap" data-swiper-slide-index="{{ $i }}"
                             style="width: 1116px;">
                            <div class="hero-content-overlay position-absolute w-100 h-100">
                                <div class="container h-100">
                                    <div class="row h-100">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-4 text-center">
                                            <div class="single-showcase-box">
                                                <img src="theme/internet-config/ios/screen-{{ $i }}.png" alt="Step {{ $i }}" class="step-image">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-showcase-box step-box">
                                                <h4>@lang('home.config.ios.step' . $i . '.title')</h4>
                                                <p>@lang('home.config.ios.step' . $i . '.description')</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="pagination-wrap position-absolute w-100">
                    <div class="container">
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets text-center">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next flex justify-content-center align-items-center">
                    <span></span>
                </div>
                <div class="swiper-button-prev flex justify-content-center align-items-center">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</section><!-- slider2 section end -->