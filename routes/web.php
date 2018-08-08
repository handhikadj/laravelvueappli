<?php
use App\Student;
use Illuminate\Http\Request;
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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	 /*
    |--------------------------------------------------------------------------
    | Home Routes and Default Controller
    |--------------------------------------------------------------------------
    */
    Route::get('/', function() { return view ('home'); });
    Route::get('/home', function(){ return view('home'); });

	 /*
    |--------------------------------------------------------------------------
    | Student's Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('/student', 'StudentController');
    Route::post('/tambah', 'StudentController@tambah');
}); /* end of Middleware Auth */


