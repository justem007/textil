<?php

use Illuminate\Database\Seeder;

class CardesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Textil\Carde::class, 10)->create();
    }
}