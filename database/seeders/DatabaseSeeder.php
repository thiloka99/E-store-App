<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'ab',
            'email' => 'ab@gmail.com',
            'gender' => 'm',
            'address' => 'jaffna',
            'mobile' => '077123456',
            'role' => 'admin',
            'password' => Hash::make('test123')

         ]);
    }
}
