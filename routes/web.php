<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
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



// Route::post('logout', [HomeController::class, 'logout'])->name('logout');

Auth::routes();


Route::get('/',function(){
    return redirect('login');
});
Route::group((['middleware' => ['auth']]),function(){
    Route::get('/home', [ListController::class, 'index'])->name('home');
    Route::post('/home', [ListController::class, 'createList'])->name('createList');
    Route::get('/edit/{id}', [ListController::class, 'editList'])->name('edit-list');
    Route::post('/edit/{id}', [ListController::class, 'updateList'])->name('update-list');
    Route::get('/delete-list/{id}', [ListController::class, 'deleteList'])->name('delete-list');
    
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
    Route::post('/customer', [CustomerController::class, 'createCustomer'])->name('customerList');
    Route::get('/edit-customer/{id}', [CustomerController::class, 'editCustomer'])->name('editCustomerList');
    Route::post('/edit-customer/{id}', [CustomerController::class, 'updateCustomer'])->name('updateCustomerList');
    Route::get('/delete/{id}', [CustomerController::class, 'deleteCustomer'])->name('delete');
    
    
    Route::get('/posts', [PostController::class, 'index'])->name('posts');
    Route::post('/posts', [PostController::class, 'createPost'])->name('postsList');
    Route::get('/edit-posts/{id}', [PostController::class, 'editPost'])->name('edit-posts');
    Route::post('/edit-posts/{id}', [PostController::class, 'updatePost'])->name('update-posts');
    Route::get('/deletes/{id}', [PostController::class, 'deletePost'])->name('delete-posts');
});



