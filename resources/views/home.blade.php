@extends('layouts.master')

@section('page.name', __('home.name'))

@push('css')
@endpush

@section('page.body')

    @include('layouts.sections.main')

    @include('layouts.sections.market')

    @include('layouts.sections.simple-and-easy')

    {{--@include('layouts.sections.video')--}}

    {{--@include('layouts.sections.slider3')--}}

    {{--@include('layouts.sections.slider2')--}}

    {{--@include('layouts.sections.apn')--}}

    @include('layouts.sections.counter')

    @include('layouts.sections.p2p')

    @include('layouts.sections.more')

    @include('layouts.sections.contact')

    @include('layouts.sections.form')

@endsection

@push('scripts')
<script>
(function ($) {
    //"use strict";

    /*----------------------------
    START - Simulator
    ------------------------------ */
    var recalc = function () {
    btc = Math.random() * (quotes['end'] - quotes['start']) + quotes['start']
    final = amount * btc
    parcela = (final - current) / 10
    //console.log(quotes['end'], quotes['start'], 'btc = ' + btc, final, current, parcela)
    }

    recalc()

    var i = setInterval(function () {
    //console.log(final, current, parcela)
    if (final == current) return
    current = (final > current)
    ? ((current + parcela >= final) ? final : current + parcela)
    : ((current + parcela <= final) ? final : current + parcela)

    $(".simulator #income > b").text(current.toFixed(2))
    }, 100)

    $('#amount').keyup(function () {
    amount = $(this).val()
    amount = amount === '' || amount === null ? 1 : amount
    console.log(amount)
    recalc()
    })

    $(".timeline .single-item > span").on("click", function () {
    if ($(this).hasClass("active")) {
    return
    } else {
    // final = $(this).data('price')
    quotes = {'start': $(this).data('start'), 'end': $(this).data('end')}
    recalc()

    $(".timeline .single-item > span").removeClass("active");
    $(this).addClass("active");
    }
    })
    })(jQuery);
</script>
@endpush