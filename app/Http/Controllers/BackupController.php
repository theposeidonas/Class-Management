<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    public function index()
    {
        $Users=User::get();
        $backups=glob('backups/*.sql');
        return view("system.backup", [
            'users_list'=>$Users,
            'backups'=>$backups,
        ]);
    }
}
