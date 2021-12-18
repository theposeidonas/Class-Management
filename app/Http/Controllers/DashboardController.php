<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $Users=User::get();
        return view("dashboard.index", [
            'users_list'=>$Users,
        ]);
    }
}
