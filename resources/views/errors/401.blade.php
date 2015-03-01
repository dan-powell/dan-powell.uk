@extends('base')

@section('meta')
<title>Forbidden | Dan Powell</title>
<meta name="description" content="401 Error - Forbidden">
@stop

@section('class')System _403 @stop

@section('sidebar-buttons')
    <a href="{{ url() }}" class="navButton -back">
        <span class="sr-only">Back</span>
    </a>
@stop


@section('main')

	<section class="Section -lightGrad">
    	<div class="_container -lg -center">
            <div class="Content">
				<h1 class="pageHeading">Error 401</h1>
				<h2>Unauthorised</h2>
				<h3>Please log in</h3>
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