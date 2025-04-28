<?php


use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\Message\messageController;
use App\Http\Controllers\BookController;
use App\http\Middleware\Auth;
use Illuminate\Support\Facades\Route;
use App\http\Middleware\AuthMiddleware;
use App\Models\Book;


Route::get('/', function () {
    $mostLikedBooks = Book::all();
    return view('welcome',['mostLikedBooks'=>$mostLikedBooks]);
})->name("home");

Route::post('/',[messageController::class,'store'])->name("home.message.store");

Route::get('/login',function (){
    return view('auth.login');
})->name("auth.login.show");

Route::post('/login',[AuthController::class,'login'])->name('auth.login');


Route::get('/register',function (){
    return view('auth.register');
})->name("auth.register");
Route::post('/register',[AuthController::class,'register'])->name("auth.register.create");

Route::delete('/',[AuthController::class,'logout'])->name("auth.logout");




Route::resource('books', BookController::class)->middleware(AuthMiddleware::class);

Route::post('books/create',[BookController::class,'store'])->name('books.store');

