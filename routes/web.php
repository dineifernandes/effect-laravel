<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');


    Route::get('/environment/list', [\App\Http\Controllers\EnvironmentController::class, 'index'])->name('environment.index');
    Route::get('/environment/create', [\App\Http\Controllers\EnvironmentController::class, 'create'])->name('environment.create');
    Route::post('/environment/store', [\App\Http\Controllers\EnvironmentController::class, 'store'])->name('environment.store');
    Route::get('/environment/edit/{id}', [\App\Http\Controllers\EnvironmentController::class, 'edit'])->name('environment.edit');
    Route::put('/environment/update/{id}', [\App\Http\Controllers\EnvironmentController::class, 'update'])->name('environment.update');
    Route::delete('/environment/delete/{id}', [\App\Http\Controllers\EnvironmentController::class, 'destroy'])->name('environment.delete');

    Route::get('/finishing/list', [\App\Http\Controllers\FinishingController::class, 'index'])->name('finishing.index');
    Route::get('/finishing/create', [\App\Http\Controllers\FinishingController::class, 'create'])->name('finishing.create');
    Route::post('/finishing/store', [\App\Http\Controllers\FinishingController::class, 'store'])->name('finishing.store');
    Route::get('/finishing/edit/{id}', [\App\Http\Controllers\FinishingController::class, 'edit'])->name('finishing.edit');
    Route::put('/finishing/update/{id}', [\App\Http\Controllers\FinishingController::class, 'update'])->name('finishing.update');
    Route::delete('/finishing/delete/{id}', [\App\Http\Controllers\FinishingController::class, 'destroy'])->name('finishing.delete');

    Route::get('/inches/list', [\App\Http\Controllers\InchesController::class, 'index'])->name('inches.index');
    Route::get('/inches/create', [\App\Http\Controllers\InchesController::class, 'create'])->name('inches.create');
    Route::post('/inches/store', [\App\Http\Controllers\InchesController::class, 'store'])->name('inches.store');
    Route::get('/inches/edit/{id}', [\App\Http\Controllers\InchesController::class, 'edit'])->name('inches.edit');
    Route::put('/inches/update/{id}', [\App\Http\Controllers\InchesController::class, 'update'])->name('inches.update');
    Route::delete('/inches/delete/{id}', [\App\Http\Controllers\InchesController::class, 'destroy'])->name('inches.delete');

    Route::get('/category/list', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/update/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');

    Route::get('/measuregroup/list', [\App\Http\Controllers\MeasureGroupController::class, 'index'])->name('measuregroup.index');
    Route::get('/measuregroup/create', [\App\Http\Controllers\MeasureGroupController::class, 'create'])->name('measuregroup.create');
    Route::post('/measuregroup/store', [\App\Http\Controllers\MeasureGroupController::class, 'store'])->name('measuregroup.store');
    Route::get('/measuregroup/edit/{id}', [\App\Http\Controllers\MeasureGroupController::class, 'edit'])->name('measuregroup.edit');
    Route::put('/measuregroup/update/{id}', [\App\Http\Controllers\MeasureGroupController::class, 'update'])->name('measuregroup.update');
    Route::delete('/measuregroup/delete/{id}', [\App\Http\Controllers\MeasureGroupController::class, 'destroy'])->name('measuregroup.delete');

    Route::get('/acessorymaterial/list', [\App\Http\Controllers\AcessoryMaterialController::class, 'index'])->name('acessorymaterial.index');
    Route::get('/acessorymaterial/create', [\App\Http\Controllers\AcessoryMaterialController::class, 'create'])->name('acessorymaterial.create');
    Route::post('/acessorymaterial/store', [\App\Http\Controllers\AcessoryMaterialController::class, 'store'])->name('acessorymaterial.store');
    Route::get('/acessorymaterial/edit/{id}', [\App\Http\Controllers\AcessoryMaterialController::class, 'edit'])->name('acessorymaterial.edit');
    Route::put('/acessorymaterial/update/{id}', [\App\Http\Controllers\AcessoryMaterialController::class, 'update'])->name('acessorymaterial.update');
    Route::delete('/acessorymaterial/delete/{id}', [\App\Http\Controllers\AcessoryMaterialController::class, 'destroy'])->name('acessorymaterial.delete');

    Route::get('/feedstock/list', [\App\Http\Controllers\FeedStockController::class, 'index'])->name('feedstock.index');
    Route::get('/feedstock/create', [\App\Http\Controllers\FeedStockController::class, 'create'])->name('feedstock.create');
    Route::post('/feedstock/store', [\App\Http\Controllers\FeedStockController::class, 'store'])->name('feedstock.store');
    Route::get('/feedstock/edit/{id}', [\App\Http\Controllers\FeedStockController::class, 'edit'])->name('feedstock.edit');
    Route::put('/feedstock/update/{id}', [\App\Http\Controllers\FeedStockController::class, 'update'])->name('feedstock.update');
    Route::delete('/feedstock/delete/{id}', [\App\Http\Controllers\FeedStockController::class, 'destroy'])->name('feedstock.delete');

    Route::get('/sku/list', [\App\Http\Controllers\SkuColorController::class, 'index'])->name('sku.index');
    Route::get('/sku/create', [\App\Http\Controllers\SkuColorController::class, 'create'])->name('sku.create');
    Route::post('/sku/store', [\App\Http\Controllers\SkuColorController::class, 'store'])->name('sku.store');
    Route::get('/sku/edit/{id}', [\App\Http\Controllers\SkuColorController::class, 'edit'])->name('sku.edit');
    Route::put('/sku/update/{id}', [\App\Http\Controllers\SkuColorController::class, 'update'])->name('sku.update');
    Route::delete('/sku/delete/{id}', [\App\Http\Controllers\SkuColorController::class, 'destroy'])->name('sku.delete');

    Route::get('/field/list', [\App\Http\Controllers\SkuColorController::class, 'index'])->name('field.index');
    Route::get('/field/create', [\App\Http\Controllers\SkuColorController::class, 'create'])->name('field.create');
    Route::post('/field/store', [\App\Http\Controllers\SkuColorController::class, 'store'])->name('field.store');
    Route::get('/field/edit/{id}', [\App\Http\Controllers\SkuColorController::class, 'edit'])->name('field.edit');
    Route::put('/field/update/{id}', [\App\Http\Controllers\SkuColorController::class, 'update'])->name('field.update');
    Route::delete('/field/delete/{id}', [\App\Http\Controllers\SkuColorController::class, 'destroy'])->name('field.delete');

    Route::get('/tag/list', [\App\Http\Controllers\TagController::class, 'index'])->name('tag.index');
    Route::get('/tag/create', [\App\Http\Controllers\TagController::class, 'create'])->name('tag.create');
    Route::post('/tag/store', [\App\Http\Controllers\TagController::class, 'store'])->name('tag.store');
    Route::get('/tag/edit/{id}', [\App\Http\Controllers\TagController::class, 'edit'])->name('tag.edit');
    Route::put('/tag/update/{id}', [\App\Http\Controllers\TagController::class, 'update'])->name('tag.update');
    Route::delete('/tag/delete/{id}', [\App\Http\Controllers\TagController::class, 'destroy'])->name('tag.delete');

    Route::get('/company/list', [\App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');
    Route::get('/company/create', [\App\Http\Controllers\CompanyController::class, 'create'])->name('company.create');
    Route::post('/company/store', [\App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
    Route::get('/company/edit/{id}', [\App\Http\Controllers\CompanyController::class, 'edit'])->name('company.edit');
    Route::put('/company/update/{id}', [\App\Http\Controllers\CompanyController::class, 'update'])->name('company.update');
    Route::delete('/company/delete/{id}', [\App\Http\Controllers\CompanyController::class, 'destroy'])->name('company.delete');

    Route::get('/product/list', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/delete/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');



});
