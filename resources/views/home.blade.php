@extends('layouts.master')

@section('page.name', __('#name'))

@push('css')
@endpush

@section('page.body')

    @include('layouts.sections.slider1')

    {{--@include('layouts.sections.market')--}}

    @include('layouts.sections.columns2')

    @include('layouts.sections.steps')

    @include('layouts.sections.counters')

    @include('layouts.sections.p2p')

    {{--    @include('layouts.sections.columns2b')--}}

    {{--@include('layouts.sections.video')--}}

    {{--    @include('layouts.sections.video2')--}}

    {{--    @include('layouts.sections.slider3')--}}

    {{--    @include('layouts.sections.slider2')--}}

    @include('layouts.sections.contact')

    @include('layouts.sections.form')

@endsection

@push('scripts')
    {{--    <script>--}}
    {{--        (function ($) {--}}
    {{--            //"use strict";--}}

    {{--            /*------------------------------}}
    {{--            START - Simulator--}}
    {{--            ------------------------------ */--}}
    {{--            var recalc = function () {--}}
    {{--                    final = (amount / purchase) * today--}}
    {{--                    parcela = (final - current) / 10--}}
    {{--                    //console.log(quotes['end'], quotes['start'], 'btc = ' + btc, final, current, parcela)--}}
    {{--                },--}}
    {{--                currencyFormat = function (num) {--}}
    {{--                    console.log(num)--}}
    {{--                    return (num--}}
    {{--                            .toFixed(2)--}}
    {{--                            .replace(".", ";")--}}
    {{--                            .replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')--}}
    {{--                            .split(",").join(".")--}}
    {{--                            .replace(";", ",")--}}
    {{--                    )--}}
    {{--                },--}}
    {{--                amountUpdate = function (value) {--}}
    {{--                    amount = value--}}
    {{--                    amount = amount === '' || amount === null || isNaN(amount) ? 0 : amount--}}
    {{--                    amount *= amount < 0 ? -1 : 1--}}
    {{--                    console.log(amount)--}}
    {{--                }--}}

    {{--            recalc()--}}

    {{--            var i = setInterval(function () {--}}
    {{--                //console.log(final, current, parcela)--}}
    {{--                if (final == current) return--}}
    {{--                current = (final > current)--}}
    {{--                    ? ((current + parcela >= final) ? final : current + parcela)--}}
    {{--                    : ((current + parcela <= final) ? final : current + parcela)--}}

    {{--                $(".simulator #income > b").text(currencyFormat(current))--}}
    {{--            }, 100)--}}

    {{--            $('#amount').change(function () {--}}
    {{--                amountUpdate($(this).val())--}}
    {{--                recalc()--}}
    {{--            })--}}

    {{--            $('#amount').keyup(function () {--}}
    {{--                amountUpdate($(this).val())--}}
    {{--                recalc()--}}
    {{--            })--}}

    {{--            $(".timeline .single-item > span").on("click", function () {--}}
    {{--                if ($(this).hasClass("active")) {--}}
    {{--                    return--}}
    {{--                } else {--}}
    {{--                    purchase = $(this).data('price')--}}
    {{--                    recalc()--}}

    {{--                    $(".timeline .single-item > span").removeClass("active");--}}
    {{--                    $(this).addClass("active");--}}
    {{--                }--}}
    {{--            })--}}
    {{--        })(jQuery);--}}
    {{--    </script>--}}
@endpush