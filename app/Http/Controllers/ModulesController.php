<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Lesson;
use App\Models\Notification;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ModulesController extends Controller
{

    public function teacher_module()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        return view("modules.teachers", [
            'users_list'=>$Users,
            'notify'=>$notify,

        ]);
    }
    public function lesson_module()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        $lessons = Lesson::LeftJoin('users','lesson.author','=','users.id')->LeftJoin('classroom','lesson.location','=','classroom.id')->select('users.name','classroom.title as classroom_name','lesson.*')->get();
        $classroom_list = Classroom::get();
        return view("modules.lesson", [
            'users_list'=>$Users,
            'lesson_list'=>$lessons,
            'classroom_list'=>$classroom_list,
            'notify'=>$notify,
        ]);
    }
    public function classroom_module()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        $Classrooms=Classroom::leftJoin('users','classroom.author','=','users.id')->select('users.name','classroom.*')->get();
        return view("modules.classroom", [
            'users_list'=>$Users,
            'classroom_list'=>$Classrooms,
            'notify'=>$notify,
        ]);
    }
    public function timetable_module()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        $monday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','monday')->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();

        $tuesday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','tuesday')->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $wednesday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','wednesday')->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $thursday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','thursday')->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $friday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','friday')->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();

        $timetable_list= [$monday,$tuesday,$wednesday,$thursday,$friday];
        return view("modules.timetable", [
            'users_list'=>$Users,
            'notify'=>$notify,
            'timetable_list'=>$timetable_list,
        ]);
    }

}
