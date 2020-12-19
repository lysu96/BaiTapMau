<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	'name' => 'Đỗ Khương Duy',
        	'email' => 'kaka.33.yb02@gmail.com',
        	'password' => bcrypt('0123456'),
        	'role' => '1'
        ]);
    }
}
