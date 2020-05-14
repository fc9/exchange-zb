{{--<div class="nav-item dropdown" style="position:absolute;width:100%;top:0rem;right:0rem;text-align:right;border:1px solid red">--}}
    <div style="width:65px;height:32px">
    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" title="@lang('home.language')"
       data-expanded="false" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:.2rem">
        <i class="flag-icon @lang('home.class-flag-icon')"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right animated bounceInDown" style="overflow:hidden">
        <?php foreach(\App\Lang::getSupportedLanguages() as $lang): ?>
        <a class="dropdown-item" href="{{ url('locale/' . $lang) }}">
            <i class="flag-icon @lang('home.class-flag-icon', [], $lang)"></i>&nbsp;@lang('home.language', [], $lang)
        </a>
        @endforeach
    </div>
</div>
