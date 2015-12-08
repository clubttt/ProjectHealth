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
		//Model::unguard();

		App\User::create([
			'name' => 'Admin',
			'email' => 'admin@admin.com',
			'password' => bcrypt('123456'),
		]);

		App\User::create([
			'name' => 'View',
			'email' => 'view@hotmail.com',
			'password' => bcrypt('123456'),
		]);

		App\User::create([
			'name' => 'Dear',
			'email' => 'dear@hotmail.com',
			'password' => bcrypt('view@hotmail.com'),
		]);

		App\User::create([
			'name' => 'Aek',
			'email' => 'aek@hotmail.com',
			'password' => bcrypt('123456'),
		]);

		App\User::create([
			'name' => 'Pao',
			'email' => 'pao@hotmail.com',
			'password' => bcrypt('123456'),
		]);

		App\User::create([
			'name' => 'Za',
			'email' => 'za@hotmail.com',
			'password' => bcrypt('123456'),
		]);
	}

}
