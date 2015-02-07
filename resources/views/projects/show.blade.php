@extends('base')

@section('body-class')Projects _show -article @stop

@section('sidebar-buttons')
    <a href="{{ route('projects.index') }}" class="navButton -back">
        <span class="sr-only">Back</span>
    </a>
@stop

@section('main')
    <article>

        @foreach($project->sections as $section)

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