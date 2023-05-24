<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homepage() {
        $articles = Article::latest()->take(6)->get();
        return view('welcome', compact('articles'));
    }

    public function show(Category $category){
      $articles = $category->articles()->latest()->get();

        return view('category', compact('articles', 'category'));
    }
    // public function autenticate(){
    //     return view('/auth/login-register');
    // }
}
