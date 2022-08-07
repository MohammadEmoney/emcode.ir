<header id="masthead" class="site-header">
    <nav id="primary-navigation" class="site-navigation">
        <div class="container">

            <div class="navbar-header">

                <a class="site-title" href="{{ route('home') }}">
                    <img src="{{ asset('img/EM_Logo.png') }}" alt="EM_CODE" width="30px">
                    <span>Em</span>Code
                </a>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li class="{{ Route::is('home') ? "active" : "" }}"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    <li class="{{ Route::is('front.portfolios.*') ? "active" : "" }}"><a href="{{ route('front.portfolios.index') }}">{{ __('Portfolio') }}</a></li>
                    <li class="{{ Route::is('blog.*') ? "active" : "" }}"><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>
                    <li class="{{ Route::is('front.contacts.*') ? "active" : "" }}"><a href="{{ route('front.contacts.show') }}">{{ __('Contact') }}</a></li>
                    {{-- <li class="{{ routeIs('/') ? "active" : "" }}"><a href="ui-elements.html">UI Elements</a></li> --}}

                </ul>

            </div>

        </div>
    </nav><!-- /.site-navigation -->
</header><!-- /#mastheaed -->
