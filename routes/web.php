<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/hello', function () {
//     return 'Hello Laravel';
// });

Route::get('/hello/{name}', function ($name) {
	return view('hello',
				['name'=> $name]
				);
});


Route::get('/user/{id}/{name}', function ($id, $name) {

	return 'This is ' .$name . ' with id ' .$id;
});

Route::get('/table/{number?}', function ($number = 2) {
	for ($i=1; $i <= 10 ; $i++) { 

		echo "$number x $i = " . $number*$i ." <br>";
	}
});