<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function about_panel()
    {
        return view("information.about");
    }

    public function teacher_notices()
    {
        return view("information.notices");
    }
}
