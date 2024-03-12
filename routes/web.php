<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SubCategoryController;

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
Route::get('/', function(){  return Redirect::to('login'); });

Route::middleware('guest')->group(function(){
    
    Route::View('/login', 'auth.login')->name('login');                 
    Route::post('/login', [LoginController::class, 'authenticate']);

});


Route::middleware('auth')->prefix('admin')->name('admin.')->group(function(){
    Route::View('/dashboard', 'admin.index');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
    Route::get('/list-category', [CategoryController::class, 'index'])->name('category.list');
    Route::get('/add-category',  [CategoryController::class, 'getAllCategory'])->name('category.add');
    Route::post('/add-category', [SubCategoryController::class, 'add'])->name('admin.category.add');
    Route::get('/category/{subcategory}/edit', [SubCategoryController::class, 'edit']);
    Route::put('/category/{subcatogories}/edit', [SubCategoryController::class, 'update'])->name('category.edit');
    Route::delete('/category/{category}', [CategoryController::class, 'delete'])->name('category.delete');
});
    
    //Route::get('list-category', [CategoryController::class, 'index']);
    //Route::get('add-category',  [CategoryController::class, 'getAllCategory']);
   // Route::post('add-category', [SubCategoryController::class, 'add'])->name('admin.category.add');
    // Route::get('category/{subcategory}/edit', [SubCategoryController::class, 'edit']);
    // Route::put('/category/{subcatogories}/edit', [SubCategoryController::class, 'update'])->name('admin.category.edit');
    // Route::delete('/category/{category}', [CategoryController::class, 'delete'])->name('category.delete');
    //product
    // Route::View('add-book', 'admin.product.add');
    // Route::post('/add-book', [ProductController::class, 'add'])->name('admin.product.add');
    


