<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function about_panel()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        return view("information.about", [
            'users_list'=>$Users,
            'notify'=>$notify,
        ]);
    }

    public function teacher_notices()
    {
        $Users=User::get();
        $notifications = Notification::orderBy('created_at','desc')->get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        return view("information.notices", [
            'users_list'=>$Users,
            'notifications'=>$notifications,
            'notify'=>$notify,

        ]);
    }

    public function store(Request $request)
    {
        $notification = new Notification();
        $notification->title = $request->input('title');
        $notification->content = $request->input('content');
        $notification->user_id = auth()->user()->id;
        $notification->created_at = date('Y-m-d H:i:s');
        $notification->save();
        return redirect()->back();
    }
}
