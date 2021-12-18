<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
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
}
