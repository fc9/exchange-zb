<!-- market section start -->
<section class="market ptb-90" id="market">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2 class="thin">@lang('The best way to')</h2>
                    <h2>@lang('keep up with the markets')</h2>
                    <p>@lang('')</p>
                </div>
            </div>
            <div class="col-lg-12">
                @include('layouts.components.currencies')
            </div>
            <div class="col-lg-12">
                <h4 class="subtitle">&nbsp; &nbsp; &nbsp; @lang('Simulate and Check') &nbsp; &nbsp; &nbsp;</h4>
            </div>
        </div>

        @include('layouts.components.simulator')

    </div>
</section><!-- market section end -->
