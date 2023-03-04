<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PsController;
use App\http\Controllers\StaticController;


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

Route::get('/', [StaticController::class , 'index'])->name('home.index');
Route::get('/about', [StaticController::class , 'about'])->name('home.about');
Route::get('/contact', [StaticController::class , 'contact'])->name('home.contact');

Route::resource('ps', PsController::class);




/*Route::get('/store', function () {
    $filter =request('mama');

if(isset($filter)){
    return 'hadihi page dyal montajat <span style="color:red">'.$filter.'</span>';
}
    return 'hadihi page dyal montajat <span style="color:red">kayniin mntojat! </span>';
});

Route::get('/akaz', function () {
    return view('akaz');
});
Route::get('/stor/{fandi?}', function ($fandi=null) {
   if(isset($fandi))
    {return"<h1>{$fandi}<h1/>";}
    return'<h1>storet<h1/>';
});*/