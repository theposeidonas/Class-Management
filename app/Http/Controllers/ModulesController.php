<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ModulesController extends Controller
{

    public function teacher_module()
    {
        $Users=User::get();
        return view("modules.teachers", [
            'users_list'=>$Users,

        ]);
    }
    public function lesson_module()
    {
        $Users=User::get();
        $lessons = Lesson::LeftJoin('users','lesson.author','=','users.id')->LeftJoin('classroom','lesson.location','=','classroom.id')->select('users.name','classroom.title as classroom_name','lesson.*')->get();
        $classroom_list = Classroom::get();
        return view("modules.lesson", [
            'users_list'=>$Users,
            'lesson_list'=>$lessons,
            'classroom_list'=>$classroom_list,
        ]);
    }
    public function classroom_module()
    {
        $Users=User::get();
        $Classrooms=Classroom::leftJoin('users','classroom.author','=','users.id')->select('users.name','classroom.*')->get();
        return view("modules.classroom", [
            'users_list'=>$Users,
            'classroom_list'=>$Classrooms,
        ]);
    }
    public function timetable_module()
    {
        $Users=User::get();
        return view("modules.timetable", [
            'users_list'=>$Users,
        ]);
    }

}
