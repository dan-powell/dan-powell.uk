
<aside class="Sidebar">
    <div class="Sidebar-stripe">
        <button class="Sidebar-button Sidebar-button--menu js-sidebar">
            <svg class="Sidebar-button-icon" viewBox="0 0 512 512">
                <use xlink:href="{{ asset('img/sidebar/navigation.svg#menu') }}"></use>
            </svg>
            <span class="Sidebar-button-inner">
                <span class="Sidebar-button-text Sidebar-button-text--open">Open Menu</span>
                <span class="Sidebar-button-text Sidebar-button-text--close">Close Menu</span>
            </span>
        </button>
        @yield('buttons')
        <a href="{{ config('app.url') }}" class="Sidebar-home">
            <h1 class="Sidebar-home-title">
                <span class="Sidebar-home-text Sidebar-home-text--dan">Dan</span>
                <span class="Sidebar-home-text Sidebar-home-text--powell">Powell</span>
                <span class="Sidebar-home-text Sidebar-home-text--web">Web</span>
                <span class="Sidebar-home-text Sidebar-home-text--design">Design</span>
            </h1>
        </a>
    </div>
    <div class="Sidebar-overlay">
        <div class="Sidebar-nav">
            <h1 class="Sidebar-title">
                <span class="Sidebar-title-h1">@yield('title', 'Dan Powell')</span>
                @hasSection('subtitle')
                    <span class="Sidebar-title-h2">@yield('subtitle')</span>
                @endif
            </h1>
            @yield('navigation')
        </div>
        <div class="Sidebar-about">
            <p class="Sidebar-about-text Sidebar-about-text--more">view some of my</p>
            <a class="Sidebar-about-link" href="">
                <svg class="Sidebar-about-link-icon" viewBox="0 0 512 512">
                    <use xlink:href="{{ asset('img/sidebar/sidebar.svg#projects') }}"></use>
                </svg>
                <span class="Sidebar-about-link-text">Projects</span>
            </a>
            <p class="Sidebar-about-text Sidebar-about-text--more">or checkout my code on</p>
            <a class="Sidebar-about-link" href="">
                <svg class="Sidebar-about-link-icon" viewBox="0 0 512 512">
                    <use xlink:href="{{ asset('img/sidebar/sidebar.svg#github') }}"></use>
                </svg>
                <span class="Sidebar-about-link-text">Github</span>
            </a>
        </div>
        <div class="Sidebar-cheeky">
            <img class="Sidebar-cheeky-img" src="{{ asset('img/sidebar/cheeky.svg') }}"/>
        </div>
        <div class="Sidebar-links">
            <a class="Sidebar-links-item" href="">Sitemap</a>
            <a class="Sidebar-links-item" href="{{ route('page', 'privacy') }}">Privacy</a>
            <a class="Sidebar-links-item" href="{{ route('page', 'cookies') }}">Cookies</a>
        </div>
    </div>
</aside>
