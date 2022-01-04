<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Notification;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function user($user_id)
    {
        $users_list = User::get();
        $notify = new \stdClass();
        $notify->content = Notification::orderBy('created_at','desc')->get();
        $notify->count = count(Notification::get());
        $profile = User::where('id',$user_id)->first();
        $lesson_list = Lesson::where('author',$user_id)->get();
        $monday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','monday')->where('user_id',$user_id)->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();

        $tuesday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','tuesday')->where('user_id',$user_id)->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $wednesday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','wednesday')->where('user_id',$user_id)->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $thursday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','thursday')->where('user_id',$user_id)->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();
        $friday = Timetable::LeftJoin('users','timetable.user_id','=','users.id')->LeftJoin('classroom','timetable.classroom_id','=','classroom.id')->LeftJoin('lesson','timetable.lesson_id','=','lesson.id')->where('day','friday')->where('user_id',$user_id)->select('users.name','classroom.title as classroom_name','lesson.title as lesson_name','timetable.*')->orderBy('time')->get();

        $timetable_list= [$monday,$tuesday,$wednesday,$thursday,$friday];
        return view('modules.user',[
            'users_list'=>$users_list,
            'lesson_list'=>$lesson_list,
            'timetable_list'=>$timetable_list,
            'notify'=>$notify,
            'profile'=>$profile
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $imageName = time().'.'.$request->avatar->extension();

        $request->avatar->move(public_path('/assets/media/avatars'), $imageName);
        $user = new User();
        $user->avatar = $imageName;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->auth = $request->input('auth');
        $user->password = Hash::make($request->input('password'));
        $user->password_salt = Hash::make($request->input('password'));
        $user->faculty = $request->input('faculty');
        if($user->save())
            return back()->withErrors(['form' => 'success']);
        else return back()->withErrors(['form' => 'fail']);


    }
    public function delete(Request $request)
    {
        User::where('name', $request->input('name'))->delete();
        return response()->json(['success'=>'Ajax request submitted successfully']);
    }

    public function update_email(Request $request)
    {

        if(User::where('id',$request->input('user_id'))->update(['email'=>$request->input('email')]))
            return back()->withErrors(['form' => 'success']);
        else return back()->withErrors(['form' => 'fail']);
    }
    public function update_faculty(Request $request)
    {

        if(User::where('id',$request->input('user_id'))->update(['faculty'=>$request->input('faculty')]))
            return back()->withErrors(['form' => 'success']);
        else return back()->withErrors(['form' => 'fail']);
    }

    public function update_password(Request $request)
    {
        $selected_user = User::where('id',$request->input('user_id'))->first();
       if(Hash::check($request->input('current_password'),$selected_user->password) and User::where('id',$request->input('user_id'))->update(['password'=>Hash::make($request->input('password'))]))
           return back()->withErrors(['form' => 'success']);
       else return back()->withErrors(['form' => 'fail']);
   }
}
