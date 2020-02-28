@extends('projects.base')

@push('fonts', 'Corben:400:300')

@section('title', 'Fungi Falls')
@section('subtitle', 'An HTML5 + Javascript in-browser game demo')

@section('navigation')
    @component('sidebar.components.navigation')
        @foreach(config('projects.fungifalls.navigation') as $item)
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

@push('style')
    <link rel="stylesheet" href="{{ mix('css/projects/fungifalls.css') }}" type="text/css">
@endpush

@push('script')
    <script defer src="{{ mix('js/projects/fungifalls.js') }}"></script>
@endpush
