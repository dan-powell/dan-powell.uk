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
            	<p class="HomeIntro-speech-bubble">Hullo!</p>
            </div>
        </div>
    	<h1 class="HomeIntro-heading">
        	I&rsquo;m Dan Powell, <small class="HomeIntro-heading-sub">Designer & Developer</small>
    	</h1>
        <div class="HomeIntro-wave">
            <img class="HomeIntro-wave-img" src="{{ asset('/img/dan_powell_profile.svg') }}" alt="A Cartoon style profile picture of Dan Powell">
        </div>
    </section>
    <section class="HomeHero">
        <div class="HomeHero-inner">
		    <h2 class="HomeHero-heading">
		    	<span class="HomeHero-text HomeHero-text--one">I design and build</span>
				<span class="HomeHero-text HomeHero-text--two">websites</span>
				<span class="HomeHero-text HomeHero-text--three">&amp; other stuff&hellip;</span>
		    </h2>
	    </div>
        @include('main.page.home_hero')
    </section>
    @if(count($portfolio))
        <section class="Home-portfolio">
            @include('main.portfolio.list_hero', ['items' => $portfolio])
        </section>
    @endif
    {{-- @if(count($projects))
        <section class="Home-projects">
            <h3><a href="{{ route('projects.index') }}">Projects</a></h3>
            @include('main.project.list', ['items' => $projects])
        </section>
    @endif --}}
    {{-- <section class="Section Section--primary Section--cta Section--md">
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
    </section> --}}
@endsection
