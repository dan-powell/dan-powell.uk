@extends('base')

@section('meta')
<title>Dan Powell | Website designer, front-end developer from Dorset</title>
<meta name="description" content="I’m Dan Powell, and I design and develop websites and other digital stuff. Here’s my portfolio of creative work.">
@stop

@section('class')Static _home @stop

@section('main')

    <section class="Section -lightGrad">
        <div class="_container">

	        <div class="_heading">
    	        <div class="_column -right">
			        <div class="_speechWrapper">
			        	<div class="_speechBubble">
				        	<p class="_speech">
				        		Hullo!
				        	</p>
				        </div>
			        </div>
		        	<h1 class="_homeHeading">
	                	I&rsquo;m Dan Powell, <small>Designer & Developer</small>
	            	</h1>
		        </div>

		        <div class="_column -left">
                    <img src="{{ url() }}/img/dan_powell_profile.svg" width="285" class="" onerror="this.onerror=null; this.src='{{ url() }}/img/dan_powell_profile.png'" alt="A Cartoon style profile picture of Dan Powell">
		        </div>
	        </div>

        </div>
    </section>

    <section class="Section -hero -primary -lg">
	    <div class="_container -center">
		    <h2 class="_intro">
		    	<span class="_text -one">I design and build</span>
				<span class="_text -two">WEBSITES</span>
				<span class="_text -three">& other digital stuff</span>
		    </h2>
	    </div>
    </section>

    <section class="Section -lightGrad -md -projects">
        <div class="_container">

            <h3>Here are some examples of my best work…</h3>

            @include('projects.partials.list')

        </div>
    </section>

    <section class="Section -primary -cta -md">
	    <div class="_container">
		    <div class="_column">
		    	<p class="_text">view more work in my</p>
		    	<a href="{{ route('projects.index') }}" class="btn -cta">
    		    	Portfolio
		    	</a>
		    </div>

		    <div class="_column -middle">
    		     <p>or</p>
		    </div>

		    <div class="_column">
		    	<p class="_text">check out my skills and</p>
		    	<a href="{{ route('static.skills') }}" class="btn -cta">
    		    	Experience
		    	</a>
		    </div>
	    </div>
    </section>

@stop

@section('sidebar')
<!--         <p>A vital work full of inspiration from one of the major electronic artists of our decade. Favorite track: Roel Funcken - Vertox Dreaming (remix by Hecq).</p> -->
@stop