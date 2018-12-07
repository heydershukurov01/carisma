<?php

use Illuminate\Database\Seeder;

class SpinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spins')->insert([
            [
                'who_id' => 1,
                'whom_id' => 2,
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
