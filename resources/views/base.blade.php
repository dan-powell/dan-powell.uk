@include('partials.htmlhead')

<body class="@yield('body-class', 'Base')" ontouchstart="">

    @include('partials.sidebar')

    <section class="_main" id="js_content">
        @yield('main')
    </section>

    @include('partials.htmlfoot')

</body>
</html>

