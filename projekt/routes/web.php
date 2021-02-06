<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoicesController;
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
//tabela routingu, czyli jak appka sie zachowuje gdy dany adres pojawi sie w pasku przegladarki. Poniżej funkcje zwracające widoki z folderu resources->views
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/fakturomat', function () {
    return view('fakturomat');
});
Route::get('/faktury', [InvoicesController::class, 'index'])->name('invoices.listaFaktur');

Route::get('/faktury/dodaj', [InvoicesController::class, 'create'])->name('invoices.dodajFakture');
Route::post('/faktury/zapisz', [InvoicesController::class, 'store'])->name('invoices.store');
Route::get('/faktury/edytuj/{id}', [InvoicesController::class, 'edit'])->name('invoices.edit');
Route::put('/faktury/zmien/{id}', [InvoicesController::class, 'update'])->name('invoices.update');
Route::get('/faktury/zmien/{id}', [InvoicesController::class, 'delete'])->name('invoices.delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pages/{adr}', 'App\Http\Controllers\NewController@show');
Route::get('pages/', 'App\Http\Controllers\NewController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
