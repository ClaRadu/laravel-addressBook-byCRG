<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// insert test data
		// insert users
		DB::table('users')->insert(['name' => 'Elton John', 'email' => 'elton@john.com', 
			'password' => bcrypt('pass01'),]);
		DB::table('users')->insert(['name' => 'Clau R', 'email' => 'cla@radu.com', 
			'password' => bcrypt('pass02'),]);
			
		// insert addresses
		DB::table('books')->insert(['name' => 'Elton John', 'usr_id' => 1, 'email' => 'elton@john.com', 
			'address' => 'Main Street, Tulsa, Oklahoma', 'country' => 'USA', 'phone' => '555-111',]);
		DB::table('books')->insert(['name' => 'John', 'usr_id' => 1, 'email' => 'john@office.com', 
			'address' => '2nd Street, NY', 'country' => 'USA', 'phone' => '555-222',]);
		DB::table('books')->insert(['name' => 'Claude', 'usr_id' => 2, 'email' => 'cla@radu.com', 
			'address' => 'High Street, Belfast', 'country' => 'Nothen Ireland', 'phone' => '555-333',]);

		Model::unguard();

		// $this->call('UserTableSeeder');
	}

}
