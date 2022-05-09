<?php

namespace Database\Seeders;

use App\Models\Education\Category;
use Illuminate\Database\Seeder;

class LessonCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Programlama', 'description' => 'Programlama kategorisi'],
            ['name' => 'Tasarım', 'description' => 'Tasarım kategorisi'],
            ['name' => 'Müzik', 'description' => 'Müzik kategorisi'],
            ['name' => 'Sinema', 'description' => 'Sinema kategorisi'],
            ['name' => 'Eğlence', 'description' => 'Eğlence kategorisi'],
            ['name' => 'Finans', 'description' => 'Finans kategorisi'],
            ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
