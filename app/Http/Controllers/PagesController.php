<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index()
    {

        $blogs = Post::inRandomOrder()->take(2)->get();

        return view('index', compact('blogs'));
    }
}
