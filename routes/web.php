<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Course;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $articles = Article::latest()->get();
    $id = rand(3,4);
    $courses = Course::find($id);

    return view('home',compact('courses'));
});
