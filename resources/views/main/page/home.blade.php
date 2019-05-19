@extends('main.base')

@section('meta')
<title>Dan Powell | Website designer, front-end developer</title>
<meta name="description" content="I’m Dan Powell, and I design and develop websites and other digital stuff. Here’s my portfolio of creative work.">
@endsection

@push('class', 'Page Page--home')

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
                    <img src="{{ asset('/img/dan_powell_profile.svg') }}" width="285" class="" onerror="this.onerror=null; this.src='{{ url('/img/dan_powell_profile.png') }}'" alt="A Cartoon style profile picture of Dan Powell">
		        </div>
	        </div>
        </div>
    </section>
    <section class="Section Section--hero Section--primary Section--lg">
	    <div class="Section-container Section--center">
		    <h2 class="Page-intro">
		    	<span class="Page-intro-text Page-intro-text--one">I design and build</span>
				<span class="Page-intro-text Page-intro-text--two">websites</span>
				<span class="Page-intro-text Page-intro-text--three">&amp; other digital stuff</span>
		    </h2>
	    </div>
    </section>
    @if(count($portfolio))
        <section class="Section Section--lightGrad Section--md Section--projects">
            <div class="Section-container Section--center">
                <h3 class="Section-title"><a href="{{ route('portfolio.index') }}">Work</a></h3>
                @include('main.portfolio.list', ['items' => $portfolio])
            </div>
        </section>
    @endif
    <section class="Section Section--lightGrad Section--md Section--projects">
        <div class="Section-container Section--center">
            <h3><a href="{{ route('projects.index') }}">Projects</a></h3>
            @include('main.project.list', ['items' => $projects])
        </div>
    </section>
    <section class="Section Section--primary Section--cta Section--md">
	    <div class="Section-container Page-cta">
            <div class="Page-cta-column">
                <a href="{{ route('page', 'experience') }}" class="Button Button--cta">
                    Experience
                </a>
            </div>
		    <div class="Page-cta-column">
		    	<a href="{{ route('page', 'skills') }}" class="Button Button--cta">
    		    	Skills
		    	</a>
		    </div>
	    </div>
    </section>
@endsection
