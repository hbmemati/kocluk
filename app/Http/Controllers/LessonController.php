<?php

namespace App\Http\Controllers;

use App\Models\Education\Category;
use App\Models\Education\Content;
use App\Models\Education\Lesson;
use App\Models\User\LessonRole;
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
        {

            $role = new LessonRole();
            $role->lesson_id = $lesson->id;
            $role->user_id = Auth::id();
            $role->role_id = 2;
            $role->status = true;
            $role->save();

            return ['status' => 'success', 'message' => 'Kurs başarıyla eklendi'];
        }

        else
            return ['status' => 'error', 'message' => 'Bazı şeyler yanlış gitti. Lütfen tekrar deneyin.'];
    }

    public function content(Request $request)
    {

        $lesson = Lesson::with('students')->where('slug',$request->slug)->where('status',true)->first();

        $contents = Content::where('lesson_id',$lesson->id)->with('user')->orderBy('created_at','desc')->get();



        return view('lesson.content', compact('lesson', 'contents'));
    }

    public function add_content(Request $request)
    {
        $validator = $request->validate([
            'lesson_id' => 'required',
            'content' => 'required',
        ]);

        $content = new Content();
        $content->lesson_id = $request->lesson_id;
        $content->content = $request->input('content');
        $content->user_id = Auth::id();
        $content->save();

        return redirect()-> route('lesson.content', ['slug' => $request->slug]);
    }

    public function follow(Request $request)
    {
        $lesson_role = new LessonRole();
        $lesson_role->lesson_id = $request->lesson_id;
        $lesson_role->user_id = Auth::id();
        $lesson_role->role_id = 3;
        $lesson_role->status = false;
        $lesson_role->save();

        return redirect()-> route('index', );
    }


    public function unfollow(Request $request)
    {
        $lesson_role = LessonRole::where('lesson_id',$request->lesson_id)->where('user_id',Auth::id())->where('status',false)->first();
        $lesson_role->delete();
        return redirect()-> route('index', );
    }

    public function status(Request $request)
    {

        $lesson = LessonRole::where('lesson_id',$request->lesson_id)->where('user_id',$request->user_id)->first();


        $lesson->status = !$lesson->status;
        $lesson->save();

        return ['status' => 'success', 'message' => 'Kullanıcı durumu başarıyla güncellendi'];

    }

}
