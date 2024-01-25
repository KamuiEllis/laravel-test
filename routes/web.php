<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;

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

Route::get('/', [CatController::class, 'getCats']);

Route::get('/addCat', function () {
    return view('addCat');
});

Route::get('/getCat/{cat}', [CatController::class, 'getCat']);

Route::put('/editCat/{cat}', [CatController::class, 'editCat']);

Route::post('/postCat', [CatController::class, 'postCat']);

Route::delete('/deleteCat/{cat}', [CatController::class, 'deleteCat']);

Route::post('/search', [CatController::class, 'search']);
