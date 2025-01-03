<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class FoydaliResursController extends Controller
{
    public function index()
    {
     
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');


        if ($response->successful()) {
            $resources = $response->json();


            return response()->json($resources);
        }

       
        return response()->json(['error' => 'Failed to fetch resources'], 500);
    }
}
