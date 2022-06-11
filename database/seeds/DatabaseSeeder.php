<?php

use Illuminate\Database\seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SpecializationsTableSeeder::class);

         $this->call(BloodTableSeeder::class);
         $this->call(GenderTableSeeder::class);



    }
}
