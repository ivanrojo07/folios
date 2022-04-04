<?php

use App\Http\Controllers\CampaingController;
use App\Http\Controllers\FolioController;
use App\Models\Campaing;
use App\Models\FakeFolio;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    $fake_folios = FakeFolio::get();
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'fake_folios'=>$fake_folios,
    ]);
})->name('index');

Route::get('/campaing',[CampaingController::class, 'create'])->name('campaing.create');
Route::post('/campaing',[CampaingController::class,'store'])->name('campaing.store');

Route::get('/folio/result',[FolioController::class, 'find'])->name('folio.find');

require __DIR__.'/auth.php';
