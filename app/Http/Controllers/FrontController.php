<?php

namespace App\Http\Controllers;



class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function connect()
    {
        return view('front.connect');
    }
    public function education()
    {
        return view('front.education');
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
        return view('front.gallery');
    }
    public function infographic()
    {
        return view('front.infographic');
    }
    public function leadership()
    {
        return view('front.leadership');
    }
    public function leadershipDetails()
    {
        return view('front.leadershipDetails');
    }
    public function rekvizit()
    {
        return view('front.rekvizit');
    }
    public function schoolNews()
    {
        return view('front.schoolNews');
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
        return view('front.teacehrs');
    }
    public function usefulResources()
    {
        return view('front.usefulResources');
    }
    public function usefulResourcesDetails()
    {
        return view('front.usefulResourcesDetails');
    }
}
