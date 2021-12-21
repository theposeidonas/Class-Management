<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class VersionController extends Controller
{
    public function index()
    {
        $Users=User::get();
        return view("resources.version", [
            'users_list'=>$Users,
        ]);
    }
}
