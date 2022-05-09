<?php

namespace Database\Seeders;

use App\Models\Education\Lesson;
use App\Models\User\LessonRole;
use Illuminate\Database\Seeder;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $lesson=  Lesson::create([
            'name' => 'Php Öğrenme',
            'description' => 'php konusunda size koçluk yapabilirim',
            'image' => 'http://kocluk.test/images/avatars/PHP-PNG-File_1652079973.png',
            'category_id' => 1,
            'created_by' => 1,
            'limit' => 60,
            'status' => 1,
            ]);

        $role = new LessonRole();
        $role->lesson_id = $lesson->id;
        $role->user_id = 1;
        $role->role_id = 2;
        $role->status = true;
        $role->save();
    }
}
