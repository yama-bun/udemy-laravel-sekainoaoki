<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'aaa',
                'email' => 'test1@test.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'iii',
                'email' => 'test2@test.com',
                'password' => Hash::make('password456'),
            ],
            [
                'name' => 'uuu',
                'email' => 'test3@test.com',
                'password' => Hash::make('password789'),
            ],
            [
                'name' => 'eee',
                'email' => 'test4@test.com',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
