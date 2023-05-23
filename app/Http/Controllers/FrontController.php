<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage() {
        $articles = Article::take(6)->get()->sortByDesc('created_at');
        return view('welcome', compact('articles'));
    }
}
