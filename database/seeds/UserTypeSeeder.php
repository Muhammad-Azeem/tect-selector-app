<?php

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\UserType::updateOrCreate([
            'id'=>1
        ],[
            'name' => 'Parent'
        ]);
        \App\Models\UserType::updateOrCreate([
            'id'=>2
        ],[
            'name' => 'Teacher'
        ]);
        \App\Models\UserType::updateOrCreate([
            'id'=>3
        ],[
            'name' => 'OT'
        ]);
        \App\Models\UserType::updateOrCreate([
            'id'=>4
        ],[
            'name' => 'Ed Ps'
        ]);
    }
}
