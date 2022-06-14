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
            'name' => 'serine',
            'email' => 'ssryn77@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
