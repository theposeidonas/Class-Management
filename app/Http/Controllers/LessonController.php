<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    public function delete(Request $request)
    {
        Lesson::where('id', $request->get('id'))->delete();
        return redirect()->back()->withErrors(['delete' => 'Silme Başarılı']);
    }
}
