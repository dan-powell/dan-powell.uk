<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    @yield('meta')
    <link type="text/plain" rel="author" href="{{ asset('humans.txt') }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ mix('css/base.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ mix('css/sidebar.css') }}" type="text/css">
    @stack('style')

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="//fonts.googleapis.com/css?family=Caveat|Nunito|@stack('fonts')" rel="stylesheet">

    {{-- <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-20402828-1', 'auto');
        ga('send', 'pageview');
    </script> --}}

    @stack('head')

    <script defer src="{{ mix('js/manifest.js') }}"></script>
    <script defer src="{{ mix('js/vendor.js') }}"></script>
    <script defer src="{{ mix('js/sidebar.js') }}"></script>
    @stack('script')

</head>

@section('title', 'Dan Powell')
@section('subtitle', 'Web Designer')

@section('buttons')
    @component('sidebar.components.button')
        @slot('url', '/')
        @slot('icon', 'img/sidebar/icons.svg#home')
        @slot('label', 'Home')
    @endcomponent
@endsection

@section('navigation')
    @component('sidebar.components.navigation')
        @foreach(config('content.navigation.main') as $item)
            @component('sidebar.components.item')
                @slot('url', $item['url'] ?? null)
                @slot('icon', $item['icon'] ?? null)
                @slot('label', $item['label'] ?? null)
                @slot('description', $item['description'] ?? null)
                @slot('items', $item['items'] ?? null)
            @endcomponent
        @endforeach
    @endcomponent
@endsection

<body class="@stack('class')">
    @include('sidebar.sidebar')

    @yield('main')

    @stack('foot')

</body>
</html>
