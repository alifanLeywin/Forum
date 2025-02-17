<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin/dashboard', function (){
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

// Route::get('/dashboard',[UserController::class,'index'])->name('dashboard.get');  // BUAT MASUK KE DASHBOARD

Route::post('/dashboard',[UserController::class,'store'])->name('dashboard.post');

// Route::post('/postingan',[UserController::class,'store'])->name('create.post');  // buat di form method post

Route::get('admin/dashboard', function (){
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

// Route::get('/dashboard',[UserController::class,'index'])->name('dashboard.get');  // BUAT MASUK KE DASHBOARD

Route::post('/dashboard',[UserController::class,'store'])->name('dashboard.post');

// Route::post('/postingan',[UserController::class,'store'])->name('create.post');  // buat di form method post

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::post('/create-post', [UserController::class, 'store'])->name('create.post');
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::post('/create-post', [UserController::class, 'store'])->name('create.post');
});

// buat hapus
Route::delete('/posts/{post}', [UserController::class, 'destroy'])->name('posts.destroy');




Route::get('/create', function () {
    return view('create'); // Menampilkan halaman form create
})->middleware(['auth', 'verified']) // Hanya bisa diakses oleh pengguna yang sudah login
  ->name('create'); // Nama route: create
Route::get('/create', function () {
    return view('create'); // Menampilkan halaman form create
})->middleware(['auth', 'verified']) // Hanya bisa diakses oleh pengguna yang sudah login
  ->name('create'); // Nama route: create

require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [HomeController::class, 'index']);
// Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
// Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);