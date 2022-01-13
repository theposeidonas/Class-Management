<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Lesson;
use App\Models\Notification;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        $classrooms = count(Classroom::get());
        $timetablepercent = count(Timetable::get());
        $timetablepercent = round(($timetablepercent/($classrooms*9*5)*100),2);
        $user_count = count(User::get());
        $class_count = count(Classroom::get());
        $lesson_count = count(Lesson::get());



        $backups = glob('backups/' . "*.sql");
        $foldersize = 0;
        foreach ($backups as $backup){
            $foldersize += filesize($backup);
        }

        $bilgisayar = Classroom::where('faculty', 'Bilgisayar Mühendisliği')->get("id");
        $bilgisayar_tm = Timetable::whereIn('classroom_id',$bilgisayar)->get();
        $bilgisayar = count($bilgisayar_tm) == 0 ? 0 :  round((count($bilgisayar)/(count($bilgisayar_tm)*9*5)*100),2);

        $elektrik = Classroom::where('faculty', 'Elektrik Elektronik Mühendisliği')->get("id");
        $elektrik_tm = Timetable::whereIn('classroom_id',$elektrik)->get();
        $elektrik = count($elektrik_tm) == 0 ? 0 :  round((count($elektrik)/(count($elektrik_tm)*9*5)*100),2);

        $makina = Classroom::where('faculty', 'Makina Mühendisliği')->get("id");
        $makina_tm = Timetable::whereIn('classroom_id',$makina)->get();
        $makina = count($makina_tm) == 0 ? 0 :  round((count($makina)/(count($makina_tm)*9*5)*100),2);

        $insaat = Classroom::where('faculty', 'İnşaat Mühendisliği')->get("id");
        $insaat_tm = Timetable::whereIn('classroom_id',$insaat)->get();
        $insaat = count($insaat_tm) == 0 ? 0 :  round((count($insaat)/(count($insaat_tm)*9*5)*100),2);

        $jeo = Classroom::where('faculty', 'Jeoloji Mühendisliği')->get("id");
        $jeo_tm = Timetable::whereIn('classroom_id',$jeo)->get();
        $jeo = count($jeo_tm) == 0 ? 0 :  round((count($jeo)/(count($jeo_tm)*9*5)*100),2);



        return view("dashboard.index", [
            'users_list'=>$Users,
            'notify'=>$notify,
            'timetablepercent'=>$timetablepercent,
            'user_count'=>$user_count,
            'class_count'=>$class_count,
            'lesson_count'=>$lesson_count,
            'foldersize'=>$foldersize,
            'bilgisayar'=>$bilgisayar,
            'elektrik'=>$elektrik,
            'makina'=>$makina,
            'insaat'=>$insaat,
            'jeo'=>$jeo,
        ]);
    }
}
