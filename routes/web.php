<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\ReportCardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\YearController;
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

Route::middleware('guest')->group(function(){
    Route::get('/', [HomeController::class, 'index']);
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
});

Route::middleware(['auth', 'role:admin|teacher'])->group(function(){
    Route::get('teacher', [TeacherController::class, 'index']);
    Route::resource('students', StudentController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('years', YearController::class);
    Route::resource('months', MonthController::class);
    Route::resource('report-cards', ReportCardController::class);
});
