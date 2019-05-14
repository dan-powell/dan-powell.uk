@extends('main.base')

@section('class', 'Projects _show -static')

@section('buttons')
    @parent
    @component('sidebar.components.button')
        @slot('url', route('portfolio.index'))
        @slot('icon', asset('img/sidebar/navigation.svg#return'))
        @slot('label', 'More Portfolio Work')
    @endcomponent
@endsection

@section('main')
    @yield('content')
    <code>
        {{ $items->toJson() }}
    </code>
@endsection
