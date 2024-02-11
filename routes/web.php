<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Course;
// use App\Http\Livewire\Basic\Basic03;
use App\Livewire\Basic\Basic03;
use App\Livewire\Basic\Basic05;
use App\Livewire\Mid\Mid01;
use App\Livewire\Mid\Mid02;
use App\Livewire\Mid\Mid03;


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

Route::get('/fullpage', Basic03::class);

Route::get('/fullpage2/{id}', Basic05::class);

Route::get('/task', Mid01::class);
Route::get('/mid2/{id}', Mid02::class);

Route::get('/post', Mid03::class);






