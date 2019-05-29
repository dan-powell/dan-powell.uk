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
        <svg class="HomeAbout-bg" viewBox="0 0 1440 720">
            <defs>
                <style type="text/css">
                    @import url('https://fonts.googleapis.com/css?family=Caveat:400:300');
                    tspan {
                        font-size: 36px;
                        font-family: Caveat;
                        opacity: 0;
                    }
                </style>
            </defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.2">
                <g id="Frame1" transform="translate(1026.000000, 79.000000)" stroke-width="3" stroke="#010101">
                    <rect id="Rectangle-2-Copy-5" x="1.5" y="1.5" width="319" height="596"></rect>
                    <rect id="Rectangle-2-Copy-6" x="20.5" y="18.5" width="60" height="58"></rect>
                    <rect id="Rectangle-2-Copy-7" x="101.5" y="18.5" width="199" height="58"></rect>
                    <rect id="Rectangle-2-Copy-8" x="19.5" y="96.5" width="283" height="231"></rect>
                    <rect id="Rectangle-2-Copy-10" x="19.5" y="347.5" width="283" height="231"></rect>
                </g>
                <g id="Frame2" transform="translate(106.000000, 79.000000)" stroke-width="3" stroke="#010101">
                    <rect id="Rectangle-2" x="1.5" y="1.5" width="548" height="448"></rect>
                    <rect id="Rectangle-2-Copy" x="21.5" y="22.5" width="60" height="58"></rect>
                    <rect id="Rectangle-2-Copy-2" x="104.5" y="22.5" width="424" height="58"></rect>
                    <rect id="Rectangle-2-Copy-9" x="21.5" y="350.5" width="507" height="80"></rect>
                    <rect id="Rectangle-2-Copy-3" x="245.5" y="101.5" width="283" height="231"></rect>
                    <rect id="Rectangle-2-Copy-4" x="21.5" y="101.5" width="199" height="231"></rect>
                </g>
                <g id="Arrows" transform="translate(35.000000, 28.000000)" stroke="#000000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M233.052593,520.523515 L225.767307,528.136719 L244.704807,529.730469 L234.779026,519 C234.779026,541.969704 229.184301,556.154617 221,564.736135" id="Path-2"></path>
                    <path d="M416.898706,4.38597678 L409.61342,11.9991805 L428.55092,13.5929305 L418.625139,2.86246171 C418.625139,25.8321653 413.030414,40.0170785 404.846113,48.5985962" id="Path-2-Copy-2" transform="translate(416.698516, 25.730529) rotate(-150.000000) translate(-416.698516, -25.730529) "></path>
                    <path d="M1174.89871,329.385977 L1167.61342,336.99918 L1186.55092,338.59293 L1176.62514,327.862462 C1176.62514,350.832165 1171.03041,365.017078 1162.84611,373.598596" id="Path-2-Copy-7" transform="translate(1174.698516, 350.730529) rotate(-150.000000) translate(-1174.698516, -350.730529) "></path>
                    <path d="M25.6675128,107.685756 L18.3822266,115.29896 L37.3197266,116.89271 L27.3939454,106.162241 C27.3939454,129.131945 21.7992206,143.316858 13.6149195,151.898376" id="Path-2-Copy" transform="translate(25.467323, 129.030309) scale(-1, 1) rotate(-54.000000) translate(-25.467323, -129.030309) "></path>
                    <path d="M1192.14264,4.41192356 L1184.85736,12.0251272 L1203.79486,13.6188772 L1193.86908,2.88840849 C1193.86908,25.8581121 1188.27435,40.0430252 1180.09005,48.624543" id="Path-2-Copy-6" transform="translate(1191.942454, 25.756476) scale(-1, 1) rotate(-153.000000) translate(-1191.942454, -25.756476) "></path>
                    <path d="M950.176929,89.9392825 L942.891643,97.5524862 L961.829143,99.1462362 L951.903362,88.4157674 C951.903362,111.385471 946.308637,125.570384 938.124336,134.151902" id="Path-2-Copy-5" transform="translate(949.976739, 111.283835) scale(-1, 1) rotate(-81.000000) translate(-949.976739, -111.283835) "></path>
                    <path d="M253.495242,195.575124 L246.209956,203.188328 L265.147456,204.782078 L255.221675,194.051609 C255.221675,217.021313 249.62695,231.206226 241.442649,239.787744" id="Path-2-Copy-3" transform="translate(253.295053, 216.919677) scale(-1, 1) rotate(-98.000000) translate(-253.295053, -216.919677) "></path>
                </g>
                <g id="Labels" transform="translate(10.000000, 11.000000)" font-family="Impact" fill="#000000">
                    <text id="footer" transform="translate(237.629673, 598.666577) rotate(17.000000) translate(-237.629673, -598.666577) " font-size="36">
                        <tspan x="201.129673" y="610.666577">footer</tspan>
                    </text>
                    <text id="body" transform="translate(223.759422, 265.018780) rotate(-9.000000) translate(-223.759422, -265.018780) " font-size="36">
                        <tspan x="196.259422" y="277.01878">body</tspan>
                    </text>
                    <text id="body-copy" transform="translate(1261.759422, 341.018780) rotate(-9.000000) translate(-1261.759422, -341.018780) " font-size="36">
                        <tspan x="1234.25942" y="353.01878">body</tspan>
                    </text>
                    <text id="hero-image" transform="translate(1173.797735, 268.885072) rotate(-9.000000) translate(-1173.797735, -268.885072) " font-size="36">
                        <tspan x="1108.79773" y="280.885072">hero image</tspan>
                    </text>
                    <text id="mobile" transform="translate(980.000000, 379.500000) rotate(-90.000000) translate(-980.000000, -379.500000) " font-size="48">
                        <tspan x="930.5" y="395.5">mobile</tspan>
                    </text>
                    <text id="desktop" transform="translate(690.500000, 273.500000) rotate(-270.000000) translate(-690.500000, -273.500000) " font-size="48">
                        <tspan x="630.5" y="289.5">desktop</tspan>
                    </text>
                    <text id="header" transform="translate(511.801972, 28.482263) rotate(-8.000000) translate(-511.801972, -28.482263) " font-size="36">
                        <tspan x="470.801972" y="40.4822627">header</tspan>
                    </text>
                    <text id="header-copy" transform="translate(1132.801972, 33.964525) rotate(-8.000000) translate(-1132.801972, -33.964525) " font-size="36">
                        <tspan x="1091.80197" y="45.9645254">header</tspan>
                    </text>
                    <text id="burger" transform="translate(44.976739, 202.689878) rotate(17.000000) translate(-44.976739, -202.689878) " font-size="36">
                        <tspan x="4.97673945" y="214.689878">burger</tspan>
                    </text>
                    <text id="menu" transform="translate(938.369997, 166.058532) rotate(17.000000) translate(-938.369997, -166.058532) " font-size="36">
                        <tspan x="907.369997" y="178.058532">menu</tspan>
                    </text>
                </g>
                <g id="Menu1" transform="translate(147.000000, 117.000000)" stroke="#000000" stroke-width="6" stroke-linecap="square">
                    <path d="M0.5,3 L21.1155281,3" id="Line"></path>
                    <path d="M0.5,14 L21.1155281,14" id="Line-Copy"></path>
                    <path d="M0.5,26 L21.1155281,26" id="Line-Copy-2"></path>
                </g>
                <g id="Menu2" transform="translate(1066.000000, 112.000000)" stroke="#000000" stroke-width="6" stroke-linecap="square">
                    <path d="M0.5,3 L21.1155281,3" id="Line-Copy-3"></path>
                    <path d="M0.5,14 L21.1155281,14" id="Line-Copy-4"></path>
                    <path d="M0.5,26 L21.1155281,26" id="Line-Copy-5"></path>
                </g>
                <g id="Body1" transform="translate(1079.000000, 461.000000)" stroke="#000000" stroke-width="15">
                    <path d="M1.5,7.5 L215.275583,7.5" id="Line"></path>
                    <path d="M1.5,38.5 L215.275583,38.5" id="Line-Copy-6"></path>
                    <path d="M1.5,68.5 L215.275583,68.5" id="Line-Copy-7"></path>
                    <path d="M1.5,99.5 L215.275583,99.5" id="Line-Copy-8"></path>
                    <path d="M0.5,129.5 L214.275583,129.5" id="Line-Copy-9"></path>
                    <path d="M0.5,160.5 L214.275583,160.5" id="Line-Copy-10"></path>
                </g>
                <g id="Body2" transform="translate(383.000000, 215.000000)" stroke="#000000" stroke-width="15">
                    <path d="M1.5,7.5 L215.275583,7.5" id="Line"></path>
                    <path d="M1.5,38.5 L215.275583,38.5" id="Line-Copy-6"></path>
                    <path d="M1.5,68.5 L215.275583,68.5" id="Line-Copy-7"></path>
                    <path d="M1.5,99.5 L215.275583,99.5" id="Line-Copy-8"></path>
                    <path d="M0.5,129.5 L214.275583,129.5" id="Line-Copy-9"></path>
                    <path d="M0.5,160.5 L214.275583,160.5" id="Line-Copy-10"></path>
                </g>
            </g>
        </svg>
        {{-- <svg class="HomeAbout-bg" preserveAspectRatio="none" viewBox='0 0 1600 800'>
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
        </svg> --}}
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
