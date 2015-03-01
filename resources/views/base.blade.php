@include('partials.htmlhead')

<body class="@yield('class', 'Base') -showSidebar" ontouchstart="">

    @include('partials.sidebar')

    <section class="_main" id="js_content">
        @yield('main')
    </section>

    @include('partials.htmlfoot')

</body>
</html>

