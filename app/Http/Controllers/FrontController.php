<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage() {
        $articles = Article::latest()->take(6)->get();
        return view('welcome', compact('articles'));
    }
}
