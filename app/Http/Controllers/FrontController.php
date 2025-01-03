<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Post;
use App\Models\Profession;
use App\Models\schoolMembers;
use App\Models\staff;
use App\Models\Timetable;
use Illuminate\Http\Request;



class FrontController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $member = schoolMembers::first();
        return view('front.index', compact('member', 'posts'));
    }
    public function connect()
    {
        return view('front.connect');
    }
    public function education()
    {
        $timetable = Timetable::all();
        return view('front.education', compact('timetable'));
    }
    public function educationDetails()
    {
        return view('front.educationDetails');
    }
    public function faq()
    {
        return view('front.faq');
    }
    public function gallery()
    {
        $images = Gallery::all();
        return view('front.gallery', compact('images'));
    }
    public function infographic()
    {
        return view('front.infographic');
    }
    public function leadership()
    {
        $staff_data = ["Zam direktor", "Ma'naviyatchi", "Bo'lim boshlig'i", "Yoshlar yetakchisi"];
        $staff = staff::whereHas('profession', function ($query) {
            $query->where('name', 'Maktab direktori');
        })->first();
        $workers = staff::whereHas('profession', function ($query) use ($staff_data) {
            $query->whereIn('name', $staff_data);
        })->get();

        return view('front.leadership', compact('staff', 'workers'));


    }


    public function rekvizit()
    {
        return view('front.rekvizit');
    }
    public function schoolNews()
    {
        $posts = Post::all();
        return view('front.schoolNews', compact('posts'));
    }
    public function schoolRules()
    {
        return view('front.schoolRules');
    }
    public function schoolTasks()
    {
        return view('front.schoolTasks');
    }
    public function stateSymbols()
    {
        return view('front.stateSymbols');
    }
    public function teachers()
    {
        $staff = staff::all();
        return view('front.teacehrs', compact('staff'));
    }
    public function usefulResources()
    {
        return view('front.usefulResources');
    }
    public function usefulResourcesDetails()
    {
        return view('front.usefulResourcesDetails');
    }
    public function searchResult()
    {
        return view('front.search');
    }
    
}
