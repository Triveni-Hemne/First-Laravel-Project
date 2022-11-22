<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\MyUsers;

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

// Route::get('/{user} ', function ($user) {
//     echo $user ;
//     return view('welcome');
// });

Route::get('/home/about', function() {

    return view('home');
});

// Route::get('/demo',function(){
//      echo 'Hello Word';
// });

// Route::post('/test',function(){
//     echo 'testing the route';
// });

// Route::put('users{id}', function(){

// });

// Route::patch();

// Route::delete('user/{id}', function($id){
   
// });

// Route::get('/demo', function(){
//     return veiw('welcome');
// });

// Route::get('/about/{company}', function ($company) {
//     echo $company;
//     return view('about');
// });

// Route::get('/about/{company}', function ($company) {
//     echo $company;
//     return view('about', ['company'=>$company]);
// });

// Route::get('/about', function () {
//     return view('contact');
// });

//OR 

// Route::view('/about','about');
// Route::view('contact/{name}','contact');

//Route::get('path', 'controller file';)
// Route::get("user", [Users::class, 'index']);
// Route::get('/users' , [Users::class, 'index']);


// Route::get('user', 'Users@index');
// Route::get('users/{user}', [MyUsers::class, 'loadView']);
// Route::get('users/{name}', [MyUsers::class, 'loadView']);
// Route::get('users', [MyUsers::class, 'loadView']);
// Route::view('/contact', 'contact');
// Route::get('/contact/{name}' , [MyUsers::class, 'index']);// myUsers class me jo load View function hai
// Route::get('/contactt/{name}' , [MyUsers::class, 'loadView']);// myUsers class me jo load View function hai
// Route::get('home',[MyUsers::class, 'index']);