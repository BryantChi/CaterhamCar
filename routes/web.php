<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CarModelsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
// use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Admin\Repositories\PageSettingInfo;
use App\Http\Controllers\ContactMailController;

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

Route::any('/clear-cache', function () {
    \Artisan::call('optimize:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    \Artisan::call('config:cache');
    \Artisan::call('view:clear');
    // return "All Cache is cleared";
    // $pageInfo = PageSettingInfo::getHomeBanner('/index');
    // return view('index', ['pageInfo' => $pageInfo]);
    return redirect()->route('index');
});

Route::any('/', [IndexController::class, 'index'])->name('index');

Route::get('/about', [AboutUsController::class, 'index'])->name('about');
Route::get('/model-specifications', function() {
    $pageInfo = PageSettingInfo::getBanners('/model-specifications');
    return view('model_specifications', ['title' => '車型規格', 'pageInfo' => $pageInfo]);
})->name('model-specifications');

Route::get('/models', [CarModelsController::class, 'index'])->name('models');
Route::get('/models/{id}', [CarModelsController::class, 'show']);

Route::any('/news', [NewsController::class, 'index'])->name('news');
Route::any('/news/news', [NewsController::class, 'getNews'])->name('news.news');
Route::any('/news/activity', [NewsController::class, 'getActivity'])->name('news.activity');
Route::any('/news/news/{id}', [NewsController::class, 'showNews']);
Route::any('/news/activity/{id}', [NewsController::class, 'showActivity']);

Route::get('/contact', function() {
    $pageInfo = PageSettingInfo::getBanners('/contact');
    return view('contact', ['title' => '聯絡資訊', 'pageInfo' => $pageInfo]);
})->name('contact');

Route::any('/ContactUs/MailSend', [ContactMailController::class, 'contactMail'])->name('ContactUsMail');
