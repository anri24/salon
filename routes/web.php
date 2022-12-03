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
;








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

Route::get('/',[CustomerController::class, 'mainIndexShow'], function () {
    return view('main/index');
});
Route::get('/about', function () {
    return view('main/about');
});
Route::get('/contact', function () {
    return view('main/contact');
});
Route::get('/portfolio',[PhotoController::class, 'showPhoto'], function () {
    return view('main/portfolio');
});
Route::get('/for-students',[StudentController::class, 'forStudentsShow'], function () {
    return view('main/forstudent');
});

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

Route::post('insert_customer_order', [CustomerController::class, 'customerOrederInsert']);

Route::post('insert_student_order', [StudentController::class, 'studentOrederInsert']);

Route::post('create_customer_service_place', [adminAddMainServiceCustomerController::class, 'create_customer_service_place']);


Route::post('/create_customers_service',[AdminAddServiceCustomerController::class, 'adminCreateCustomerService']);


Route::post('create_student_service_place', [adminAddMainServiceStudentController::class, 'createStudentServicePlace']);


Route::post('create_student_service', [AdminAddServiceStudentController::class, 'adminCreateStudentService']);


Route::get('/login',function(){
    return view('admin/login');
});
// Route::get('/registration',function(){
//     return view('admin/registration');
// });

// Route::post('/user_registration', [AuthController::class ,'userRegistration']);

Route::post('/user_login', [AuthController::class ,'userLogin']);
Route::get('logout', [AuthController::class ,'logout']);

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

Route::post('/add_comment',[CommentController::class, 'commentInsert']);



Route::get('/comment',function(){
    return view('main.comment');
});