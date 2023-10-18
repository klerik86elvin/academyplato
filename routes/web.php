<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\WorkerController;
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
Route::get('lang/{locale}', function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.locales'))) {
        session()->put('locale', $locale);
        app()->setLocale($locale);
    }
    return redirect()->back();
});

Route::group([
    'prefix' => LocalizationService::locale(),
    'middleware' => 'setlocale'
], function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/services/{id?}', [ServiceController::class, 'index'])->name('service');
    Route::get('/article-category/{id?}', [ArticleCategoryController::class, 'index'])->name('article-category');
    Route::get('/article/{slug}', [ArticleController::class, 'index'])->name('article');
    Route::get('/event-category/{id?}', [EventCategoryController::class, 'index'])->name('event-category');
    Route::get('/event/{id}', [EventController::class, 'index'])->name('event');
    Route::get('/worker-month/{id?}', [WorkerController::class, 'index'])->name('month-workers');
    Route::get('/partners', [\App\Http\Controllers\PartnerController::class, 'index'])->name('partners');
    Route::get('/etik-kodeks', [\App\Http\Controllers\QuestionController::class, 'index'])->name('etik-kodeks');
    Route::get('/faq', [\App\Http\Controllers\FAQController::class, 'index'])->name('faq');
    Route::get('/news/{id?}', [\App\Http\Controllers\NewsController::class, 'index'])->name('news');
    Route::get('/ambassador', [\App\Http\Controllers\AmbassadorController::class, 'index'])->name('ambassador');
    Route::get('/team', [\App\Http\Controllers\TeamController::class, 'index'])->name('team');
    Route::get('/corporate-responsibility/{id?}', [\App\Http\Controllers\CorporateReponsibility::class, 'index'])->name('corporate-responsibility');
    Route::get('/career', [\App\Http\Controllers\CareerController::class, 'index'])->name('career');
    Route::get('/send-mail', [\App\Http\Controllers\CareerController::class, 'sendMail'])->name('send-mail');
    Route::post('/send-mail', [\App\Http\Controllers\CareerController::class, 'post'])->name('post-mail');
});


Route::group(['prefix' => 'plato-adm'], function () {
    Voyager::routes();
});
