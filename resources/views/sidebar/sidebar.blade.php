<aside class="Sidebar">
    <div class="Sidebar-stripe">
        <a href="{{ config('app.url') }}" class="Sidebar-home">
            <h1 class="Sidebar-home-title">
                <span class="Sidebar-home-text Sidebar-home-text--dan">Dan</span>
                <span class="Sidebar-home-text Sidebar-home-text--powell">Powell</span>
                <span class="Sidebar-home-text Sidebar-home-text--web">Web</span>
                <span class="Sidebar-home-text Sidebar-home-text--design">Design</span>
            </h1>
        </a>
        <button class="Sidebar-button Sidebar-button--menu js-sidebar">
            <svg class="Sidebar-button-icon" viewBox="0 0 512 512">
                <use xlink:href="{{ asset('img/sidebar/navigation.svg#menu') }}"></use>
            </svg>
            <span class="Sidebar-button-inner">
                <span class="Sidebar-button-text Sidebar-button-text--open">Open Menu</span>
                <span class="Sidebar-button-text Sidebar-button-text--close">Close Menu</span>
            </span>
        </button>
        <a class="Sidebar-button" href="{{ config('app.url') }}">
            <svg class="Sidebar-button-icon" viewBox="0 0 512 512">
                <use xlink:href="{{ asset('img/sidebar/navigation.svg#home') }}"></use>
            </svg>
            <span class="Sidebar-button-inner">
                <span class="Sidebar-button-text">Home</span>
            </span>
        </a>
        <a class="Sidebar-button" href="{{ config('app.url') }}">
            <svg class="Sidebar-button-icon" viewBox="0 0 512 512">
                <use xlink:href="{{ asset('img/sidebar/navigation.svg#return') }}"></use>
            </svg>
            <span class="Sidebar-button-inner">
                <span class="Sidebar-button-text">Projects</span>
            </span>
        </a>
    </div>
    <div class="Sidebar-overlay">
        <div class="Sidebar-nav">
            <h1 class="Sidebar-title">
                <span class="Sidebar-title-h1">Dan Powell</span>
                <span class="Sidebar-title-h2">Web Designer</span>
            </h1>
            <nav class="Nav">
                <ul class="Nav-root">
                    <li class="Nav-item">
                        <a class="Nav-link" href="{{ config('app.url') }}">
                            <svg class="Nav-link-icon" viewBox="0 0 512 512">
                                <use xlink:href="{{ asset('img/sidebar/navigation.svg#home') }}"></use>
                            </svg>
                            <span class="Nav-link-inner">
                                <span class="Nav-link-text">About</span>
                            </span>
                        </a>
                    </li>
                    <li class="Nav-item">
                        <a class="Nav-link" href="">
                            <svg class="Nav-link-icon" viewBox="0 0 512 512">
                                <use xlink:href="{{ asset('img/sidebar/navigation.svg#design') }}"></use>
                            </svg>
                            <span class="Nav-link-inner">
                                <span class="Nav-link-text">Portfolio</span>
                            </span>
                        </a>
                    </li>
                    <li class="Nav-item">
                        <a class="Nav-link" href="">
                            <svg class="Nav-link-icon" viewBox="0 0 512 512">
                                <use xlink:href="{{ asset('img/sidebar/navigation.svg#education') }}"></use>
                            </svg>
                            <span class="Nav-link-inner">
                                <span class="Nav-link-text">Experience</span>
                            </span>
                        </a>
                    </li>
                    <li class="Nav-item">
                        <a class="Nav-link" href="">
                            <svg class="Nav-link-icon" viewBox="0 0 512 512">
                                <use xlink:href="{{ asset('img/sidebar/navigation.svg#work') }}"></use>
                            </svg>
                            <span class="Nav-link-inner">
                                <span class="Nav-link-text">Skills</span>
                            </span>
                        </a>
                        <ul class="Nav-sub">
                            <li class="Nav-item">
                                <a class="Nav-link" href="">
                                    <span class="Nav-link-inner">
                                        <span class="Nav-link-text">Sub menu item</span>
                                    </span>
                                </a>
                            </li>
                            <li class="Nav-item">
                                <a class="Nav-link" href="">
                                    <span class="Nav-link-inner">
                                        <span class="Nav-link-text">Another sub menu item</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="Nav-item">
                        <a class="Nav-link" href="">
                            <svg class="Nav-link-icon" viewBox="0 0 512 512">
                                <use xlink:href="{{ asset('img/sidebar/navigation.svg#projects') }}"></use>
                            </svg>
                            <span class="Nav-link-inner">
                                <span class="Nav-link-text">Projects</span>
                            </span>
                        </a>
                    </li>
                    <li class="Nav-item">
                        <a class="Nav-link" href="" data-text="A menu link with a really long name to test the design.">
                            <svg class="Nav-link-icon" viewBox="0 0 512 512">
                                <use xlink:href="{{ asset('img/sidebar/navigation.svg#about') }}"></use>
                            </svg>
                            <span class="Nav-link-inner">
                                <span class="Nav-link-text">A menu link with a really long name to test the design.</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
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
            <a class="Sidebar-links-item" href="">Privacy</a>
            <a class="Sidebar-links-item" href="">Cookies</a>
        </div>
    </div>
</aside>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}" type="text/css">
@endpush

@push('foot')
    <script src="{{ asset('js/sidebar.js') }}"></script>
@endpush
