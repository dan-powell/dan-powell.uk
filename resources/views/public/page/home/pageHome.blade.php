@extends('public.publicBase')

@section('meta')
<title>Dan Powell | Website designer, front-end developer from Dorset</title>
<meta name="description" content="I’m Dan Powell, and I design and develop websites and other digital stuff. Here’s my portfolio of creative work.">
@stop

@section('class')Page Page--home @stop

@section('main')

    <section class="Section Section--lightGrad">
        <div class="Section-container">

	        <div class="Page-heading">
    	        <div class="Page-heading-column Page-heading-column--right">
			        <div class="Page-heading-speech">
			        	<div class="Page-heading-speech-bubble">
				        	<p class="Page-heading-speech-bubble-speech">
				        		Hullo!
				        	</p>
				        </div>
			        </div>
		        	<h1 class="Page-heading-homeHeading">
	                	I&rsquo;m Dan Powell, <small>Designer & Developer</small>
	            	</h1>
		        </div>

		        <div class="Page-heading-column Page-heading-column--left">
                    <img src="{{ url('/') }}/img/dan_powell_profile.svg" width="285" class="" onerror="this.onerror=null; this.src='{{ url('/') }}/img/dan_powell_profile.png'" alt="A Cartoon style profile picture of Dan Powell">
		        </div>
	        </div>

        </div>
    </section>

    <section class="Section Section--hero Section--primary Section--lg">
	    <div class="Section-container Section--center">
		    <h2 class="Page-intro">
		    	<span class="Page-intro-text Page-intro-text--one">I design and build</span>
				<span class="Page-intro-text Page-intro-text--two">WEBSITES</span>
				<span class="Page-intro-text Page-intro-text--three">& other digital stuff</span>
		    </h2>
	    </div>
    </section>

    <section class="Section Section--lightGrad Section--md Section--projects">
        <div class="Section-container">

            <h3>Here are some examples of my best work…</h3>

            @include('portfolio::partials.list')

        </div>
    </section>

    <section class="Section Section--primary Section--cta Section--md">
	    <div class="Section-container Page-cta">
		    <div class="Page-cta-column">
		    	<p class="Page-cta-column-text">view more work in my</p>
		    	<a href="{{ route('projects.index') }}" class="Button Button--cta">
    		    	Portfolio
		    	</a>
		    </div>

		    <div class="Page-cta-column Page-cta-column--middle">
    		     <p>or</p>
		    </div>

		    <div class="Page-cta-column">
		    	<p class="Page-cta-column-text">check out my skills and</p>
		    	<a href="{{ route('page.skills') }}" class="Button Button--cta">
    		    	Experience
		    	</a>
		    </div>
	    </div>
    </section>

@stop

@section('sidebar')

@stop