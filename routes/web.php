<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\ContactController;



Route::get('/',[BaseController::class,'home'])->name('home');
Route::get('/company',[BaseController::class,'company'])->name('company');
Route::get('/contact',[BaseController::class,'contact'])->name('contact');
Route::get('/services',[BaseController::class,'services'])->name('services');

// admin logins and dashboard routes
Route::get('/AdminLogin',[AdminController::class,'AdminLoginShow'])->name('login');
Route::post('/AdminLogin',[AdminController::class,'MakeLogin']);
Route::group(['middleware'=>'auth:admin'],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
    Route::get('logout',[AdminController::class,'logout'])->name("logout");
    // Home page edit by admin 
    Route::get('/AddHomePage',[PageController::class,'addpage']);
    Route::post('/page-create',[PageController::class,'CreatePage'])->name('page-create');

    // post ke liye route
    Route::get('/post-add',[PostController::class,'showeditor'])->name('post-add');
    // edite post 
    Route::get('/showpost',[PostController::class,'showpost'])->name('showpost');
    Route::get('/post-edit/{post_id?}',[PostController::class,'showeditor'])->name('post-edit');
    // store data or update data in one route 
    Route::post('/post-add/{post_id?}',[PostController::class,'post_store'])->name('post-add');
    Route::get('delete/{post_id?}',[PostController::class,'delete_post'])->name('delete');

    // Company page Editor Route
    Route::get('/Company-page',[PageController::class,'CompanyEditor'])->name('Company-page');

    // services-page
    Route::get('/services-page',[PageController::class,'ServicesEditor'])->name('services-page');
    
});
//contact page 
Route::post('/SaveContact',[ContactController::class,'SaveContact'])->name('SaveContact');
Route::get('/ShowContact',[ContactController::class,'ShowContact'])->name('ShowContact');
Route::get('del/{id?}',[ContactController::class,'DeleteContact'])->name('delete');





// // login form Routes
// Route::view('/LoginForm','LoginForm');
// Route::post('/PostLoginForm',[LoginController::class,'LoginFunction']);

// //Signup Form Route
// Route::view('/SignupForm','SignupForm');
// Route::post('/PostSignupForm',[SignupController::class,'SignupFunction']);

// // Course page Route
// Route::view('/Course','Course');


// //Log out Route 
// Route::get("/Logout",function (){
//     return view('index');
// });
