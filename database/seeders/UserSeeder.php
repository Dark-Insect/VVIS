<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
            'id'=>'1',
            'name' => 'admin',
            'username' => 'AdministratorGrimlocker',
            'email' => 'admin@gmail.com',
            'user_role' => 'Admin',
            'password' => 'administratorFirstEntry2003'
        ]);
    }
}
