<?php
use Illuminate\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\C_titles;
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


Rotue::get('/login',[MyAuth::class, 'login_view']);
Rotue::get('/register',[MyAuth::class, 'register_view']);
Rotue::get('/logout',[MyAuth::class, 'logout_process']);
Rotue::post('/login',[MyAuth::class, 'login_process']);
Rotue::post('/register',[MyAuth::class, 'register_process']);

Route::resource('titles', C_titles::class)->middleware('auth');
Route::middleware('auth')->group(function(){
     // auth first
});

Route::get('/', function () {
    // return view('welcome');
    return 'hi';
});

Route::get('/my-route', function () {
    //echo "<h1> My Route Page</h1>";
    //return view('')
    //return viem('myroute');
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Lalaval";
    return view('myfolder.mypage',$data);
});

Route::post('/my-route',function(Request $req){
    $data['myinput'] = $req -> input('myinput');
    return view ('myroute',$data);
});

Route::get('/my-display', function () {
    $data['test'] = "test";
    return view('myfolder.input2', $data);
});

Route::post('/my-display',function(Request $req) {
    $data['myinputnumber'] = $req->input('myinputnumber');
    return view('mydisplay', $data);
});

Route::get('/admin', [AdminController::class, 'index']);

Route::resource('titles', C_titles::class);

Route::get('/my-controller' , [MyController::class, 'index']);

Route::get('/my-controller2' , 'App\Http\Controllers\MyController@index');
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3','MyController@index');
    Route::post('/my-controller3-post' , 'MyController@store');
});

Route::resource('/my-controller4' , MyController::class);
