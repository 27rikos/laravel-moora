<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KuisionerController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RankingController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('kuisioner', KuisionerController::class);
    Route::resource('alternatif', AlternatifController::class);
    Route::resource('bobot', BobotController::class);
    Route::get('ranking', [RankingController::class, 'index'])->name('ranking');
    Route::get('show-response', [RankingController::class, 'show'])->name('show_respon');
    Route::get('delete-response/{id}', [RankingController::class, 'destroy'])->name('delete_respon');
    Route::get('export', [RankingController::class, 'export'])->name('export');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/', [QuizController::class, 'page']);
Route::get('kuisioner-show', [QuizController::class, 'show'])->name('kuisioner');
Route::get('thanks', [QuizController::class, 'thanks'])->name('thanks');
Route::post('store-jawaban', [QuizController::class, 'store'])->name('save-quiz');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authentication', [AuthController::class, 'auth'])->name('auth');