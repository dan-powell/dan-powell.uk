@extends('base')

@section('body-class')System _403 @stop

@section('sidebar-buttons')
    <a href="{{ url() }}" class="navButton -back">
        <span class="sr-only">Back</span>
    </a>
@stop


@section('main')

	<section class="Section -lightGrad">
    	<div class="_container -lg -center">
            <div class="Content">
				<h1 class="pageHeading">Error 403</h1>
				<h2>Forbidden</h2>
            </div>
    	</div>
	</section>

    <section class="Section -primary -cta -md">
        <div class="_container -center">
            <a href="#" onclick="window.history.back()" class="btn">
    		    	Go Back
    	    </a>
	    	<a href="{{ url() }}" class="btn">
		    	Return Home
	    	</a>
	    </div>
    </section>

@stop

@section('sidebar')

@stop