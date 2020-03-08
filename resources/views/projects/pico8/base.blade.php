@extends('projects.base')

@push('fonts', 'Press+Start+2P|VT323')

@section('title', 'Pico 8')
@section('subtitle', '')

@section('navigation')
    @component('sidebar.components.navigation')
        @foreach(config('projects.pico8.navigation') as $item)
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
    <link rel="stylesheet" href="{{ mix('css/projects/pico8.css') }}" type="text/css">
@endpush

@push('script')
    <script defer src="{{ mix('js/projects/pico8.js') }}"></script>
@endpush
