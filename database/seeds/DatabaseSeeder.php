<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTypeSeeder::class,
            PhaseSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
        ]);
    }
}
