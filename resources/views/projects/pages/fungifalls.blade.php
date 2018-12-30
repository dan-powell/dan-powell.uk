@extends('publicBase')

@section('meta')
    <title>Fungi Falls by Dan Powell</title>
    <meta name="description" content="An HTML5 + Javascript in-browser game demo">
@stop

@section('class')Projects _show -static @stop

@section('styles')
    @parent
@stop

@section('sidebar-buttons')
    <a href="{{ route('portfolio.index') }}" class="navButton -back">
        <span class="sr-only">Back</span>
    </a>
@stop

@section('main')
    <section class="Section FungiHero">
        <div class="Section-container Section--center Section--md">
        	<div class="Content">
                <img alt="Fungi Falls" height="333" src="/projects/fungi-falls/img/logo.png" width="645">
            </div>
     	</div>
    </section>
    <section class="Section Section--lightGrad">
        <div class="Section-container Section--center Section--xl">
            <div class="Content">
                <h1 class="pageHeading">An HTML5 browser game demo</h1>
            </div>
        </div>
    </section>
    <section class="Section Section--primary">
        <div class="Section-container Section--center Section--lg">
        	<div class="Content">
                <p><a class="Button" href="/projects/fungi-falls/build/index.html">Play Fungi Falls now on Desktop or Mobile</a></p>
        	</div>
     	</div>
    </section>
    <section class="Section Section--content">
        <div class="Section-container Section--xl">
            <div class="Content">
                <h3>What's this then?</h3>
                <p>Fungi Falls is a simple game demo that I built as a way to investigate the HTML5 game scene and as a chance to get my Javascript on.</p>
                <p><img alt="entity_shroom_red" src="/projects/fungi-falls/img/entity_shroom_red.png"></p>
                <h3>But why?</h3>
                <p>I've always loved the idea of designing and building games, but never really had the opportunity. With the recent rise of HTML5 and other web tech, I've been able to leverage my existing skillset as a web-designer so the learning curve hasn't been too steep.</p>
                <p>I deliberately kept the process organic and didn't really plan anything just to keep it easy. I've mainly been concerned with familiarising myself with the process required to build a game from scratch, hence why there's not actually all that much to the game.</p>
                <p><img alt="entity_shroom_tan" src="/projects/fungi-falls/img/entity_shroom_tan.png"></p>
                <h3>How'd you build it?</h3>
                <p>After following <a href="http://www.photonstorm.com/phaser/tutorial-making-your-first-phaser-game" rel="nofollow" target="_blank">this tutorial on using Phaser</a>, I decided to take the result and build on it to create a (nearly) fully-fledged game.</p>
                <p>Everything except for Phaser and the audio assets listed is my own work.</p>
                <p>Thanks to...</p>
                <ul>
                    <li><a href="http://www.newgrounds.com/audio/listen/569093" rel="nofollow" target="_blank">Twilight Juggle (Music)</a> by <a href="http://emptywindow.newgrounds.com/" rel="nofollow" target="_blank">emptywindow</a></li>
                    <li><a href="http://soundbible.com/107-Bomb-Explosion-1.html" rel="nofollow" target="_blank">Bomb Explosion SFX</a> by Mike Koenig</li>
                    <li><a href="http://soundbible.com/1343-Jump.html" rel="nofollow" target="_blank">Jump SFX</a> by snottyboy</li>
                </ul>
                <p>... for using the <a href="https://creativecommons.org/licenses/by/3.0/" rel="nofollow" target="_blank">CC license 3.0</a> so that I could use your stuff :)</p>
        	</div>
     	</div>
    </section>
    <section class="Section">
        <div class="Section-container Section--dark Section--center Section--xl">
        	<div class="Content">
                <h4>Built with Phaser (2.0.2)</h4>
                <p><a href="http://phaser.io" rel="nofollow" target="_blank"><img alt="Phaser Logo" src="/projects/fungi-falls/img/Phaser-Logo-Small.png"></a></p>
                <p><a href="http://phaser.io" rel="nofollow" target="_blank">Phaser</a> is a wicked HTML5 game engine built on <a href="http://www.pixijs.com" rel="nofollow" target="_blank">Pixi.js</a>. Check out some other <a href="http://pgl.ilinov.eu" rel="nofollow" target="_blank">games built with Phaser</a>.</p>
                <h4>Open Source</h4>
                <p><a href="https://github.com/AutumnRainStudios/fungi-falls" rel="nofollow" target="_blank"><img alt="GitHub" src="/projects/fungi-falls/img/GitHub-Mark-120px-plus.png"></a></p>
                <p>If anyone's interested, you can <a href="https://github.com/AutumnRainStudios/fungi-falls" rel="nofollow" target="_blank">find all the code and assets on GitHub</a>. This is my first foray in to game development, so the code is ropey at best, but feel free to use it in your own projects.</p>
        	</div>
     	</div>
    </section>
     <section class="Section">
        <div class="Section-container Section--content Section--xl Section--center">
        	<div class="Content">
                <p><img alt="player_gib_head" src="/projects/fungi-falls/img/player_gib_head.png"></p>
                <h3>OK, cool beans.</h3>
                <p>No more questions? <a href="/projects/fungi-falls/build/index.html">You should check out the game then.</a></p>
                <hr><p><img alt="player_spritesheet" src="/projects/fungi-falls/img/player_spritesheet.png"></p>
        	</div>
     	</div>
    </section>
@stop


@section('scripts')
    @parent
@stop
