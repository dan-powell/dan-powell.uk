@extends('projects.base')

@section('title', 'Fungi Falls')
@section('subtitle', 'An HTML5 + Javascript in-browser game demo')

@section('navigation')
    @component('sidebar.components.navigation')
        @foreach(config('content.projects.items.fungifalls.navigation') as $item)
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
