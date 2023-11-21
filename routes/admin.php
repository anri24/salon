<?php

use App\Http\Controllers\Admin\CustomerOrderController;
use App\Http\Controllers\Admin\CustomerServiceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\StudentOrderController;
use App\Http\Controllers\Admin\StudentServiceController;
use Illuminate\Support\Facades\Route;


Route::controller(CustomerOrderController::class)->group(function () {
    Route::get('/', 'index')->name('customer.orders');
    Route::get('delete_customer_order/{id}', 'destroy')->name('delete.customer.order');
});

Route::controller(StudentOrderController::class)->group(function () {
    Route::get('/students_orders', 'index')->name('student.orders');
    Route::get('delete_student_order/{id}', 'destroy')->name('delete.student.order');
});

Route::controller(CustomerServiceController::class)->group(function () {
    Route::get('/customers_services', 'index')->name('customer.services');
    Route::get('/customers_add_service', 'add')->name('add.customer.service');
    Route::post('/create_customers_service', 'store')->name('store.customer.service');
    Route::get('customer_service_edit/{id}', 'edit')->name('edit.customer.service');
    Route::put('update_customer_data/{id}', 'update')->name('update.customer.service');
    Route::get('delete_customer_service/{id}', 'destroy')->name('delete.customer.service');
    Route::get('/customers_add_main_service', 'addServicePlace')->name('add.customer.service.place');
    Route::post('create_customer_service_place', 'storeServicePlace')->name('store.customer.service.place');
});

Route::controller(StudentServiceController::class)->group(function () {
    Route::get('/students_services', 'index')->name('student.services');
    Route::get('/students_add_service', 'add')->name('add.student.service');
    Route::post('create_student_service', 'store')->name('store.student.service');
    Route::get('students_service_edit/{id}', 'edit')->name('edit.student.service');
    Route::put('update_student_data/{id}', 'update')->name('update.student.service');
    Route::get('delete_student_service/{id}', 'destroy')->name('delete.student.service');
    Route::get('/students_add_main_service', 'addServicePlace')->name('add.student.service.place');
    Route::post('create_student_service_place', 'storeServicePlace')->name('store.student.service.place');
});

Route::controller(PortfolioController::class)->group(function () {
    Route::get('/photo', 'index')->name('photos');
    Route::post('/add_photo', 'store')->name('store.photo');
    Route::get('delete_photo/{id}', 'destroy')->name('delete.photo');
});

Route::get('/success', function () {
    return view('main/success');
});
