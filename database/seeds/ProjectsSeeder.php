<?php

class ProjectsSeeder extends Seeder {

  	public function run()
  	{

  		$faker = Faker\Factory::create();

  		// create some Portfolio Items
		for ($i = 0; $i < 20; $i++)
		{
		  $user = Project::create(array(
            'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
		    'title' => $faker->sentence(rand(2, 5)),
		    'slug' => $faker->slug,
		    'seo_title' => $faker->sentence(rand(1, 4)),
		    'seo_description' => $faker->paragraph(1),
		    'content' => $faker->paragraph(rand(3, 8)),
		  ));
		}


		// Create some Tags
		for ($i = 0; $i < 10; $i++)
		{
		  $user = Tag::create(array(
		    'title' => $faker->word,
		  ));
		}


  	}

}

