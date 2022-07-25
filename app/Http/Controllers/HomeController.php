<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $courses = Course::whereConfirmed(1)->get();
        $count_courses = Course::count();
        $count_users = User::count();
        return view('pages.index',['courses'=>$courses,
            'count_user'=>$count_users,
            'count_course'=>$count_courses,
            ]);
    }
}
