<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Auth;


class ProfileController extends Controller
{
    public function create(){
        $my_courses = Course::whereUser_id(Auth::user()->id)->get();
        return view('pages.profile',['myCourses'=>$my_courses]);
    }

    public function store(Request $request){
        $user = User::findOrFail(Auth::user()->id);

        if($request->avatar){
            $new_file = time().'_'.$request->file('avatar')->getClientOriginalName();
            $path = $request->file('avatar')->storeAs('uploads',$new_file,'public_uploads');

            $user->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'avatar'=>$new_file,
                'occupation'=>$request->occupation,
                'adresse'=>$request->adresse,
                'post_code'=>$request->post_code,
                'phone'=>$request->phone,
                'linkedin'=>$request->linkedin,
                'twitter'=>$request->twitter,
                'description'=>$request->description
                ]);
        }
    }
}
