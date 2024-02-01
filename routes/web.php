<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class , 'welcome'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class , 'chisiamo'])->name('chi-siamo');

Route::get('/shop', [PublicController::class , 'allcategory'])->name('shop.allcategory');

Route::get('/shop/{name}',[PublicController::class , 'shop'])->name('shop');
// la rotta che visualizza il form grazie al metodo get
Route::get('/shopdettaglio/{name}', [PublicController::class, 'shopdettaglio'])->name('shopdettaglio');
//la rotta che invia l email grazie al metodo post
Route::post('/contactmail',[PublicController::class,'contactmail'])->name('contactmail');
Route::get('contattaci',[PublicController::class , 'contattaci'])->name('contattaci');


















