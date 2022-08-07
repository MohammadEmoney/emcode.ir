<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\NewsLetterController;
use App\Http\Controllers\Front\PortfolioController as FrontPortfolioController;
use Illuminate\Support\Facades\Redis;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('portfolios', [FrontPortfolioController::class, 'index'])->name('front.portfolios.index');
Route::get('portfolios/{portfolio}', [FrontPortfolioController::class, 'show'])->name('front.portfolios.show');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('contacts', [ContactController::class, 'show'])->name('front.contacts.show');
Route::post('newsletter', [NewsLetterController::class, 'subscribe'])->name('front.newsletter.subscribe');
Route::get('redis', function(){
    // dump(app()->make('redis'));
    $redis = Redis::set('name', 'Taylor');
    dump(Redis::get('name'));
});


Route::middleware(['auth'])->prefix('dashboard')->group(function(){
    // Single Routes
    Route::get('/', [AdminHomeController::class, 'index'])->name('dashboard');
    Route::delete('images/{image}', [ImageController::class, 'destroy'])->name('images.destroy');
    Route::patch('images/{image}', [ImageController::class, 'update'])->name('images.update');

    // Resource Routes
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/portfolios', PortfolioController::class);
    Route::resource('/settings', SettingController::class);


});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
