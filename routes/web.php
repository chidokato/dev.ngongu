<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SectionController;

use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\WardController;

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeEnController;
use App\Http\Controllers\HomeCnController;

Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'vi', 'cn'])) {
        abort(400);
    }
    // echo App::setLocale($locale);
    Session::put('locale', $locale);
    return redirect()->back();
    // ...
});

Route::get('admin', [LoginController::class, 'index'])->name('login');
Route::post('admin', [LoginController::class, 'store']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// ajax
Route::group(['prefix'=>'ajax'],function(){
    Route::get('change_cate_lang/{id}', [AjaxController::class, 'change_cate_lang']);
    Route::get('change_province/{id}', [AjaxController::class, 'change_province']);
    Route::get('change_district/{id}', [AjaxController::class, 'change_district']);
});


Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        // main
        Route::get('main', [MainController::class, 'index'])->name('admin');

        Route::resource('province',ProvinceController::class);
        Route::resource('district',DistrictController::class);
        Route::resource('ward',WardController::class);

        Route::resource('category',CategoryController::class);

        Route::resource('post',PostController::class);

        Route::resource('product',ProductController::class);

        Route::resource('users',UserController::class);

        Route::group(['prefix'=>'section'],function(){
            Route::get('index/{pid}', [SectionController::class, 'index']);
        });
    });
});

// home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('{slug}', [HomeController::class, 'category']);
Route::get('{catslug}/{slug}', [HomeController::class, 'post']);
