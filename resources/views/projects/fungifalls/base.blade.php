@extends('projects.base')

@section('title', 'Fungi Falls')
@section('subtitle', 'An HTML5 + Javascript in-browser game demo')

@section('navigation')
    @component('sidebar.components.navigation')
        @component('sidebar.components.item')
            @slot('url', route('project.home', ['fungifalls']))
            @slot('icon', asset('img/sidebar/navigation.svg#home'))
            @slot('label', 'About Fungi Falls')
        @endcomponent
        @component('sidebar.components.item')
            @slot('url', url('assets/index.html'))
            @slot('icon', asset('img/sidebar/navigation.svg#design'))
            @slot('label', 'Play the Game')
        @endcomponent
    @endcomponent
    <hr/>
    @parent
@endsection
