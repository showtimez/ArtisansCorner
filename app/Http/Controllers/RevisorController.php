<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use App\Mail\BecomeRevisorUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $article_checked_ok=Article::where('is_accepted', true)->get();
        $article_checked_ko=Article::where('is_accepted', false)->get();
        $article_to_check=Article::where('is_accepted', null)->get();
        return view('revisor.index', compact('article_to_check', 'article_checked_ok', 'article_checked_ko'));
    }

    public function acceptArticle(Article $article){
        $article->setAccepted(true);
        return redirect()->back()->with('acceptedArticle', "Complimenti hai accettato l'articolo");

    }
    public function nullArticle(Article $article){
        $article->setAccepted(null);
        return redirect()->back()->with('nulledArticle', "Hai rimesso l' articolo in revisione");

    }

    public function rejectArticle(Article $article){
        $article->setAccepted(false);
        return redirect()->back()->with('rejectedArticle', "Complimenti hai rifiutato l'articolo");

    }
    public function becomeRevisor(){

        Mail::to('admin@corner.it')->send(new BecomeRevisor(Auth::user()));
        return redirect('/')->with('richiestaRevisor', 'Complimenti hai richiesto di diventare revisore correttamente');
    }

    public function makeRevisor(User $user){
        Artisan::call('corner:makeUserRevisor', ['email'=> $user->email]);
        Mail::to($user->email)->send(new BecomeRevisorUser(Auth::user()));
        return redirect()->back()->with('answerRevisor', "Complimenti hai reso revisore {$user->name}");

    }
    public function collabora(){

            return view('/revisor/collabora');
    }
}
