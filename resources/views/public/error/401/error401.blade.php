@extends('public.publicBase')

@section('meta')
<title>Forbidden | Dan Powell</title>
<meta name="description" content="401 Error - Forbidden">
@stop

@section('class')System _403 @stop

@section('sidebar-buttons')
    <a href="{{ url('/') }}" class="navButton -back">
        <span class="sr-only">Back</span>
    </a>
@stop


@section('main')

	<section class="Section Section--lightGrad">
    	<div class="Section-container Section--lg Section--center">
            <div class="Content">
				<h1 class="pageHeading">Error 401</h1>
				<h2>Unauthorised</h2>
				<h3>Please log in</h3>
            </div>
    	</div>
	</section>

    <section class="Section Section--primary Section--cta Section--md">
        <div class="Section-container Section--center">
            <a href="#" onclick="window.history.back()" class="Button">
    		    	Go Back
    	    </a>
	    	<a href="{{ url('/') }}" class="Button">
		    	Return Home
	    	</a>
	    </div>
    </section>

@stop

@section('sidebar')

@stop