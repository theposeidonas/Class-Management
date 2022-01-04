<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        return view("dashboard.index", [
            'users_list'=>$Users,
            'notify'=>$notify,
        ]);
    }
}
