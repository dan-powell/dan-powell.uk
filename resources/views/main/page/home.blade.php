@extends('main.base')

@section('meta')
<title>Dan Powell | Website designer, front-end developer</title>
<meta name="description" content="I’m Dan Powell, and I design and develop websites and other digital stuff. Here’s my portfolio of creative work.">
@endsection

@push('class', 'Page Page--home')

@section('main')
    <section class="HomeIntro">
        <div class="HomeIntro-speech">
        	<div class="HomeIntro-speech-inner">
            	<p class="HomeIntro-speech-bubble">
            		Hullo!
            	</p>
            </div>
        </div>
    	<h1 class="HomeIntro-heading">
        	I&rsquo;m Dan Powell, <small class="HomeIntro-heading-sub">Designer & Developer</small>
    	</h1>
        <div class="HomeIntro-wave">
            <img class="HomeIntro-wave-img" src="{{ asset('/img/dan_powell_profile.svg') }}" alt="A Cartoon style profile picture of Dan Powell">
        </div>
    </section>
    <section class="HomeAbout">
        <div class="HomeAbout-inner">
		    <h2 class="HomeAbout-heading">
		    	<span class="HomeAbout-text HomeAbout-text--one">I design and build</span>
				<span class="HomeAbout-text HomeAbout-text--two">websites</span>
				<span class="HomeAbout-text HomeAbout-text--three">&amp; other digital stuff</span>
		    </h2>
	    </div>
        <svg class="HomeAbout-bg" preserveAspectRatio="none" viewBox='0 0 1600 800'>
            {{-- <rect fill='#ff9d00' width='1600' height='800'/> --}}
            <g stroke='#000' stroke-width='0' stroke-opacity='0.05' >
                <circle fill='#ff9d00' cx='0' cy='0' r='1800'/>
                <circle fill='#fb8d17' cx='0' cy='0' r='1700'/>
                <circle fill='#f47d24' cx='0' cy='0' r='1600'/>
                <circle fill='#ed6e2d' cx='0' cy='0' r='1500'/>
                <circle fill='#e35f34' cx='0' cy='0' r='1400'/>
                <circle fill='#d85239' cx='0' cy='0' r='1300'/>
                <circle fill='#cc453e' cx='0' cy='0' r='1200'/>
                <circle fill='#be3941' cx='0' cy='0' r='1100'/>
                <circle fill='#b02f43' cx='0' cy='0' r='1000'/>
                <circle fill='#a02644' cx='0' cy='0' r='900'/>
                <circle fill='#901e44' cx='0' cy='0' r='800'/>
                <circle fill='#801843' cx='0' cy='0' r='700'/>
                <circle fill='#6f1341' cx='0' cy='0' r='600'/>
                <circle fill='#5e0f3d' cx='0' cy='0' r='500'/>
                <circle fill='#4e0c38' cx='0' cy='0' r='400'/>
                <circle fill='#3e0933' cx='0' cy='0' r='300'/>
                <circle fill='#2e062c' cx='0' cy='0' r='200'/>
                <circle fill='#210024' cx='0' cy='0' r='100'/>
            </g>
        </svg>
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
