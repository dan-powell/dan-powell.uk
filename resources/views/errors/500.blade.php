@extends('base')

@section('meta')
<title>Internal Error | Dan Powell</title>
<meta name="description" content="500 Error - Internal Error">
@stop

@section('class')System _500 @stop

@section('sidebar-buttons')
    <a href="{{ url() }}" class="navButton -back">
        <span class="sr-only">Back</span>
    </a>
@stop


@section('main')

	<section class="Section -lightGrad">
    	<div class="_container -lg -center">
            <div class="Content">
				<h1 class="pageHeading">Error 500</h1>
				<h2>Internal Server Error</h2>
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