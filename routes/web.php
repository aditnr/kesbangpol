<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengumumanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

require __DIR__.'/auth.php';

Route::get('/', [PublicController::class, 'index']);
Route::get('/berita', [PublicController::class, 'berita']);
Route::get('/pengumuman', [PublicController::class, 'pengumuman']);

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function(){
    Route::get('/', [DashboardController::class, 'index']);

    Route::controller(PengumumanController::class)->group(function () {
        Route::get('/pengumuman', 'index');
        Route::get('/pengumuman-create', 'create');
        Route::post('/pengumuman-create', 'save');
        Route::get('/pengumuman/{id}', 'show');
        Route::post('/pengumuman/{id}', 'update');
        Route::delete('/dashboard/pengumuman/{id}', [PengumumanController::class, 'delete'])->name('pengumuman.delete');
    });
});
