<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SectionsController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//site routes
Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/sign-in', [AuthController::class, 'signIn']);
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/', [SettingsController::class, 'index']);
    Route::get('/settings', [SettingsController::class, 'index']);
    Route::post('/settings/save', [SettingsController::class, 'save']);

    Route::group(['prefix' => 'sections'], function () {
        Route::get('/home', [SectionsController::class, 'HomeSectionIndex']);
        Route::post('/home/save', [SectionsController::class, 'HomeSectionSave']);

        Route::get('/about', [SectionsController::class, 'AboutSectionIndex']);
        Route::post('/about/save', [SectionsController::class, 'AboutSectionSave']);

        Route::get('/services', [SectionsController::class, 'ServicesSectionIndex']);
        Route::get('/service/create', [SectionsController::class, 'ServicesSectionCreate']);
        Route::post('/service/save', [SectionsController::class, 'SaveService']);
        Route::get('/service/delete/{id}', [SectionsController::class, 'DestroyService']);
        Route::get('/service/edit/{id}', [SectionsController::class, 'EditService']);
        Route::post('/service/update/{id}', [SectionsController::class, 'UpdateService']);

        Route::get('/pricing', [SectionsController::class, 'PricingSectionIndex']);
        Route::post('/pricing/save', [SectionsController::class, 'PricingSectionSave']);

        Route::get('/footer', [SectionsController::class, 'FooterSectionIndex']);
        Route::post('/footer/save', [SectionsController::class, 'FooterSectionSave']);
    });
});
