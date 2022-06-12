<?php

use Illuminate\Support\Facades\Route;
use App\Htp\Controller\AdminController;
use Dflydev\DotAccessData\Data;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

/* -------------------------Admin Routes------------------------- */

// Route::prefix('admin')->group(function () {

//     Route::get('/login', [AdminController::class, Index])->name('login_form');

//     Route::get('/login/owner', [AdminController::class, Login])->name('admin.login');

//     Route::get('/dashboard', [AdminController::class, Dashboard])->name('admin.dashboard');
// });

/* -------------------------End Admin Routes--------------------------- */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';