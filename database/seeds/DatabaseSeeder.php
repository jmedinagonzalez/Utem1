<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use faker\factory as Faker;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
		Model::unguard();

		$this->call('CampusTableSeeder');
	}

}
