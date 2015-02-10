<?php
	
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsSeeder extends Seeder {

  	public function run()
  	{

  		$faker = Faker\Factory::create();

		for ($i = 0; $i < 10; $i++)
		{
		  Tag::create(array(
		    'title' => $faker->word,
		    'created_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
            'updated_at' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
		  ));
		}

		for ($i = 0; $i < 16; $i++)
		{
		  DB::table('taggables')->insert(array(
		    'tag_id' => $faker->numberBetween(1, 10),
		    'taggable_type' => $faker->numberBetween(1, 10),
            'taggable_type' => $faker->randomElement(['App\Models\Project', 'App\Models\Project']),
		  ));
		}

  	}

}

