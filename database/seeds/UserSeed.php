<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'David Jakaria',
            'email' => 'demo@demo.com',
            'password' => bcrypt('demo'),
            'role' => 'admin'
        ]);
    }
}
