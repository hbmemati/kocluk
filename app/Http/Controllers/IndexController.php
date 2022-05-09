<?php

namespace App\Http\Controllers;

use App\Models\Education\Category;
use App\Models\Education\Lesson;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(Request $request)
    {

//       $category = $request->input('category');
//
//       if($category) {
//
//       }
        $lessons = Lesson::active()
            ->with('teachers')
            ->get();

        $user_lessons = User::with('lessons')->find(auth()->id())->lessons;

        $user_lessons=  array_column($user_lessons->toArray(), 'lesson_id');


        $user_lessons2 = User::with('wlessons')->find(auth()->id())->wlessons;

        $user_lessons2=  array_column($user_lessons2->toArray(), 'lesson_id');


        $categories = Category::all();


        return view('index', compact('lessons', 'categories', 'user_lessons', 'user_lessons2'));
    }

}
