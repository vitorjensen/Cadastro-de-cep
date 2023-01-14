<?php
use App\Http\Controllers\clientesController;
use Illuminate\Database\Schema\IndexDefinition;
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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::prefix('clientes')->group(function(){
Route::get('/',[clientesController::class, 'Index'])->name('clientes-index');
Route::get('/create',[clientesController::class, 'create'])->name('clientes-create');
Route::post('/', [clientesController::class, 'store'])->name('clientes-store');
Route::delete('/{id}', [clientesController::class, 'destroy'])->where('id', '[0-9]+')->name('clientes-destroy');
});
