<?php
	
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Section;

class ProjectsSeeder extends Seeder {

  	public function run()
  	{

  		$faker = Faker\Factory::create();

  		// create some Portfolio Items
		for ($i = 0; $i < 20; $i++)
		{
		  Project::create(array(
            'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
            'updated_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
		    'title' => $faker->sentence(rand(2, 5)),
		    'slug' => $faker->slug,
		    'seo_title' => $faker->sentence(rand(1, 4)),
		    'seo_description' => $faker->paragraph(1),
		    'markup' => $faker->paragraph(rand(3, 8)),
		    'featured' => $faker->randomElement([0, 1])
		  ));
		}
		
		// Add some Sections to projects
		for ($i = 0; $i < 40; $i++)
		{
		  Section::create(array(
		    'markup' => $faker->paragraph(rand(3, 8)),
		    'attachment_id' => $faker->numberBetween(1, 20),
		    'attachment_type' => 'App\Models\Project'
		  ));
		}
		
		// Assign some tags to projects
		for ($i = 0; $i < 16; $i++)
		{
		  DB::table('taggables')->insert(array(
		    'tag_id' => $faker->numberBetween(1, 10),
		    'taggable_id' => $faker->numberBetween(1, 20),
            'taggable_type' => 'App\Models\Project'
		  ));
		}

  	}

}

