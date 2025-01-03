<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class UsefulResourcesController extends Controller
{
    public function index()
    {

        $response = Http::get('https://jsonplaceholder.typicode.com/posts');


        if ($response->successful()) {
            $resources = $response->json();
        } else {
            $resources = [];
        }

        return view('front.usefulresources', compact('resources'));
    }
    public function details($id)
    {
        // Bu yerda resurs ma'lumotlarini bazadan olish mumkin
        $resource = [
            'id' => $id,
            'title' => 'Edukids',
            'description' => 'EduKids - o‘quvchi-yoshlar uchun mo‘ljallangan platforma...',
            'image' => '/image/Useful-links.jpg'
        ];

        return view('front.usefulresourcesDetails', compact('resource'));
    }
}
