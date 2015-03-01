<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang=en><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang=en><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang=en><![endif]-->
<!--[if IE 9]><html class="no-js ie9 oldie" lang=en><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    @yield('meta')
    <link type="text/plain" rel="author" href="/humans.txt">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url() }}/favicons/apple-touch-icon-152x152-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ url() }}/favicons/apple-touch-icon-120x120-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ url() }}/favicons/apple-touch-icon-76x76-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ url() }}/favicons/apple-touch-icon-60x60-precomposed.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url() }}/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url() }}/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url() }}/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url() }}/favicons/apple-touch-icon.png">
    <link rel="shortcut icon" href="{{ url() }}/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ url() }}/favicons/favicon.png">


    <link rel="stylesheet" href="{{ url() }}/css/main.css?rev=1423329234356" type="text/css">

    <!--[if lte IE 9]>
        <link rel="stylesheet" href='{{ url() }}/assets/css/browser_fixes.min.css' type="text/css">
    <![endif]-->

    @yield('styles')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js?rev=1423329234356" type="text/javascript"></script>
    <script>window.Modernizr || document.write('<script src="{{url()}}/js/vendor/modernizr.js">\x3C/script>')</script>


    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Roboto:400,300,700:latin', 'Roboto+Slab:400,700:latin' ] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();

    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-20402828-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>