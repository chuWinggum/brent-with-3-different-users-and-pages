<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    function create(Request $request){
          //Validate inputs
          $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:teachers,email',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $teacher = new Teacher();
          $teacher->name = $request->name;
          $teacher->email = $request->email;
          $teacher->password = \Hash::make($request->password);
          $save = $teacher->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as teacher');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:teachers,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in teachers table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('teacher')->attempt($creds) ){
            return redirect()->route('teacher.home');
        }else{
            return redirect()->route('teacher.login')->with('fail','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::guard('teacher')->logout();
        return redirect('/');
    }
}