<?php

use Illuminate\Database\Seeder;

class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        App\Models\Phase::updateOrCreate([
            'id' => 1
        ], [
            'name' => 'Device Options'
        ]);
        App\Models\Phase::updateOrCreate([
            'id' => 2
        ], [
            'name' => 'Parent & Student Details'
        ]);
        App\Models\Phase::updateOrCreate([
            'id' => 3
        ], [
            'name' => 'Student Challenges'
        ]);
    }

}
