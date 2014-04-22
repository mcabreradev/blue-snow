<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Miguelangel C',
			'username' => 'miguel4ngelc',
			'email'    => 'miguel4ngel@gmail.com',
			'password' => Hash::make('awesome'),
		));
	}

}