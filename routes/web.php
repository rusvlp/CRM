<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (Request $request) {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/leads', [LeadController::class, 'leads'])->name('leads');
    Route::get('/leads/create', [LeadController::class, 'createPage'])->name('createLeads');

    Route::prefix("admin") -> group(
        function(){
            Route::get('/', [AdminController::class, 'adminPanel'])->name('admin_panel');
            Route::get('/users', [AdminController::class, 'usersPage'])->name('admin_users');
            Route::get('/users/add', [UserController::class, 'addUser'])->name('admin_add_user');
            Route::post('/users/create', [UserController::class, 'createUser'])->name("admin_create_user");
        }
    );

});

require __DIR__.'/auth.php';
