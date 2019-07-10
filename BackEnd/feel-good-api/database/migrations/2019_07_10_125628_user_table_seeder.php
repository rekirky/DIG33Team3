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
            'name' => 'jon',
            'email' => '101131082@student.swin.edu.au',
            'password' => bcrypt('feelgood'),
        ]);
        DB::table('users')->insert([
            'name' => 'paul',
            'email' => '101131082@student.swin.edu.au',
            'password' => bcrypt('paul'),
        ]);
    }
}