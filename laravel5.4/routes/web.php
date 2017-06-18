<?php

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

//Route::get('/', function () {
  //  return view('welcome');
 // return view('index');
//});

//Route::get('/contact', function () {
  
 // return view('contact');
//});

//Route::get('/about', function () {
  
 // return view('about');
//});

//Route::get('/product/{id?}',function($id=1001){
   // $qty = 0;
   // $name = ['A','B','C'];
//return view('product', compact('id','qty','name'));

//});

Route::resource('/product','Resource\ProductController');

Route::get('about',function(){
  return 'about';

})->middleware('auth');

Route::get('faker', function(){
  $faker = Faker\Factory::create();
  DB::table('products')
    ->insert([
      'name' => $faker->firstname,
      'unit' => '',
      'price' => 100

    ]);


  return 'sucess';
 // dd($faker);
});


Route::resource('employee','EmployeeController');

Route::get('login','AuthController@getLogin')->name('login');

Route::post('login','AuthController@postLogin');
Route::get('logout','AuthController@logout');
