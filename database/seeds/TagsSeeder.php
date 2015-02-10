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



  	}

}

