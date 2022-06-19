<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\user;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'souhila',
            'email' => 'souhilasiou6@gmail.com',
            'password' => Hash::make('souhila2002'),
        ]);
    }
}