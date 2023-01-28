<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\Aboutcontroller;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\ResumeController;
use App\Http\Controllers\Amdin\BannerController;
use App\Http\Controllers\Admin\Backendcontroller;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AboutshortController;
use App\Http\Controllers\Admin\PortfoliioController;
use App\Http\Controllers\Admin\AnimateHeadlineController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CvController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\ProjectinformationController;

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

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('frontpage');
    Route::post('user/message', 'message')->name('user.message');
    Route::get('user/message', 'message')->name('user.message');
    Route::post('user/message/store', 'store')->name('message.store');
    Route::get('cv/download/{file}','dwonloadcv')->name('cv.download');
    Route::get('single/blog/{id}','singleblogpage')->name('single.blog');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::controller(Backendcontroller::class)->group(function () {
        Route::get('/dashboard', 'index')->name('admin.dashboard');
        Route::get('message/show/', 'showmessage')->name('show.message');
        Route::post('destroy/message/{id}', 'destroy')->name('destroy.message');
        Route::get('message/view/{id}', 'view')->name('message.view');
    });

    // proflie
    Route::controller(AdminProfileController::class)->group(function(){
        Route::get('show/profile','indexprofile')->name('profile.index');
        Route::get('edit/profile/{id}','editprofile')->name('profileedit');
        Route::post('update/profile','updateprofile')->name('profileupdate');
    });

    // Logo
    Route::resource('logo', LogoController::class);
    // Banner
    Route::resource('banner', BannerController::class);
    // Banner Animated Headline
    Route::resource('animatedheadline', AnimateHeadlineController::class);
    // cv controller
    Route::resource('cv', CvController::class);
    // about
    Route::resource('about', Aboutcontroller::class);
    // about short info
    Route::resource('aboutshort', AboutshortController::class);
    // services
    Route::resource('service', ServiceController::class);
    // portfolio
    Route::resource('portfolio', PortfoliioController::class);
    // project informations
    Route::resource('projectinofo', ProjectinformationController::class);
    // resume
    Route::resource('resume', ResumeController::class);
    // blog category
    Route::resource('category',CategoryController::class);
    // blog
    Route::resource('blog',BlogController::class);
    // footer
    Route::resource('footer', FooterController::class);
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
