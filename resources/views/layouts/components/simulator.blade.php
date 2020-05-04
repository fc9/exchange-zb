<div class="row flexbox-center simulator" style="margin-top: 3.5rem">
    <div class="col-lg-4">
        <div class="simulator-box">
            <p>@lang('If you bought')</p>
            <span>
                <span>$</span><input type="number" id="amount" value="500" placeholder="0">
            </span>
            <p>@lang('in <b>bitcoins</b>')</p>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="box">
            <div class="timeline">
                <div class="timeline-area">
                    <div class="label">@lang('in')</div>
                    <div class="line-area"></div>
                    @foreach($quotes as $price)
                    <div class="single-item">
                        <span {{ $price['year'] == '2010' ? 'class=active' : '' }} data-price="{{$price['price']}}">
                            {{$price['year']}}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
            <p class="conclusion">@lang('Today you would have approximately')</p>
            <span id="income">
                $ <b>0</b>
            </span>
            <script>
                var amount = 500,
                    current = 0,
                    purchase = {{ $initial['price'] }},
                    today = {{ $btcToday  }},
                    final = 0,
                    parcela = 0
            </script>
        </div>
    </div>
</div>