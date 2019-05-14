<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    @yield('meta')
    <link type="text/plain" rel="author" href="{{ url('humans.txt') }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/favicons/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/plugins.css?rev=1423329234356') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css?rev=1423329234356') }}" type="text/css">

    @stack('styles')

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="//fonts.googleapis.com/css?family=Caveat|Aldrich|@stack('fonts')" rel="stylesheet">

    {{-- <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-20402828-1', 'auto');
        ga('send', 'pageview');
    </script> --}}

    @stack('head')

    <script defer src="{{ asset('js/sidebar.js') }}"></script>

</head>

@section('title', 'Dan Powell')
@section('subtitle', 'Web Designer')

@section('buttons')
    @component('sidebar.components.button')
        @slot('url', url('/'))
        @slot('icon', asset('img/sidebar/navigation.svg#home'))
        @slot('label', 'Home')
    @endcomponent
@endsection

@section('navigation')
    @component('sidebar.components.navigation')
        @component('sidebar.components.item')
            @slot('url', url('/'))
            @slot('icon', asset('img/sidebar/navigation.svg#home'))
            @slot('label', 'Home')
        @endcomponent
        @component('sidebar.components.item')
            @slot('url', route('portfolio.index'))
            @slot('icon', asset('img/sidebar/navigation.svg#design'))
            @slot('label', 'Portfolio')
        @endcomponent
        @component('sidebar.components.item')
            @slot('url', route('projects.index'))
            @slot('icon', asset('img/sidebar/navigation.svg#projects'))
            @slot('label', 'Projects')
        @endcomponent
        @component('sidebar.components.item')
            @slot('url', route('page', 'experience'))
            @slot('icon', asset('img/sidebar/navigation.svg#education'))
            @slot('label', 'Experience')
        @endcomponent
        @component('sidebar.components.item')
            @slot('url', route('page', 'skills'))
            @slot('icon', asset('img/sidebar/navigation.svg#work') )
            @slot('label', 'Skills')
        @endcomponent
    @endcomponent
@endsection

<body class="Base @yield('class')">
    @include('sidebar.sidebar')
    <section class="Base-main" id="js_content">
        @yield('main')
    </section>

    @stack('foot')
</body>
</html>
