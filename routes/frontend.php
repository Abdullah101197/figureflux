<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;





Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('register',[RegisteredUserController::class,'create'])->name('register');
Route::get('register/{id}',[RegisteredUserController::class,'registerPackage'])->name('createPackage');
Route::post('invoice_store',[HomeController::class,'invoice_store'])->name('invoice_store');
Route::post('register',[RegisteredUserController::class,'store'])->name('register');
Route::get('payments',[HomeController::class,'payments'])->name('payments');
Route::get('Products',[HomeController::class,'Products'])->name('Products');
Route::get('Solutions',[HomeController::class,'Solutions'])->name('Solutions');
Route::get('Integrations',[HomeController::class,'Integrations'])->name('Integrations');
Route::get('task',[HomeController::class,'task'])->name('task');
Route::get('price',[HomeController::class,'price'])->name('price');

Route::get('knowlage_base',[HomeController::class,'knowlage_base'])->name('knowlage_base');
Route::get('leads_management',[HomeController::class,'leads_management'])->name('leads_management');
Route::get('message',[HomeController::class,'message'])->name('message');
Route::get('order_management',[HomeController::class,'order_management'])->name('order_management');
Route::get('order',[HomeController::class,'order'])->name('order');
Route::get('product_and_service',[HomeController::class,'product_and_service'])->name('product_and_service');

Route::get('project_management',[HomeController::class,'project_management'])->name('project_management');
Route::get('purchase',[HomeController::class,'purchase'])->name('purchase');
Route::get('report',[HomeController::class,'report'])->name('report');
Route::get('sales',[HomeController::class,'sales'])->name('sales');
Route::get('settings',[HomeController::class,'settings'])->name('settings');

Route::get('suppliers',[HomeController::class,'suppliers'])->name('suppliers');
Route::get('support',[HomeController::class,'support'])->name('support');
Route::get('utilities',[HomeController::class,'utilities'])->name('utilities');
Route::get('hrm',[HomeController::class,'hrm'])->name('hrm');
Route::get('bussiness-plan',[HomeController::class,'bussiness_plan'])->name('bussiness-plan');
Route::get('about_us',[HomeController::class,'about_us'])->name('about_us');
Route::get('account',[HomeController::class,'account'])->name('account');
Route::get('contracts',[HomeController::class,'contracts'])->name('contracts');

Route::get('contact_us',[HomeController::class,'contact_us'])->name('contact_us');
Route::post('contact_us', [HomeController::class, 'storeContact_us'])->name('contact_us.store');
Route::get('careers',[HomeController::class,'careers'])->name('careers');


Route::get('explore',[HomeController::class,'explore'])->name('explore');
Route::get('privacy_policy',[HomeController::class,'privacy_policy'])->name('privacy_policy');
Route::get('team',[HomeController::class,'team'])->name('team');
Route::get('term_condition',[HomeController::class,'term_condition'])->name('term_condition');
Route::get('why_choose_us',[HomeController::class,'why_choose_us'])->name('why_choose_us');
Route::get('training',[HomeController::class,'training'])->name('training');
Route::get('calender',[HomeController::class,'calender'])->name('calender');


Route::get('affiliate_program',[HomeController::class,'affiliate_program'])->name('affiliate_program');
Route::get('chat',[HomeController::class,'chat'])->name('chat');
Route::get('crm',[HomeController::class,'crm'])->name('crm');
Route::get('data_protection',[HomeController::class,'data_protection'])->name('data_protection');
Route::post('training', [HomeController::class, 'storetraining'])->name('training.store');

Route::get('document',[HomeController::class,'document'])->name('document');
Route::get('mission',[HomeController::class,'mission'])->name('mission');
Route::get('business',[HomeController::class,'business'])->name('business');
