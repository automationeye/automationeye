<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaperController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/careers',[HomeController::class,'careers']);

Route::get('/research-papers', [PaperController::class, 'index'])->name('papers.index');
Route::get('/research-papers/category/{slug}', [PaperController::class, 'byCategory'])->name('papers.category');
Route::get('/research-papers/{slug}', [PaperController::class, 'show'])->name('papers.show');
Route::get('/papers/download/{id}', [PaperController::class, 'download'])->name('papers.download');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('papers', PaperController::class)->except(['show']);
});
Route::post('/admin/papers/generate-global-qr', [PaperController::class, 'generateGlobalQrFromAdmin'])->name('admin.generate.global.qr');