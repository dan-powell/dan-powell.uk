@extends('projects.base')

@section('title', 'Fungi Falls')
@section('subtitle', 'An HTML5 + Javascript in-browser game demo')

@push('style')
    <script type="text/javascript">
        var debug = false;
        var debugMobile = false;
    </script>
    <style>
        body {
            background: #111;
        }
    </style>
@endpush

@section('main')
    <body id="page_home">
		<section id="game_canvas"></section>
	</body>
@endsection

@push('script')
    <script type="text/javascript" src="{{asset('assets/js/vendor/phaser.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.built.min.js')}}"></script>
    <script>
    setTimeout(function(){
        let canvas = document.getElementsByTagName('canvas');
        canvas[0].setAttribute("tabindex", "1");
        canvas[0].focus();
    }, 100);
    </script>
@endpush
