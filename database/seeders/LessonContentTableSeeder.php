<?php

namespace Database\Seeders;

use App\Models\Education\Content;
use Illuminate\Database\Seeder;

class LessonContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::create([
            'lesson_id' => 1,
            'user_id' => 1,
            'content'=>'<h1>Koçluk Başlasın !</h1><p>Merhaba arkadaşlar. Bu koçluğu aldığınıza pişman olmayacaksınız.&nbsp;</p><p><img class="image_resized" style="width:10.58%;" src="https://w7.pngwing.com/pngs/751/3/png-transparent-logo-php-html-others-text-trademark-logo-thumbnail.png">Size PHPyi öyle bir öğreteceğim ki bidaha asla unutamayacaksınız</p>'
            ]);
    }
}
