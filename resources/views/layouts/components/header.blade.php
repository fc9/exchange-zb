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
                        <li><a class="nav-link active" href="{{ route('home') }}/#home">@lang('Home')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#market">@lang('Market')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#simple-and-easy">@lang('Simple and Easy')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#p2p">@lang('Peer-to-Peer')</a></li>
                        <li><a class="nav-link" href="{{ route('home') }}/#contact">@lang('Contact')</a></li>
                        <li>
                            <a target="_blank" class="btn btn-black" href="@lang('#link-login')">
                                @lang('Login')&nbsp;
                            </a>
                        </li><li>
                            <a target="_blank" class="btn btn-yellow" href="@lang('#link-exchange')">
                                @lang('Create your account')
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header><!-- header section end -->