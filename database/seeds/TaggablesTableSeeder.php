<?php

class TaggablesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('taggables')->truncate();
        
		\DB::table('taggables')->insert(array (
			0 => 
			array (
				'tag_id' => '1',
				'taggable_id' => '1',
				'taggable_type' => 'Project',
			),
		));
	}

}
