<?php

class TagsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('tags')->truncate();
        
		\DB::table('tags')->insert(array (
			0 => 
			array (
				'id' => '1',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'title' => 'Game',
			),
		));
	}

}
