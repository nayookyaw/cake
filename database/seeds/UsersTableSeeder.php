<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('users')->insert([
					'name' => "Team Admin",
					'email' => 'admin@gmail.com',
					'password' => bcrypt('123'),
					'role' => 'admin',
					'phone' => '09972563114',
					'address' => 'ucsm',
					'created_at' => date('Y/m/d h:i:s'),
					'updated_at' => date('Y/m/d h:i:s')
			]);
    }
}
