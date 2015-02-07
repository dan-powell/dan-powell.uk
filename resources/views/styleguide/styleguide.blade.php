@extends('base')

@section('main')

	<section class="Section -center -sm">
		<div class="_container -light -rounded -sm">

            <a href="/styleguide" class="btn">Index</a>
            <a href="/styleguide/basic" class="btn">Basic</a>
            <a href="/styleguide/advanced" class="btn">Advanced</a>
            <a href="/styleguide/custom" class="btn">Custom</a>
            <a href="/styleguide/sections" class="btn">Sections</a>

		</div>
    </section>

    @if($view != null && $view != 'index')
        @include('styleguide.guides.' . $view)
    @else
        <div class="Section -lightGrad">
            <div class="_container -md Content">
                <h1 class="pageHeading">Styleguide</h1>
            </div>
        </div>

        <section class="Section -light">
        	<div class="_container -xl Content">
                This style guide is intended to display all of the various components that make up this site so that they can be tested.
            </div>
        </div>

    @endif

@stop

@section('sidebar-buttons')
    <a href="{{ route('projects.index') }}" class="navButton -back">
        <span class="sr-only">Back</span>
    </a>
@stop