<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


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

// Route::get('/admin/post', function (Request $request) {
//     if ($request->is('admin/*')) {
//         return '<h1>Request path matches with "admin/*" patterns</h1>';
//     }
// });

Route::get('/', function(){
    return view('form');
});

// Route::post('/post', [FormController::class, 'post']);
Route::post('/post', [FormController::class, 'post']);