<?php

use Carbon\Carbon;
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
            [
                'name' => 'Heyder Shukurov',
                'type' => true,
                'selected' => false,
                'email' => 'hello@qaqaww.com',
                'password' => bcrypt('858599'),
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Elsa Frozen',
                'type' => true,
                'selected' => false,
                'email' => 'admin@santa.com',
                'password' => bcrypt('elsa2018'),
                'created_at' => Carbon::now(),
            ],
        ]);

    }
}
