{{--<div class="nav-item dropdown" style="position:absolute;width:100%;top:0rem;right:0rem;text-align:right;border:1px solid red">--}}
<div style="display:inline-block;width:32px;height:32px">
    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" title="@lang('#lang')"
       data-expanded="false" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:0">
        <i class="flag-icon @lang('#class-flag-icon')"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-left animated bounceInDown" style="overflow:hidden">
        <?php foreach (\App\Lang::getSupportedLanguages() as $lang): ?>
        @if($lang !== '')
            <a class="dropdown-item" href="{{ url('locale/' . $lang) }}">
                <i class="flag-icon @lang('#class-flag-icon', [], $lang)"></i>&nbsp;@lang('#language', [], $lang)
            </a>
        @endif
        @endforeach
    </div>
</div>
