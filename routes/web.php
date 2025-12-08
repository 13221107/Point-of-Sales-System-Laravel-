<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TaxRuleController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionItemController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Console\RouteCacheCommand;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('welcome');
});

//For login
// Route::get ('/login', [LoginController::class, 'showLogin'])->name('login');
// Route::post('/login', [LoginController::class,'login']);

// Route::middleware(['auth'])->group(function () {
//     Route::get('/logout', [CategoryController::class, 'logout']);

    Route::get('/dashboard', function () {
        return view('layouts/master');
    })->name('dashboard');
    
    //For Category table
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/add', [CategoryController::class,'add']);
    Route::post('/categories/create', [CategoryController::class,'create']);
    Route::get('/categories/{id}/edit', [CategoryController::class,'edit']);
    Route::post('/categories/{id}/update', [CategoryController::class,'update']);
    Route::get('/categories/{id}/delete', [CategoryController::class,'delete']);
    Route::get('/categories/{id}/destroy', [CategoryController::class,'destroy']);

    //For Role table
    Route::get('/role', [RoleController::class,'index']);
    Route::get ('/role/add', [RoleController::class,'add']);
    Route::post('/role/create', [RoleController::class,'create']);
    Route::get('/role/{id}/edit', [RoleController::class,'edit']);
    Route::post('/role/{id}/update', [RoleController::class,'update']);
    Route::get('/role/{id}/delete', [RoleController::class,'delete']);
    Route::get('/role/{id}/destroy', [RoleController::class,'destroy']);
    
    //For product Table
    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/product/add', [ProductController::class,'add']);
    Route::post('/product/create', [ProductController::class,'create']);
    Route::get('/product/{id}/edit', [ProductController::class,'edit']);
    Route::post('/product/{id}/update', [ProductController::class,'update']);
    Route::get('/product/{id}/delete', [ProductController::class,'delete']);
    Route::get('/product/{id}/destroy', [ProductController::class,'destroy']);   

    //for user table
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/add', [UserController::class,'add']);
    Route::post('/user/create', [UserController::class,'create']);
    Route::get('/user/{id}/edit', [UserController::class,'edit']);
    Route::post('/user/{id}/update', [UserController::class,'update']);
    Route::get('/user/{id}/delete', [UserController::class,'delete']);
    Route::get('/user/{id}/destroy', [UserController::class,'destroy']);
    
    //for transanction table
    Route::get('/transaction', [TransactionController::class,'index']);
    Route::get('/transaction/add', [TransactionController::class,'add']);
    Route::post('/transaction/create', [TransactionController::class,'create']);
    Route::get('transaction/{id}/edit', [TransactionController::class,'edit']);
    Route::post('transaction/{id}/update', [TransactionController::class,'update']);
    Route::get('transaction/{id}/delete', [TransactionController::class,'delete']);
    Route::get('transaction/{id}/destroy', [TransactionController::class,'destroy']);

    //for receipts table
    Route::get('/receipt', [ReceiptController::class, 'index']);
    Route::get('/receipt/add', [ReceiptController::class,'add']);
    Route::post('/receipt/create', [ReceiptController::class,'create']);
    Route::get('/receipt/{id}/edit', [ReceiptController::class,'edit']);
    Route::post('/receipt/{id}/update', [ReceiptController::class,'update']);
    Route::get('/receipt/{id}/delete', [ReceiptController::class,'delete']);
    Route::get('/receipt/{id}/destroy', [ReceiptController::class,'destroy']);

    //for Transaction Item Table
    Route::get('/transaction_item', [TransactionItemController::class, 'index']);
    Route::get('/transaction_item/add', [TransactionItemController::class, 'add']);
    Route::post('/transaction_item/create', [TransactionItemController::class, 'create']);
    Route::get('/transaction_item/{id}/edit', [TransactionItemController::class, 'edit']);
    Route::post('/transaction_item/{id}/update', [TransactionItemController::class, 'update']);
    Route::get('/transaction_item/{id}/delete', [TransactionItemController::class, 'delete']);
    Route::get('/transaction_item/{id}/destroy', [TransactionItemController::class, 'destroy']);

    //for tax table
    Route::get('/tax_rule', [TaxRuleController::class, 'index']);
    Route::get('/tax_rule/add', [TaxRuleController::class, 'add']);
    Route::post('/tax_rule/create', [TaxRuleController::class, 'create']);
    Route::get('/tax_rule/{id}/edit', [TaxRuleController::class, 'edit']);
    Route::post('/tax_rule/{id}/update', [TaxRuleController::class, 'update']);
    Route::get('/tax_rule/{id}/delete', [TaxRuleController::class, 'delete']);
    Route::get('/tax_rule/{id}/destroy', [TaxRuleController::class, 'destroy']);

    //for report Table
    Route::get('/report', [ReportController::class, 'index']);
    Route::get('/report/add', [ReportController::class, 'add']);
    Route::post('/report/create', [ReportController::class, 'create']);
    Route::get('/report/{id}/edit', [ReportController::class,'edit']);
    Route::post('/report/{id}/update', [ReportController::class,'update']);
    Route::get('/report/{id}/delete', [ReportController::class,'delete']);
    Route::get('/report/{id}/destroy', [ReportController::class,'destroy']);
   
    
//});

