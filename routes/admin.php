<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminAddServiceCustomerController;
use App\Http\Controllers\AdminAddServiceStudentController;
use App\Http\Controllers\AdminCustomerServiceController;
use App\Http\Controllers\AdminStudentServiceController;
use App\Http\Controllers\AdminCustomerOrderController;
use App\Http\Controllers\AdminStudentOrderController;
use App\Http\Controllers\adminAddMainServiceCustomerController;
use App\Http\Controllers\adminAddMainServiceStudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CommentController;








Route::get('/admin',[AdminCustomerOrderController::class, 'adminCustomerOrders']);


Route::get('/students_orders',[AdminStudentOrderController::class, 'adminStudentOrders'],function(){
    return view('admin/students_orders');
});
Route::get('/customers_add_service',[AdminAddServiceCustomerController::class, 'adminAddServiceCustomerServices'],function(){
    return view('admin/customers_add_service');
});
Route::get('/customers_add_main_service',[AuthController::class ,'customers_add_main_service'],function(){
    return view('admin/customers_add_main_service');
});
Route::get('/customers_services',[AdminCustomerServiceController::class, 'adminCustomerServices'],function(){
    return view('admin/customers_services');
});


Route::get('/students_add_service',[AdminAddServiceStudentController::class, 'adminAddServiceStudentService'],function(){
    return view('admin/students_add_service');
});
Route::get('/students_add_main_service',[AuthController::class ,'students_add_main_service'],function(){
    return view('admin/students_add_main_service');
});
Route::get('/students_services',[AdminStudentServiceController::class, 'adminStudentService'],function(){
    return view('admin/students_services');
});
Route::get('/success',function(){
    return view('main/success');
});



Route::post('create_customer_service_place', [adminAddMainServiceCustomerController::class, 'create_customer_service_place']);


Route::post('/create_customers_service',[AdminAddServiceCustomerController::class, 'adminCreateCustomerService']);


Route::post('create_student_service_place', [adminAddMainServiceStudentController::class, 'createStudentServicePlace']);


Route::post('create_student_service', [AdminAddServiceStudentController::class, 'adminCreateStudentService']);



Route::get('customer_service_edit/{id}',[EditController::class ,'CustomerServiceEdit'],function(){
    return view('admin.customers_service_edit');
});

Route::put('update_customer_data/{id}',[EditController::class ,'CustomerServiceUpdate']);

Route::get('students_service_edit/{id}',[EditController::class ,'adminUpdateServiceStudent'],function(){
    return view('admin.students_service_edit');
});

Route::put('update_student_data/{id}',[EditController::class ,'adminUpdateStudentService']);

Route::get('delete_customer_service/{id}',[DeleteController::class ,'removeCustomerService']);


Route::get('delete_student_service/{id}',[DeleteController::class ,'removeStudentService']);

Route::get('delete_customer_order/{id}',[DeleteController::class ,'removeCustomerOrder']);


Route::get('delete_student_order/{id}',[DeleteController::class ,'removeStudentOrder']);

Route::get('delete_photo/{id}',[DeleteController::class ,'removePhoto']);



Route::get('/photo',[PhotoController::class, 'adminshowPhoto'],function(){
    return view('admin/upload_photo');
});

Route::post('/add_photo',[PhotoController::class,'savePhoto']);


