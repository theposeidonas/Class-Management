<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClassroomController extends Controller
{
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
        $timetable = [
          'Monday'=>[
              '09:00 - 10:00'=>['',''],
              '10:00 - 11:00'=>['',''],
              '11:00 - 12:00'=>['',''],
              '12:00 - 13:00'=>['',''],
              '13:00 - 14:00'=>['',''],
              '14:00 - 15:00'=>['',''],
              '15:00 - 16:00'=>['',''],
              '16:00 - 17:00'=>['',''],
              '17:00 - 18:00'=>['','']
          ],
          'Tuesday'=>[
              '09:00 - 10:00'=>['',''],
              '10:00 - 11:00'=>['',''],
              '11:00 - 12:00'=>['',''],
              '12:00 - 13:00'=>['',''],
              '13:00 - 14:00'=>['',''],
              '14:00 - 15:00'=>['',''],
              '15:00 - 16:00'=>['',''],
              '16:00 - 17:00'=>['',''],
              '17:00 - 18:00'=>['','']
          ],
          'Wednesday'=>[
              '09:00 - 10:00'=>['',''],
              '10:00 - 11:00'=>['',''],
              '11:00 - 12:00'=>['',''],
              '12:00 - 13:00'=>['',''],
              '13:00 - 14:00'=>['',''],
              '14:00 - 15:00'=>['',''],
              '15:00 - 16:00'=>['',''],
              '16:00 - 17:00'=>['',''],
              '17:00 - 18:00'=>['','']
          ],
          'Thursday'=>[
              '09:00 - 10:00'=>['',''],
              '10:00 - 11:00'=>['',''],
              '11:00 - 12:00'=>['',''],
              '12:00 - 13:00'=>['',''],
              '13:00 - 14:00'=>['',''],
              '14:00 - 15:00'=>['',''],
              '15:00 - 16:00'=>['',''],
              '16:00 - 17:00'=>['',''],
              '17:00 - 18:00'=>['','']
          ],
          'Friday'=>[
              '09:00 - 10:00'=>['',''],
              '10:00 - 11:00'=>['',''],
              '11:00 - 12:00'=>['',''],
              '12:00 - 13:00'=>['',''],
              '13:00 - 14:00'=>['',''],
              '14:00 - 15:00'=>['',''],
              '15:00 - 16:00'=>['',''],
              '16:00 - 17:00'=>['',''],
              '17:00 - 18:00'=>['','']
          ]
        ];
        $classroom->time_table = json_encode($timetable);


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
