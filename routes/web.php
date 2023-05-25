<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontController::class, 'homepage'])->name('homepage');
Route::get('/category/{category}', [FrontController::class, 'show'])->name('category');


Route::get('/article/index',[ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create',[ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store',[ArticleController::class, 'store'])->name('article.store');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');

Route::patch('/accept/article/{article}', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');
Route::patch('/reject/article/{article}', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');


Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::get('/auth/login-register', [FrontController::class, 'autenticate'])->name('autenticate');


Route::get('/ricerca/annuncio', [FrontController::class, 'searchArticles'])->name('articles.search');
