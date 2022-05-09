<?php

namespace App\Http\Controllers;

use App\Models\Education\Category;
use App\Models\Education\Lesson;
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
            ->with('students')
            ->get();

       $categories = Category::all();


        return view('index', compact('lessons', 'categories'));
    }

}
