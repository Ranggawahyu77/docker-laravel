<?php

// use App\Models\Post;
// use App\Models\User;

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Kucing",
        "email" => "ranggawahyudvlpr@gmail.com",
        "image" => "kucing.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

//Halaman single posts
Route::get('/posts/{post:slug}', [PostController::class, "show"]);

//halaman Categories all type
Route::get('/categories', function() {
  return view('categories', [
    'title' => 'Post Categories',
    "active" => "categories",
    'categories' => Category::all()
  ]);
});

//halaman Categories
// Route::get('/categories/{category:slug}', function(Category $category){
//   return view('posts', [
//     "title" => "Post By Category : $category->name",
//     "active" => "categories",
//     "posts" => $category->posts->load('author', 'category'),
//   ]);
// });

//Halaman Author
// Route::get('/author/{author:username}', function(User $author){
//   return view('posts', [
//     "title" => "Post By Author : $author->name",
//     "active" => "posts",
//     "posts" => $author->posts->load('author', 'category')
//   ]);
// });

//Halaman Login
Route::get('/login', [LoginController::class, "index"])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, "authenticate"]);
Route::post('/logout', [LoginController::class, "logout"]);

//Halaman register
Route::get('/register', [RegisterController::class, "index"])->middleware('guest');
Route::post('/register', [RegisterController::class, "store"]);

//Halaman Dashboard
Route::get('/dashboard', function(){
  return view('dashboard.index');
})->middleware('auth');

//Halaman Dashboard untuk post
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

//Halaman Dashboar untuk category
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');