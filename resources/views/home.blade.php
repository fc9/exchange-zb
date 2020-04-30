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
                },
                currencyFormat = function (num) {
                    console.log(num)
                    return (num
                            .toFixed(2)
                            .replace(".", ";")
                            .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
                            .split(",").join(".")
                            .replace(";", ",")
                    )
                },
                amountUpdate = function (value) {
                    amount = value
                    amount = amount === '' || amount === null || isNaN(amount) ? 0 : amount
                    amount *= amount < 0 ? -1 : 1
                    console.log(amount)
                }

            recalc()

            var i = setInterval(function () {
                //console.log(final, current, parcela)
                if (final == current) return
                current = (final > current)
                    ? ((current + parcela >= final) ? final : current + parcela)
                    : ((current + parcela <= final) ? final : current + parcela)

                $(".simulator #income > b").text(currencyFormat(current))
            }, 100)

            $('#amount').change(function () {
                amountUpdate($(this).val())
                recalc()
            })

            $('#amount').keyup(function () {
                amountUpdate($(this).val())
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