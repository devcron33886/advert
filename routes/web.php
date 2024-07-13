<?php

use App\Http\Controllers\Admin\AdvertController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoryIndexController;
use App\Http\Controllers\ContactIndexController;
use App\Http\Controllers\EmployerIndexController;
use App\Http\Controllers\FaqIndexController;
use App\Http\Controllers\PostedAdsConteroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowEmployerController;
use App\Http\Controllers\StoreContactController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class)->name('home');
Route::get('/employers', EmployerIndexController::class)->name('employers');
Route::get('/employer/{employer:slug}', ShowEmployerController::class)->name('employers.show');
Route::get('/job/{job:slug}', PostedAdsConteroller::class)->name('adverts.show');
Route::get('/jobs/{category:slug}', CategoryIndexController::class)->name('category.show');
Route::get('/contact-us', ContactIndexController::class)->name('contact.index');
Route::post('/contact', StoreContactController::class)->name('contact.store');
Route::post('/subscribe', SubscribersController::class)->name('subscriber');
Route::get('/faqs', FaqIndexController::class)->name('faqs');
Route::view('/about-us', 'about.index')->name('about-us');
Route::view('/privacy-and-policy', 'privacy-and-policy')->name('privacy');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('categories', CategoryController::class);
    Route::post('companies/media', [CompanyController::class, 'storeMedia'])->name('companies.storeMedia');
    Route::post('companies/ckmedia', [CompanyController::class, 'storeCKEditorImages'])->name('companies.storeCKEditorImages');
    Route::resource('companies', CompanyController::class);
    Route::post('adverts/media', [AdvertController::class, 'storeMedia'])->name('adverts.storeMedia');
    Route::post('adverts/ckmedia', [AdvertController::class, 'storeCKEditorImages'])->name('adverts.storeCKEditorImages');
    Route::resource('adverts', AdvertController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('faqs', FaqController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
