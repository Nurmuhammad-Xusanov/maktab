<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('ContentSearch');

        // Ma'lumotlarni qidirish
        $results = Post::where('title', 'like', "%{$query}%")->get();

        return view('front.search', compact('results', 'query'));
    }
}
