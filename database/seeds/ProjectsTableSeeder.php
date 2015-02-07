<?php

class ProjectsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('projects')->truncate();
        
		\DB::table('projects')->insert(array (
			0 => 
			array (
				'id' => '1',
				'created_at' => '2014-07-15 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'title' => 'Fungi Falls First',
				'slug' => 'fungi-falls',
				'seo_title' => '',
				'seo_description' => '',
				'url' => '',
				'content' => '@@@@ FungiHero;; -center -md;;

<style>
.FungiHero {
background-color: #88543B;
background-image: url(\'/projects/fungi-falls/img/bg_inside.png\'), url(\'/projects/fungi-falls/img/bg_night.png\');
background-size: 100%, 100%;
}
</style>

<a href="/projects/fungi-falls/build/index.html">
<img src="/projects/fungi-falls/img/logo.png" alt="Fungi Falls" width="645" height="333">
</a>

@@@@ -lightGrad;; -center -xl;;

# An HTML5 browser game demo {.pageHeading}

## designed and built by Dan Powell 

@@@@ -primary;; -center -lg;;

[Play Fungi Falls now on Desktop or Mobile](/projects/fungi-falls/build/index.html) {.btn}

@@@@ ;; -content -xl;;

### What\'s this then?

Fungi Falls is a simple game demo that I built as a way to investigate the HTML5 game scene and as a chance to get my Javascript on.

![entity_shroom_red](/projects/fungi-falls/img/entity_shroom_red.png)

### But why?

I\'ve always loved the idea of designing and building games, but never really had the opportunity. With the recent rise of HTML5 and other web tech, I\'ve been able to leverage my existing skillset as a web-designer so the learning curve hasn\'t been too steep.

I deliberately kept the process organic and didn\'t really plan anything just to keep it easy. I\'ve mainly been concerned with familiarising myself with the process required to build a game from scratch, hence why there\'s not actually all that much to the game.

![entity_shroom_tan](/projects/fungi-falls/img/entity_shroom_tan.png)

### How\'d you build it?

After following [this tutorial on using Phaser](http://www.photonstorm.com/phaser/tutorial-making-your-first-phaser-game), I decided to take the result and build on it to create a (nearly) fully-fledged game.

Everything except for Phaser and the audio assets listed is my own work.

Thanks to...

*   [Twilight Juggle (Music)](http://www.newgrounds.com/audio/listen/569093) by [emptywindow](http://emptywindow.newgrounds.com/)
*   [Bomb Explosion SFX](http://soundbible.com/107-Bomb-Explosion-1.html) by Mike Koenig
*   [Jump SFX](http://soundbible.com/1343-Jump.html) by snottyboy

... for using the [CC license 3.0](https://creativecommons.org/licenses/by/3.0/) so that I could use your stuff :)

@@@@ ;; -dark -center -xl;;

#### Built with Phaser (2.0.2)

[![Phaser Logo](/projects/fungi-falls/img/Phaser-Logo-Small.png)](http://phaser.io)


[Phaser](http://phaser.io) is a wicked HTML5 game engine built on [Pixi.js](http://www.pixijs.com). Check out some other [games built with Phaser](http://pgl.ilinov.eu).

#### Open Source

[![GitHub](/projects/fungi-falls/img/GitHub-Mark-120px-plus.png)](https://github.com/AutumnRainStudios/fungi-falls)

If anyone\'s interested, you can [find all the code and assets on GitHub](https://github.com/AutumnRainStudios/fungi-falls). This is my first foray in to game development, so the code is ropey at best, but feel free to use it in your own projects.

@@@@ ;; -content -xl -center;;

![player_gib_head](/projects/fungi-falls/img/player_gib_head.png)

### OK, cool beans.

No more questions? [You should check out the game then.](/projects/fungi-falls/build/index.html)

* * *

![player_spritesheet](/projects/fungi-falls/img/player_spritesheet.png)
',
				'featured' => '1',
				'template' => '',
			),
		));
	}

}
