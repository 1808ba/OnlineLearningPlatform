<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@simplon.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
    }
}
