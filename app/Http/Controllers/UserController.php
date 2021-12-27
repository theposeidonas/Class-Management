<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        $users_list = User::get();
        $lesson_list = Lesson::where('author',auth()->user()->id)->get();
        return view('modules.profile',[
            'users_list'=>$users_list,
            'lesson_list'=>$lesson_list,
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
