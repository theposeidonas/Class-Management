<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function about_panel()
    {
        $Users=User::get();
        return view("information.about", [
            'users_list'=>$Users,
        ]);
    }

    public function teacher_notices()
    {
        $Users=User::get();
        return view("information.notices", [
            'users_list'=>$Users,
        ]);
    }
}
