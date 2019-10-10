<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // here you have to create() the fake data 
        factory('App\Todo', 10)->create();
    }
}
