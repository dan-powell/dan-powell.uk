@extends('projects.base')

@section('title', 'Three Six Five 2010')
@section('subtitle', '365 pieces of creative work in a single year')

@section('navigation')
    @component('sidebar.components.navigation')
        @component('sidebar.components.item')
            @slot('url', route('project.home', ['365']))
            @slot('icon', asset('img/sidebar/navigation.svg#home'))
            @slot('label', 'About 365')
        @endcomponent
        @component('sidebar.components.item')
            @slot('url', route('project.page', ['365','index']))
            @slot('icon', asset('img/sidebar/navigation.svg#design'))
            @slot('label', 'Gallery of Work')
        @endcomponent
    @endcomponent
    @parent
@endsection
