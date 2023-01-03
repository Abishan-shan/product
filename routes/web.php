<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;

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
Route::get('/',[ProductController::class,'index'])->name('login');
Route::get('/register',[ProductController::class,'register'])->name('registration');
Route::post('/create',[ProductController::class,'create'])->name('product.create');
//Route::get('/login',[ProductController::class,'login'])->name('product.login');
Route::post('/validate',[ProductController::class,'loginValidate'])->name('product.loginValidate');
Route::get('/dash',[ProductController::class,'dashboard'])->name('product.dash');
Route::get('/cusDash',[ProductController::class,'cusDashboard'])->name('product.customerDash');
Route::get('/product/{id}',[ListController::class,'show'])->name('product.show');
Route::get('/products/{id}',[ListController::class,'destroy'])->name('product.delete');
Route::get('/productss/{id}',[ListController::class,'edit'])->name('product.edite');
Route::get('/dashh',[EmployeeController::class,'store'])->name('store');
Route::get('/cusDashh',[CustomerController::class,'store'])->name('cus.store');
Route::post('/logout',[EmployeeController::class,'destroy'])->name('logout');
Route::post('/update',[ListController::class,'update'])->name('product.update');
Route::get('/empShow/{id}',[EmployeeController::class,'show'])->name('empShow');
Route::get('/empDelete/{id}',[EmployeeController::class,'delete'])->name('empDelete');
Route::get('/empEdite/{id}',[EmployeeController::class,'edit'])->name('empEdite');
Route::post('/empUpdate',[EmployeeController::class,'update'])->name('emp.update');
Route::get('/prodOrder/{id}',[CustomerController::class,'edit'])->name('product.order');
Route::post('/prodPlace',[CustomerController::class,'order'])->name('product.place');
Route::get('/empView',[EmployeeController::class,'index'])->name('emp.view');
Route::get('/reset',[EmployeeController::class,'reset'])->name('emp.reset');
Route::post('/reedit',[EmployeeController::class,'reupdate'])->name('emp.reedit');
