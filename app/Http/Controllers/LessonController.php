<?php

namespace App\Http\Controllers;

use App\Models\Education\Category;
use App\Models\Education\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{

    public function index(Request $request)
    {

        $categories = Category::all();
        return view('lesson.index', compact( 'categories'));
    }

    public function add_index(Request $request)
    {
        return view('lesson.add');
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'limit' => 'required',
        ]);

        $lesson = new Lesson();
        $lesson->name = $request->name;
        $lesson->category_id = $request->category;
        $lesson->limit = $request->limit;
        $lesson->image = $request->image;
        $lesson->description = $request->description;
        $lesson->created_by = Auth::id();
        $lesson->save();

        if($lesson)
            return ['status' => 'success', 'message' => 'Kurs başarıyla eklendi'];
        else
            return ['status' => 'error', 'message' => 'Bazı şeyler yanlış gitti. Lütfen tekrar deneyin.'];
    }

    public function content(Request $request)
    {
        $lesson = Lesson::find($request->lesson);
        return view('lesson.content', compact('lesson'));



    }
}
