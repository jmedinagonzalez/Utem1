<?php
use Illuminate\Database\Seeder;
use faker\factory as Faker;
class AdminTableSeeder extends Seeder 
{
public function run()
{
	$faker = Faker::create();
	\DB::table('users')->insert( array(
		'first_name' => $faker->nombre,
		'email'=> $faker->unique()->email,
		'password' => \Hash::make('metallica123')
		));
}

}