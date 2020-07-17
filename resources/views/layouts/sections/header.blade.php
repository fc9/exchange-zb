<!-- header section start -->
<header class="header">
    <div class="container">
        <div class="row flexbox-center">

            <div class="col-lg-2 col-md-3 col-6">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        @include('layouts.components.logo')
                    </a>
                </div>
            </div>

            <div class="col-lg-10 col-md-9 col-6">
                <div class="responsive-menu"></div>

                <div class="mainmenu">
                    <ul id="primary-menu">
                        <li><a class="nav-link active" href="{{ route('home') }}/#home">@lang('#nav Home')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#section1">@lang('#nav section1')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#section2">@lang('#nav section2')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#section3">@lang('#nav section3')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#section4">@lang('#nav section4')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#contact">@lang('#nav Contact')</a></li>
                        <li>
                            <a target="_blank" class="btn" href="@lang('#link-backoffice')">
                                @lang('Login')&nbsp;
                            </a>
                        </li><li>
                            <a target="_blank" class="btn btn-g" href="@lang('#link-backoffice')">
                                @lang('Create your account')
                            </a>
                        </li><li>
                            @include('layouts.components.dropdown-lang')
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header><!-- header section end -->