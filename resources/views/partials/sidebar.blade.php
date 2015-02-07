<aside class="Sidebar">
    <div class="_content">
        <div class="_inner">
            <div class="_inner2">
                @include('partials.navigation')

                <div class="_padded">

                    @yield('sidebar')

                    <hr/>

                    @include('partials.social')

                    <hr/>

                </div>

                @include('partials.nav-tertiary')

            </div>
        </div>
    </div>

    <div class="_stripe">
        <button class="js_openSidebar navButton -menu">
            <span class="sr-only">Open Menu</span>
        </button>

        @yield('sidebar-buttons')

        <a href="{{ url() }}"><h3 class="_logo">DAN POWELL</h3></a>

        <!-- <img src="{{ url() }}/img/logo_vert.svg" alt="Autumn Rain" class="_logo" onerror="this.onerror=null; this.src='{{ url() }}/img/logo_vert@2x.png'"> -->
    </div>
</aside>

<aside class="MobileHeader">
    <button class="js_openSidebar navButton">
        <span class="sr-only">Open Menu</span>
    </button>

    @yield('sidebar-buttons')

    <a href="{{ url() }}"><h3 class="_logo">DAN POWELL</h3></a>

    <!-- <img src="{{ url() }}/img/logo_vert.svg" alt="Autumn Rain" class="_logo" onerror="this.onerror=null; this.src='{{ url() }}/img/logo_vert@2x.png'"> -->
</aside>