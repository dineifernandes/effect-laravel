<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [Controllers\DashboardController::class,'create'])->name('home');

Route::resource('/user', Controllers\UserController::class)->names([
    'index' => 'user.index',
    'create' => 'user.create',
    'store' => 'user.store',
    'show' => 'user.show',
    'edit' => 'user.edit',
    'update' => 'user.update',
    'destroy' => 'user.destroy',
]);

Route::resource('/usertype', Controllers\UserTypeController::class)->names([
    'index' => 'usertype.index',
    'create' => 'usertype.create',
    'store' => 'usertype.store',
    'show' => 'usertype.show',
    'edit' => 'usertype.edit',
    'update' => 'usertype.update',
    'destroy' => 'usertype.destroy',
]);

Route::resource('/environment', Controllers\EnvironmentController::class)->names([
    'index' => 'environment.index',
    'create' => 'environment.create',
    'store' => 'environment.store',
    'show' => 'environment.show',
    'edit' => 'environment.edit',
    'update' => 'environment.update',
    'destroy' => 'environment.destroy',
]);

Route::resource('/company', Controllers\CompanyController::class)->names([
    'index' => 'company.index',
    'create' => 'company.create',
    'store' => 'company.store',
    'show' => 'company.show',
    'edit' => 'company.edit',
    'update' => 'company.update',
    'destroy' => 'company.destroy',
]);

Route::resource('/finishing', Controllers\FinishingController::class)->names([
    'index' => 'finishing.index',
    'create' => 'finishing.create',
    'store' => 'finishing.store',
    'show' => 'finishing.show',
    'edit' => 'finishing.edit',
    'update' => 'finishing.update',
    'destroy' => 'finishing.destroy',
]);

Route::resource('/inches', Controllers\InchesController::class)->names([
    'index' => 'inches.index',
    'create' => 'inches.create',
    'store' => 'inches.store',
    'show' => 'inches.show',
    'edit' => 'inches.edit',
    'update' => 'inches.update',
    'destroy' => 'inches.destroy',
]);

Route::resource('/category', Controllers\CategoryController::class)->names([
    'index' => 'category.index',
    'create' => 'category.create',
    'store' => 'category.store',
    'show' => 'category.show',
    'edit' => 'category.edit',
    'update' => 'category.update',
    'destroy' => 'category.destroy',
]);

Route::resource('/measuregroup', Controllers\MeasureGroupController::class)->names([
    'index' => 'measuregroup.index',
    'create' => 'measuregroup.create',
    'store' => 'measuregroup.store',
    'show' => 'measuregroup.show',
    'edit' => 'measuregroup.edit',
    'update' => 'measuregroup.update',
    'destroy' => 'measuregroup.destroy',
]);

Route::resource('/feedstock', Controllers\FeedStockController::class)->names([
    'index' => 'feedstock.index',
    'create' => 'feedstock.create',
    'store' => 'feedstock.store',
    'show' => 'feedstock.show',
    'edit' => 'feedstock.edit',
    'update' => 'feedstock.update',
    'destroy' => 'feedstock.destroy',
]);

Route::resource('/acessorymaterial', Controllers\AcessoryMaterialController::class)->names([
    'index' => 'acessorymaterial.index',
    'create' => 'acessorymaterial.create',
    'store' => 'acessorymaterial.store',
    'show' => 'acessorymaterial.show',
    'edit' => 'acessorymaterial.edit',
    'update' => 'acessorymaterial.update',
    'destroy' => 'acessorymaterial.destroy',
]);

Route::resource('/skucolor', Controllers\SkuColorController::class)->names([
    'index' => 'sku.index',
    'create' => 'sku.create',
    'store' => 'sku.store',
    'show' => 'sku.show',
    'edit' => 'sku.edit',
    'update' => 'sku.update',
    'destroy' => 'sku.destroy',
]);

Route::resource('/tag', Controllers\TagController::class)->names([
    'index' => 'tag.index',
    'create' => 'tag.create',
    'store' => 'tag.store',
    'show' => 'tag.show',
    'edit' => 'tag.edit',
    'update' => 'tag.update',
    'destroy' => 'tag.destroy',
]);

Route::resource('/field', Controllers\FieldController::class)->names([
    'index' => 'field.index',
    'create' => 'field.create',
    'store' => 'field.store',
    'show' => 'field.show',
    'edit' => 'field.edit',
    'update' => 'field.update',
    'destroy' => 'field.destroy',
]);

Route::resource('/product', Controllers\ProductController::class)->names([
    'index' => 'product.index',
    'create' => 'product.create',
    'store' => 'product.store',
    'show' => 'product.show',
    'edit' => 'product.edit',
    'update' => 'product.update',
    'destroy' => 'product.destroy',
]);

Route::fallback(function(){
   return "Rota não encontrada!";
});
