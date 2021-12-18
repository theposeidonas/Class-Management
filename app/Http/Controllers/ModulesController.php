<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ModulesController extends Controller
{
    public function __construct()
    {
        setlocale(LC_ALL, 'tr_TR');
        setlocale(LC_TIME, 'tr_TR');
        Carbon::setLocale('tr');
    }
    public function teacher_module()
    {
        $Users=User::get();
        return view("modules.teachers", [
            'users_list'=>$Users,
        ]);
    }
    public function class_module()
    {
        $Users=User::get();
        return view("modules.class", [
            'users_list'=>$Users,
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
