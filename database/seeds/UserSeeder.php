<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@tsa.com',
        ], [
            'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
            'type' => \App\Helpers\Constants::ADMIN,
        ]);
    }
}
