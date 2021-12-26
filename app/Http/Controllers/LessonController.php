<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    public function delete(Request $request)
    {
        Lesson::where('id', $request->get('id'))->delete();
        return redirect()->back()->withErrors(['form' => 'delete']);
    }

    public function store(Request $request)
    {
        $lesson = new Lesson();
        $lesson->title = $request->input('title');
        $lesson->faculty = $request->input('faculty');
        $lesson->author = $request->input('author');
        $lesson->location = $request->input('location');
        $lesson->updated_at = date('Y-m-d H:i:s');
        $lesson->created_at = date('Y-m-d H:i:s');
        if($lesson->save())
            return back()->withErrors(['form' => 'success']);
        else return back()->withErrors(['form' => 'fail']);
    }
}
