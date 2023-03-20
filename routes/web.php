<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
// use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\Users\LoginController;

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

Route::resource('login',LoginController::class);














Route::get('/', function () {
	// echo $locale = App::currentLocale();
    return view('welcome');

});

Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'vi'])) {
        abort(400);
    }
 
    App::setLocale($locale);
 	Session::put('locale', $locale);
 	return redirect()->back();
    // ...
});

Route::resource('category',CategoryController::class);
Route::resource('post',PostController::class);
