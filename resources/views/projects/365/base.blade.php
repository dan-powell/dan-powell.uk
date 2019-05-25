@extends('projects.base')

@section('title', 'Three Six Five 2010')
@section('subtitle', '365 pieces of creative work in a single year')

@section('navigation')
    @component('sidebar.components.navigation')
        @foreach(config('content.projects.items.365.navigation') as $item)
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
    <link rel="stylesheet" href="{{ mix('css/projects/365.css') }}" type="text/css">
@endpush

@push('script')
    <script defer src="{{ mix('js/projects/365.js') }}"></script>
@endpush
