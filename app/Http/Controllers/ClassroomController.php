<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClassroomController extends Controller
{
    public function detail($classroom_id)
    {
        $user_list = User::get();
        $user= Classroom::where('id',$classroom_id)->select('author')->first();
        $user = User::where('id',$user->author)->first();
        $classroom = Classroom::where('id',$classroom_id)->first();
        $spec = json_decode($classroom->spec_json);
        $monday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','monday')->where('classroom_id', $classroom_id)->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();

        $tuesday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','tuesday')->where('classroom_id', $classroom_id)->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $wednesday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','wednesday')->where('classroom_id', $classroom_id)->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $thursday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','thursday')->where('classroom_id', $classroom_id)->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $friday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','friday')->where('classroom_id', $classroom_id)->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();

        $timetable_list= [$monday,$tuesday,$wednesday,$thursday,$friday];
        return view('modules.classroom-detail',[
            'profile'=>$user,
            'users_list'=>$user_list,
            'classroom'=>$classroom,
            'spec'=>$spec,
            'timetable_list'=>$timetable_list
        ]);
    }
    public function store(Request $request)
    {
        $classroom = new Classroom();
        $classroom->title = $request->input('title');
        $classroom->description = $request->input('description');
        $classroom->author = $request->input('author');
        $classroom->capacity = $request->input('capacity');
        $spec_json = [
          'blackboard'=>$request->input('blackboard'),
          'special_seats'=>$request->input('special_seats'),
          'proffessor_chair'=>$request->input('proffessor_chair'),
          'projector'=>$request->input('projector'),
          'smartboard'=>$request->input('smartboard'),
          'internet'=>$request->input('internet'),
          'pc'=>$request->input('pc'),
          'webcam'=>$request->input('webcam'),
          'speakers'=>$request->input('speakers'),
          'ac'=>$request->input('ac'),
        ];
        $classroom->spec_json = json_encode($spec_json);
        $classroom->updated_at = date('Y-m-d H:i:s');
        $classroom->created_at = date('Y-m-d H:i:s');

        if($classroom->save())
            return back()->withErrors(['form' => 'success']);
        else return back()->withErrors(['form' => 'fail']);


    }
    public function delete(Request $request)
    {
        Classroom::where('title', $request->input('name'))->delete();
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }
}
