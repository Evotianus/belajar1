<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;


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

// Ini cara yang benar
Route::get('/', [WebController::class, 'index']);

// Ini bisa juga tapi tidak efektif
// Route::get('/', 'App\Http\Controllers\WebController@index');

// Cara lama
// Route::get('/', function () {
//     return view('index');
// });


// Cara lama
// Route::get('/qna', function () {
//     return view('qna', ['hari' => 'Minggu', 'materi' => 'laravel']);
// });

Route::get('/qna', [WebController::class, 'qna']);