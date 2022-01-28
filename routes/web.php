<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AddNewController;


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

//Route::post('/addNew', [InventoryController::class, 'addNewItem']);
            //route name  controller  function
Route::get('/', [InventoryController::class, 'getData']);
Route::post('/search', [InventoryController::class, 'dbSearch']);
Route::get('/delete/{id}', [InventoryController::class, 'dbDelete']);

Route::get('/addNew', [AddNewController::class, 'addPage']);
Route::post('/addNew',[AddNewController::class, 'addNewItem']);
Route::post('/addNew/cancel', [AddNewController::class, 'cancelNew']);

Route::get('/edit/{id}', [ItemController::class, 'editPage']);
Route::post('/edit/{id}', [ItemController::class, 'updateItem']);
Route::post('/edit/{id}/cancel', [ItemController::class, 'cancelUpdate']);
