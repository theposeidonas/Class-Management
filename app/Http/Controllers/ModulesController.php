<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulesController extends Controller
{
    public function teacher_module()
    {
        return view("modules.teachers");
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
