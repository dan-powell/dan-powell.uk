@extends('publicBase')

@section('meta')
<title>Permission Denied | Dan Powell</title>
<meta name="description" content="403 Error - Permission Denied">
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
				<h1 class="pageHeading">Error 403</h1>
				<h2>Forbidden</h2>
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