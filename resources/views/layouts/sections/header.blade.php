<!-- header section start -->
<header class="header bg-gradient-0">
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
                        <li><a class="nav-link" href="{{ route('home') }}/#section1">@lang('#nav Market')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#section2">@lang('#nav Simple and Easy')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#section3">@lang('#nav Peer-to-Peer')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#contact">@lang('#nav Contact')</a></li>
                        <li>
                            <a target="_blank" class="btn btn-white" href="@lang('#link-login')">
                                @lang('Login')&nbsp;
                            </a>
                        </li><li>
                            <a target="_blank" class="btn" href="@lang('#link-register')">
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