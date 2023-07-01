<?php

use App\Http\Controllers\ProfileController;
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

// root
Route::get('/', function () {
    return view('index');
});

Route::middleware('auth')->group(function () {
    Route::prefix('post')->group(function () {
        Route::name('post.')->group(function () {
            // ブログ記事一覧
            Route::get('/', [App\Http\Controllers\Post\IndexController::class, 'index'])->name('index');

            // ブログ記事詳細
            Route::get('/show/{post}', [App\Http\Controllers\Post\IndexController::class, 'show'])->name('show');

            // 新規ブログ作成画面
            Route::get('/create', [App\Http\Controllers\Post\CreateController::class, 'index'])->name('create.index');

            // 新規ブログ作成
            Route::post('/create/submit', [App\Http\Controllers\Post\CreateController::class, 'submit'])->name('create.submit');


            // 記事編集画面
            Route::get('/edit/{post}', [App\Http\Controllers\Post\EditController::class, 'index'])->name('edit.index');

            // 記事更新
            Route::patch('/edit/{post}/submit', [App\Http\Controllers\Post\EditController::class, 'submit'])->name('edit.submit');

            // 記事削除
            Route::delete('/delete/{post}', [App\Http\Controllers\Post\DeleteController::class, 'submit'])->name('delete.submit');
        });
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
