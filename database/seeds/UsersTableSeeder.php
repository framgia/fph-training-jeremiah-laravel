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
            'name' => 'Admin User',
            'email' => 'admin@yahoo.com',
            'password' => Hash::make('admin123'),
            'role_id' => 1,
            'avatar' => null
        ]);
    }
}
