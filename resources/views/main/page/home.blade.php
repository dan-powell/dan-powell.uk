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
    <section class="HomeHero">
        <div class="HomeHero-inner">
		    <h2 class="HomeHero-heading">
		    	<span class="HomeHero-text HomeHero-text--one">I design and build</span>
				<span class="HomeHero-text HomeHero-text--two">websites</span>
				<span class="HomeHero-text HomeHero-text--three">&amp; other digital stuff</span>
		    </h2>
	    </div>


        <svg class="HomeHero-bg Svg" viewBox="0 0 830 720">
            <defs>
                <style>
                    .Svg g {
                        transform-origin: center;
                        fill-rule: evenodd;
                    }
                    .Svg tspan {
                        font-family: Caveat;
                        font-size: 36px;
                        font-weight: normal;
                        line-spacing: 1;
                        fill: rgba(0,0,0,.8);
                    }
                    .Svg .arrow {
                        stroke: rgba(0,0,0,.6);
                        stroke-width: 4;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                    }
                    .Svg .box {
                        stroke: rgba(255,255,255,.6);
                        fill: none;
                        stroke-width: 3;
                    }
                    .Svg .line {
                        stroke: rgba(255,255,255,.9);
                        stroke-width: 3;
                    }
                    .Svg .line.med {stroke-width: 6;}
                    .Svg .line.thick {stroke-width: 15;}
                    .Svg .line.dash {
                        stroke-linecap: round;
                        stroke-linejoin: round;
                        stroke-dasharray: 12;
                    }
                    /* .Svg .fill.a { fill: rgba(0,0,0,.1); }
                    .Svg .fill.b { fill: rgba(0,0,0,.2); }
                    .Svg .fill.c { fill: rgba(0,0,0,.3); }
                    .Svg .fill.d { fill: rgba(0,0,0,.4); }
                    .Svg .fill.e { fill: rgba(0,0,0,.5); }
                    .Svg .fill.f { fill: rgba(0,0,0,.6); }
                    .Svg .fill.g { fill: rgba(0,0,0,.7); }
                    .Svg .fill.h { fill: rgba(0,0,0,.8); }
                    .Svg .fill.i { fill: rgba(0,0,0,.9); } */
                    /* .Svg .fill {
                        fill: rgba(255,255,255,.4);
                    }
                    .Svg .fill.a { fill: rgba(255,255,255,.1); }
                    .Svg .fill.b { fill: rgba(255,255,255,.2); }
                    .Svg .fill.c { fill: rgba(255,255,255,.3); }
                    .Svg .fill.d { fill: rgba(255,255,255,.4); }
                    .Svg .fill.e { fill: rgba(255,255,255,.5); }
                    .Svg .fill.f { fill: rgba(255,255,255,.6); }
                    .Svg .fill.g { fill: rgba(255,255,255,.7); }
                    .Svg .fill.h { fill: rgba(255,255,255,.8); }
                    .Svg .fill.i { fill: rgba(255,255,255,.9); } */
                </style>
            </defs>
            <g class="HomeHeroBg-one" fill="none" fill-rule="evenodd" opacity="0">
                <g class="HomeHeroBg-boxes">
                    <g>
                        <path class="fill a" d="M180 31h60v60h-60z" />
                        <path class="box" d="M181.5 33h57v57h-57z" />
                    </g>
                    <g>
                        <path class="fill b" d="M180 101h60v570h-60z" />
                        <path class="box" d="M180.5 103h57v567h-57z" />
                    </g>
                    <g>
                        <path class="fill c" d="M250 591h440v80H250z" />
                        <path class="box" d="M250.5 593h437v77h-437z" />
                    </g>
                    <g>
                        <path class="fill d" d="M250 191h440v120H250z" />
                        <path class="box" d="M251.5 193h437v117h-437z" />
                    </g>
                    <g>
                        <path class="fill e" d="M550 321h140v120H550z" />
                        <path class="box" d="M551.5 323h137v117h-137z" />
                    </g>
                    <g>
                        <path class="fill f" d="M250 459h140v120H250z" />
                        <path class="box" d="M251.5 461h137v117h-137z" />
                    </g>
                    <g>
                        <path class="fill g" d="M400 391h140v120H400z" />
                        <path class="box" d="M401.5 393.5h137v117h-137z" />
                    </g>
                    <g>
                        <path class="fill a" d="M250 32h200v150H250z" />
                        <path class="box" d="M251.5 33.5h197v147h-197z" />
                    </g>
                    <g>
                        <path class="fill f" d="M460.5 32.5h230v150H460z" />
                        <path class="box" d="M461.5 33.5h227v147h-227z" />
                    </g>
                </g>
                <g class="HomeHeroBg-icons">
                    <path class="line" d="M191.5 113.5h37v37h-37z" />
                    <path class="line med" d="M197.5 51.5H222M197.5 61.5H222M197.5 72.5H222" />
                </g>
                <g class="HomeHeroBg-content">
                    <path class="line thick" d="M301 363.5h180M301 334.5h180" />
                    <path class="line thick" d="M189 651h40M189 626h40M189 600h40"/>
                    <path class="line thick" d="M485 107h180M485 78h180M485 136h180" />
                </g>
                <g class="HomeHeroBg-labels">
                    <g>
                        <path d="M164.33 62.8l-10.1-3.32 6.5 17.88 6.22-13.5c-21.17 8.98-36.93 10.24-47.81 5.08" class="arrow"/>
                        <text transform="rotate(19 33.1 117.23)">
                            <tspan x="9" y="47">burger</tspan>
                            <tspan x="18" y="82">menu</tspan>
                        </text>
                    </g>
                    <g>
                        <path d="M164.8 364.78l-7.9 5.96 1.65-18.95 8.51 11.3c-21.78-3.07-37.47.78-46.5 7.6" class="arrow"/>
                        <text transform="rotate(19 -952.8 447.6)">
                            <tspan x="3" y="71">sidebar</tspan>
                        </text>
                    </g>
                    <g>
                        <path d="M711.03 632.1l7.62-7.41 2 18.92-10.52-9.46c22.97-1.2 36.64-7.93 44.21-16.34" class="arrow"/>
                        <text transform="rotate(19 -1297.6 2432.4)">
                            <tspan x="14" y="46">footer</tspan>
                        </text>
                    </g>
                    <g>
                        <path d="M553.67 472.66l5.18 9.28 5.9-18.17-11.85 7.7c21.52 4.57 34.17 12.38 41.1 23.05" class="arrow"/>
                        <text transform="rotate(-18 1792.32 -1436.78)">
                            <tspan x="8" y="69">portfolio </tspan>
                            <tspan x="25" y="104">items</tspan>
                        </text>
                    </g>
                    <g>
                        <path d="M165.03 141.13l-3.38 9.3-9.85-16.38 13.3 4.84c-19.95 9.3-30.52 19.75-34.87 31.7" class="arrow"/>
                        <text fill="#000" transform="translate(79 129)">
                            <tspan x="9.11" y="76">home</tspan>
                            <tspan x="0" y="111">button</tspan>
                        </text>
                    </g>
                    <g>
                        <path d="M161.19 631.5l-2.57-9.56-11.23 15.45 14.53-3.16c-19.92-11.5-29.54-22.83-32.84-35.12" class="arrow"/>
                        <text transform="rotate(-18 1671.57 52.92)">
                            <tspan x="20" y="44">site</tspan>
                            <tspan x="9" y="79">name</tspan>
                        </text>
                    </g>
                    <g>
                        <path d="M715.03 99.1l7.62-7.41 2 18.92-10.52-9.46c22.97-1.2 36.64-7.93 44.21-16.34" class="arrow"/>
                        <text transform="rotate(19 338.28 2154.94)">
                            <tspan x="2" y="51">lead text</tspan>
                        </text>
                    </g>
                    <g>
                        <text transform="rotate(19 311.1 163.23)">
                            <tspan x="269" y="110">profile pic</tspan>
                        </text>
                    </g>
                    <g>
                        <text transform="rotate(-18 466.41 170.05)">
                            <tspan x="400" y="235">hero</tspan>
                            <tspan x="361" y="270">illustration</tspan>
                        </text>
                    </g>
                </g>
            </g>
            <g class="HomeHeroBg-two" fill="none" fill-rule="evenodd" opacity="0">
                <g class="HomeHeroBg-boxes">
                    <g>
                        <path class="box" d="M183 194h504v394H183z"/>
                    </g>
                    <g transform="translate(180 461)">
                        <path class="fill a" d="M0 0h121v130H0z"/>
                        <path class="box" d="M1.5 1.5h118v127H1.5z"/>
                    </g>
                    <g transform="translate(180 461)">
                        <path class="fill b" d="M190 50h320v80H190z"/>
                        <path class="box" stroke-width="3" d="M191.5 51.5h317v77h-317z"/>
                    </g>
                </g>
                <g class="HomeHeroBg-labels">
                    <g>
                        <path d="M264.55 359.67l5.22-9.14-18.76 3.03 12.23 8.01c-5.56-22.29-3.56-37.4 2.3-47.71" class="arrow"/>
                        <text transform="rotate(19 -637.56 879.02)">
                            <tspan x="3.71" y="45.93">player</tspan>
                        </text>
                    </g>
                    <g>
                        <path d="M452.15 484.35l7.22-7.67 2.59 18.82-11.24-9.35c22.94-1.2 36.81-7.53 44.95-16.15" class="arrow"/>
                        <text transform="rotate(19 -980.8 1584.55)">
                            <tspan x="15.1" y="47">enemy</tspan>
                        </text>
                    </g>
                    <g>
                        <text transform="rotate(19 45.12 966.12)">
                            <tspan x="145.17" y="317.16">jump</tspan>
                        </text>
                    </g>
                    <g>
                        <path d="M239.36 178.14l5.07-9.24-18.7 3.36 12.36 7.8c-5.95-22.2-4.21-37.34 1.47-47.75" class="arrow"/>
                        <text transform="translate(210 89)">
                            <tspan x="0" y="35.74">score</tspan>
                        </text>
                    </g>
                    <g>
                        <path d="M613.41 418.85l1.42-10.44-16.25 9.84 14.33 2.85c-13.5-18.58-17.31-33.35-15.73-45.1" class="arrow"/>
                        <text transform="rotate(-18 1323.69 -1537.88)">
                            <tspan x="3.3" y="47.43">pickups</tspan>
                        </text>
                    </g>
                    <g>
                        <path d="M653.44 178.26l-1.06-10.48 15.9 10.4-14.42 2.34c14.14-18.1 18.46-32.72 17.3-44.52" class="arrow"/>
                        <text transform="rotate(19 127.02 1965.55)">
                            <tspan x="3.57" y="46.74">health</tspan>
                        </text>
                    </g>
                </g>
                <g class="HomeHeroBg-icons">
                    <g transform="translate(240 375)">
                        <path class="line fill c" d="M20 41.35L37.57 76.5H2.43L20 41.35z"/>
                    </g>
                    <g transform="translate(240 375)">
                        <circle class="line fill d" cx="20" cy="19" r="17.5"/>
                    </g>
                    <g>
                        <path class="line med dash" d="M302.58 425.8c15.74-15.73 55.62-31.54 80.91-15.73 16.46 10.29 30.42 27.42 37.42 54.2"/>
                    </g>
                    <g transform="translate(190 194)">
                        <path class="line fill d" d="M440.03 265.53l1.68-9.76.13-.78-.57-.55-7.1-6.92 9.81-1.42.79-.12.34-.7 4.39-8.9 4.39 8.9.34.7.79.12 9.8 1.42-7.1 6.92-.56.55.13.78 1.68 9.76-8.77-4.6-.7-.37-.7.36-8.77 4.61z"/>
                    </g>
                    <g transform="translate(190 194)">
                        <path class="line fill d" d="M235.14 279l17.14 12.45-6.55 20.15h-21.18L218 291.45z"/>
                    </g>
                    <g>
                        <path class="line fill" d="M659.29 233.15s-13.88-12.53-14.27-18.38c-.4-5.84 6.07-13.83 14.27-4.47 8.34-9.36 14.8-1.37 14.42 4.47-.4 5.85-14.42 18.38-14.42 18.38z"/>
                        <path class="line fill" d="M622.29 233.15s-13.88-12.53-14.27-18.38c-.4-5.84 6.07-13.83 14.27-4.47 8.34-9.36 14.8-1.37 14.42 4.47-.4 5.85-14.42 18.38-14.42 18.38z"/>
                        <path class="line" d="M585.29 233.15s-13.88-12.53-14.27-18.38c-.4-5.84 6.07-13.83 14.27-4.47 8.34-9.36 14.8-1.37 14.42 4.47-.4 5.85-14.42 18.38-14.42 18.38z"/>
                    </g>
                    <g>
                        <text transform="translate(190 194)">
                            <tspan x=".3" y="35">8888888</tspan>
                        </text>
                    </g>
                </g>
            </g>
        </svg>
    </section>
    @if(count($portfolio))
        <section class="Home-portfolio">
            @include('main.portfolio.list_hero', ['items' => $portfolio])
        </section>
    @endif
    @if(count($projects))
        <section class="Home-projects">
            <h3><a href="{{ route('projects.index') }}">Projects</a></h3>
            @include('main.project.list', ['items' => $projects])
        </section>
    @endif
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
