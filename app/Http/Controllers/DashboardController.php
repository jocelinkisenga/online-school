<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Candidature;

class DashboardController extends Controller
{
    public function index (){

        $new_courses = Course::whereConfirmed(null)->limit(5)->get();


        return view('admin.index',['new_courses'=>$new_courses]);
    }
}
