<?php

use App\Http\Controllers\Admin\CustomerOrderController;
use App\Http\Controllers\Admin\CustomerServiceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\StudentOrderController;
use App\Http\Controllers\Admin\StudentServiceController;
use Illuminate\Support\Facades\Route;


Route::controller(CustomerOrderController::class)->group(function () {
    Route::get('/', 'index')->name('customer.orders');
    Route::get('delete/customer/order/{order}', 'destroy')->name('delete.customer.order');
});

Route::controller(StudentOrderController::class)->group(function () {
    Route::get('students/orders', 'index')->name('student.orders');
    Route::get('delete/student/order/{order}', 'destroy')->name('delete.student.order');
});

Route::controller(CustomerServiceController::class)->group(function () {
    Route::get('customers/services', 'index')->name('customer.services');
    Route::get('customers/add/service/{place}', 'add')->name('add.customer.service');
    Route::post('store/customers/service/{place}', 'store')->name('store.customer.service');
    Route::get('customer/service/edit/{service}', 'edit')->name('edit.customer.service');
    Route::put('update/customer/data/{service}', 'update')->name('update.customer.service');
    Route::get('delete/customer/service/{service}', 'destroy')->name('delete.customer.service');
    Route::get('add/customers/main/service', 'addServicePlace')->name('add.customer.service.place');
    Route::post('store/customer/service/place', 'storeServicePlace')->name('store.customer.service.place');
});

Route::controller(StudentServiceController::class)->group(function () {
    Route::get('students/services', 'index')->name('student.services');
    Route::get('add/students/service/{place}', 'add')->name('add.student.service');
    Route::post('store/student/service/{place}', 'store')->name('store.student.service');
    Route::get('edit/students/service/{service}', 'edit')->name('edit.student.service');
    Route::put('update/student/service/{service}', 'update')->name('update.student.service');
    Route::get('delete/student/service/{service}', 'destroy')->name('delete.student.service');
    Route::get('add/students/main/service', 'addServicePlace')->name('add.student.service.place');
    Route::post('store/students/service/place', 'storeServicePlace')->name('store.students.service.place');
});

Route::controller(PortfolioController::class)->group(function () {
    Route::get('photo', 'index')->name('photos');
    Route::post('add/photo', 'store')->name('store.photo');
    Route::get('delete/photo/{gallery}', 'destroy')->name('delete.photo');
});

Route::get('success', function () {
    return view('main.success');
});
