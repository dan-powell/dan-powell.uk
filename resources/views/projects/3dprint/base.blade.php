@extends('projects.base')

@push('fonts', 'Quicksand:400:700')

@section('title', '3D Printing Adventures')
@section('subtitle', '')

@section('navigation')
    @component('sidebar.components.navigation')
        @foreach(config('projects.3dprint.navigation') as $item)
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
    <link rel="stylesheet" href="{{ mix('css/projects/3dprint.css') }}" type="text/css">
@endpush

@push('script')
    <script defer src="{{ mix('js/projects/3dprint.js') }}"></script>
@endpush
