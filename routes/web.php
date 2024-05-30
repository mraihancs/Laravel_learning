<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\SingleAction;
use App\Http\Controllers\Registration;
use Monolog\Registry;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('home');
// });

// // Route::get('/demo', function(){
// //     echo "Hello Coder";
// // });

// Route::any('/test', function(){
//     echo "Testing the Route with Post Method";
// });


// Route::get('/demo', function(){
//     return view('demo');
// });


// Route::get('/index/{name}/{id?}', function($name,$id=null){
//     // echo $name;
//     // echo $id;

//     $data = compact('name','id');
//     return view('index')->with($data);
// });

// Route::get('/testt/{name}', function($name){
//     $dat = compact('name');
//     return view('demot')-> with($dat);
// });



// Route::get('/maruf/{na}', function($na){
// $mr = compact('na');
// return view('maruf')->with($mr);

// });

// Route::get('/mytest/{name?}',function($name = null){

//     $datae = compact('name');
//     return view('mytest')->with($datae);
// });


// Route::get('/', [DemoController::class,'index']);

// Route::get('/about', [DemoController::class,'index2']);


// // Route::get('/', [MyController::class,'myf']);

// Route::get('/', SingleAction::class);


Route::get('/registration', [Registration::class,'index']);

Route::post('/registration',[Registration::class, 'register']);

