@extends('base')

@section('body-class')Projects _show -page @stop

@section('sidebar-buttons')
    <a href="{{ route('projects.show', $project->slug) }}" class="navButton -back">
        <span class="sr-only">Back</span>
    </a>
@stop

@section('main')
    <article>

        @foreach($page->sections as $section)

            @include('projects.partials.section')

        @endforeach

    </article>
@stop

@section('sidebar')
    @include('projects.partials.list')
@stop

@section('scripts')
    @parent
    <script src="{{ url() }}/js/projects.js" type="text/javascript"></script>
@stop