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

Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\CrudController::class, 'index']);
    Auth::routes();
    Route::get('/home', [App\Http\Controllers\CrudController::class, 'list']);
});


Route::get('peoples',                [App\Http\Controllers\CrudController::class, 'list'   ]);
Route::get('people/new',             [App\Http\Controllers\CrudController::class, 'new'    ]);
Route::get('people/{id}/edit',       [App\Http\Controllers\CrudController::class, 'edit'   ]);
Route::post('people/add',            [App\Http\Controllers\CrudController::class, 'add'    ]);
Route::post('people/update/{id}/',   [App\Http\Controllers\CrudController::class, 'update' ]);
Route::delete('people/delete/{id}/', [App\Http\Controllers\CrudController::class, 'delete' ]);
