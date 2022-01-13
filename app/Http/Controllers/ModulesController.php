<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Lesson;
use App\Models\Notification;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Ramsey\Uuid\Type\Time;

class ModulesController extends Controller
{

    public function teacher_module()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        return view("modules.teachers", [
            'users_list'=>$Users,
            'notify'=>$notify,

        ]);
    }
    public function lesson_module()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        $lessons = Lesson::LeftJoin('users','lesson.author','=','users.id')->LeftJoin('classroom','lesson.location','=','classroom.id')->select('users.name','classroom.title as classroom_name','lesson.*')->get();
        $classroom_list = Classroom::get();
        return view("modules.lesson", [
            'users_list'=>$Users,
            'lesson_list'=>$lessons,
            'classroom_list'=>$classroom_list,
            'notify'=>$notify,
        ]);
    }
    public function classroom_module()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        $Classrooms=Classroom::leftJoin('users','classroom.author','=','users.id')->select('users.name','classroom.*')->get();
        return view("modules.classroom", [
            'users_list'=>$Users,
            'classroom_list'=>$Classrooms,
            'notify'=>$notify,
        ]);
    }
    public function timetable_module()
    {
        $Users=User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        $monday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','monday')->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();

        $tuesday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','tuesday')->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $wednesday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','wednesday')->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $thursday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','thursday')->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $friday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','friday')->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();

        $timetable_list= [$monday,$tuesday,$wednesday,$thursday,$friday];
        return view("modules.timetable", [
            'users_list'=>$Users,
            'notify'=>$notify,
            'timetable_list'=>$timetable_list,
        ]);
    }
    public function addtotimetable()
    {
        $lessons = Lesson::where('author', auth()->user()->id)->get();
        $classrooms = Classroom::get();
        return view("modules.addto-timetable",[
            'lessons'=>$lessons,
            'classrooms'=>$classrooms
        ]);
    }



    public function checktimetable(Request $request)
    {
        if($request->input('faculty')=='personal')
        {
            $classrooms = Classroom::where('faculty',auth()->user()->faculty)->get();
        }
        else
        {
            $classrooms = Classroom::get();
        }
        $capacity= $request->input('capacity');
        $capacity = explode("-", $capacity);
        if(empty($classrooms))$classrooms='sınıf yok';
        else {
        foreach ($classrooms as $key=>$classroom)
        {
            if($classroom->capacity<$capacity[0] or $classroom->capacity>$capacity[1]) unset($classrooms[$key]);
            $spec_json = json_decode($classroom->spec_json);
            if($request->input('blackboard') == 1 and $spec_json->blackboard=='') unset($classrooms[$key]);
            if($request->input('special_seats') == 1 and $spec_json->special_seats=='') unset($classrooms[$key]);
            if($request->input('proffessor_chair') == 1 and $spec_json->proffessor_chair=='') unset($classrooms[$key]);
            if($request->input('projector') == 1 and $spec_json->projector=='') unset($classrooms[$key]);
            if($request->input('smartboard') == 1 and $spec_json->smartboard=='') unset($classrooms[$key]);
            if($request->input('internet') == 1 and $spec_json->internet=='') unset($classrooms[$key]);
            if($request->input('pc') == 1 and $spec_json->pc=='') unset($classrooms[$key]);
            if($request->input('webcam') == 1 and $spec_json->webcam=='') unset($classrooms[$key]);
            if($request->input('speakers') == 1 and $spec_json->speakers=='') unset($classrooms[$key]);
            if($request->input('ac') == 1 and $spec_json->ac=='') unset($classrooms[$key]);
        }
        }
        $timetable = array();
        foreach ($classrooms as $key=>$classroom)
        {
            $temp = Timetable::where('classroom_id',$classroom->id)->get();
            if(!$temp->isEmpty())array_push($timetable,$temp);
        }
//        $data = $request->input();
      $success=1;

        return response()->json([
            'success'=>$success,
            'classrooms'=>$classrooms,
            'timetable'=>$timetable
        ]);
    }
    public function addtotimetablenew(Request $request)
    {
//        $checkingtwin = Timetable::where('lesson_id', $request->input('lesson_id'))->where('classroom_id',$request->input('classroom_id'))->where('day',$request->input('day'))->where('time',$request->input('time'))->first();
//        if(empty($checkingtwin))return response()->json([
//            'success'=>'0'
//        ]);
        $timestart = substr($request->input('time'),0 ,2);
        $timeend = substr($request->input('time_end'),0,2);
        $i = $timeend-$timestart;
        if($i==1)
        {
        $timetable = new Timetable();
        $timetable->user_id = auth()->user()->id;
        $timetable->day = $request->input('day');
        $timetable->lesson_id = $request->input('lesson_id');
        $timetable->classroom_id = $request->input('classroom_id');
        $timetable->time = $request->input('time');
        $timetable->time_end = $request->input('time_end');

        if($timetable->save()) return response()->json([
            'success'=>'1'
        ]);
        else return response()->json([
            'success'=>'0'
        ]);
        }
        else if ($i< 1) return response()->json([
            'success'=>'0'
        ]);

        else
        {

            $timestart = substr($request->input('time'),0 ,2);
            $timeend = substr($request->input('time_end'),0,2);
           while($timestart<$timeend)
            {
            $timetable = new Timetable();
            $timetable->user_id = auth()->user()->id;
            $timetable->day = $request->input('day');
            $timetable->lesson_id = $request->input('lesson_id');
            $timetable->classroom_id = $request->input('classroom_id');
            $timetable->time = $timestart.':00:00';
                $timestart++;
            $timetable->time_end = $timestart.':00:00';

                $timetable->save();
        }
            return response()->json([
                'success'=>'1'
            ]);


        }
        }



}
