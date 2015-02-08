@extends('base')

@section('body-class')Projects _show -static @stop

<!--
       <meta charset="utf-8">
        <title>Introduction :: Fungi Falls :: An HTML5 Game Demo by Autumn Rain Studios</title>
-->

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ url() }}/fungifalls/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url() }}/fungifalls/css/bootstrap-theme.min.css">

    <style>
    	body {
    		background-color: #88543B;
        	background-image: url('{{ url() }}/fungifalls/img/bg_inside.png'), url('{{ url() }}/fungifalls/img/bg_night.png');
        	background-size: 100%, 100%;
    	}
    </style>
@stop


@section('main')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 ">

			<div class="center-block">
				<a href="{{ url() }}/fungifalls/build/index.html"><img src="{{ url() }}/fungifalls/img/logo.png" alt="Fungi Falls" width="645" height="333" class="center-block img-responsive"></a>
			</div>

			<article class="well">

				<h1 style="text-align: center;">A mobile friendly browser game demo built designed and built by Dan Powell</h1>
				<hr/>
				<p><a href="{{ url() }}/fungifalls/build/index.html" class="btn btn-lg btn-success btn-block" role='button'>Play Fungi Falls now<br/>on Desktop or Mobile</a></p>
				<hr/>

				<h3>What's this then?</h3>
				<p>Fungi Falls is a simple game demo that I built as a way to investigate the HTML5 game scene and as a chance to get my Javascript on.</p>

				<img src="{{ url() }}/fungifalls/img/entity_shroom_red.png" alt="entity_shroom_red" width="40" height="40" class="center-block">

				<h3>But why?</h3>
				<p>I've always loved the idea of designing and building games, but never really had the opportunity. With the recent rise of HTML5 and other web tech, I've been able to leverage my existing skillset as a web-designer so the learning curve hasn't been too steep.</p>
				<p>I deliberately kept the process organic and didn't really plan anything just to keep it easy. I've mainly been concerned with familiarising myself with the process required to build a game from scratch, hence why there's not actually all that much to the game.</p>

				<img src="{{ url() }}/fungifalls/img/entity_shroom_tan.png" alt="entity_shroom_tan" width="40" height="40" class="center-block">

				<h3>How'd you build it?</h3>

				<p>After following <a href="http://www.photonstorm.com/phaser/tutorial-making-your-first-phaser-game">this tutorial on using Phaser</a>, I decided to take the result and build on it to create a (nearly) fully-fledged game.</p>

				<p>Everything except for Phaser and the audio assets listed is my own work.</p>

				<p>Thanks to...</p>
				<ul>
					<li><a href="http://www.newgrounds.com/audio/listen/569093">Twilight Juggle (Music)</a> by <a href="http://emptywindow.newgrounds.com/">emptywindow</a></li>
					<li><a href="http://soundbible.com/107-Bomb-Explosion-1.html">Bomb Explosion SFX</a> by Mike Koenig</li>
					<li><a href="http://soundbible.com/1343-Jump.html">Jump SFX</a> by snottyboy</li>
				</ul>
				<p>... for using the <a href="https://creativecommons.org/licenses/by/3.0/">CC license 3.0</a> so that I could use your stuff :)
				</p>


				<section class="row">
					<div class="col-sm-6">

						<h4>Built with Phaser (2.0.2)</h4>
						<div class="col-sm-4">
							<a href="http://phaser.io">
								<img src="{{ url() }}/fungifalls/img/Phaser-Logo-Small.png" alt="Phaser Logo" width="382" height="331" class="img-responsive">
							</a>
						</div>
						<div class="col-sm-8">
							<p><a href="http://phaser.io">Phaser</a> is a wicked HTML5 game engine built on <a href="http://www.pixijs.com">Pixi.js</a>. Check out some other <a href="http://pgl.ilinov.eu">games built with Phaser</a>.</p>
						</div>
					</div>
					<div class="col-sm-6">
						<h4>Open Source</h4>
						<div class="col-sm-4">
							<a href="https://github.com/AutumnRainStudios/fungi-falls"><img src="{{ url() }}/fungifalls/img/GitHub-Mark-120px-plus.png" alt="GitHub" width="120" height="120" class="img-responsive"></a>
						</div>
						<div class="col-sm-8">
							<p>If anyone's interested, you can <a href="https://github.com/AutumnRainStudios/fungi-falls">find all the code and assets on GitHub</a>. This is my first foray in to game development, so the code is ropey at best, but feel free to use it in your own projects.</p>
						</div>
					</div>
				</section>

				<img src="{{ url() }}/fungifalls/img/player_gib_head.png" alt="player_gib_head" width="51" height="45" class="center-block">

					<h3>OK, cool beans.</h3>
					<p>No more questions? <a href="{{ url() }}/fungifalls/build/index.html">You should check out the game then.</a></p>

					<hr/>
					<img src="{{ url() }}/fungifalls/img/player_spritesheet.png" alt="player_spritesheet" width="1190" height="100" class="img-responsive">
					<hr/>

			</article>

		</div>
	</div>
</div>

@stop