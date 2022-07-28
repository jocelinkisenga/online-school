<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use Wink\WinkPost;
use Wink\WinkAuthor;

class HomeController extends Controller
{
    public function index(){

        $courses = Course::whereConfirmed(1)->get();
        $count_courses = Course::count();
        $count_users = User::count();

        $posts = WinkPost::with('tags')
                            ->live()
                            ->orderBy('publish_date','DESC')
                            ->simplePaginate(5);

        return view('pages.index',['courses'=>$courses,
            'count_user'=>$count_users,
            'count_course'=>$count_courses,
            'posts'=>$posts,
            ]);
    }
}
