<?php

namespace App\Http\Controllers;

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
            'users'=>$Users,
        ]);
    }
    public function class_module()
    {
        return view("modules.class");
    }
    public function classroom_module()
    {
        return view("modules.classroom");
    }
    public function timetable_module()
    {
        return view("modules.timetable");
    }

}
