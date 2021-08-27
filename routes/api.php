<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('exams', 'ExamController@index');
// Route::group(['prefix' => 'exam'], function () {
//     Route::post('add', 'ExamController@add');
//     Route::get('edit/{id}', 'ExamController@edit');
//     Route::post('update/{id}', 'ExamController@update');
//     Route::delete('delete/{id}', 'ExamController@delete');
// });

Route::middleware('api')->group(function () {
    Route::resource('exams', ExamController::class);
});