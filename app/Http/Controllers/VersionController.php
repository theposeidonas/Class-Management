<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
class VersionController extends Controller
{
    public function index()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        return view("resources.version", [
            'users_list'=>$Users,
            'notify'=>$notify,
        ]);
    }
}
