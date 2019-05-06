@extends('main.base')

@section('class')Projects _show -static @stop

@section('main')

    @yield('content')

    <code>
        {{ $items->toJson() }}
    </code>

@stop
