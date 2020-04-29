<div class="plataforms-slide">
    @foreach($tickers as $ticker)
        <div class="shadow card card-slide">
            <img src="/theme/btc/{{ $ticker['symbol'] }}.svg" alt="{{ $ticker['symbol'] }} " style="max-width:">
            <div>{{ $ticker['name'] }} </div>
            <div class="date">{{ $ticker['date'] }}</div>
            <h2>$ {{ $ticker['bid'] }}</h2>
            <div class="details {{ $ticker['color'] }}">
                <span class="{{ $ticker['color'] }}">${{ $ticker['vwap'] }}</span>
                <span class="{{ $ticker['color'] }}">({{ $ticker['daily_change'] }}%)</span>
                <span class="{{ $ticker['color'] }}">24H</span>
            </div>
        </div>
    @endforeach
</div>