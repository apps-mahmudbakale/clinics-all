<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HmoPlanController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HmoGroupController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\SystemSettingsController;
use App\Http\Controllers\ServiceCategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'app', 'as' => 'app.', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('hmos', HmoGroupController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('documents', DocumentController::class);
    Route::resource('payment-methods', PaymentMethodController::class);
    Route::resource('religions', ReligionController::class);
    Route::resource('hmo-services', PaymentMethodController::class);
    Route::resource('hmo-plans', HmoPlanController::class);
    Route::resource('settings', SystemSettingsController::class)->except('store', 'update', 'edit', 'show', 'destroy');
    Route::post('settings', [SystemSettingsController::class, 'updateSystemSettings'])->name('update.system.settings');
    Route::post('settings/currency', [SystemSettingsController::class, 'updateStoreCurrency'])->name('update.store.currency');
    Route::resource('categories', ServiceCategoryController::class);
    Route::resource('positions', PositionController::class);
    // Route::resource('hmo-plans', HmoPlanController::class);
    // Route::resource('hmo-plans', HmoPlanController::class);
});
Route::get('getLGA/{state}', [DashboardController::class, 'getLGA']);

