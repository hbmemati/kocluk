<?php

namespace Database\Seeders;

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

        $this->call(LessonCategoryTableSeeder::class);
        $this->call(UserTypeTableSeeder::class);
        $this->call(LessonRoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(LessonTableSeeder::class);
        $this->call(LessonContentTableSeeder::class);
    }
}
