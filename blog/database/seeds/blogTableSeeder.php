<?php

use Illuminate\Database\Seeder;

class blogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    

  factory(App\Link::class, 5)->create();

    }
}
