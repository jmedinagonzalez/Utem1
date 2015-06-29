<?php
use Illuminate\Database\Seeder;

class CampusTableSeeder extends Seeder
{
	
	public function run()
	{
		//DB::table('campus')->delete();
		$nombres = ['Macul','Fae','Centro'];
		foreach ($nombres as $nombres ) {
			$campus = Campus::create(['nombre'=>$nombre]);
		}
	}
}