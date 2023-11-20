<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Main\CustomerController;
use App\Http\Controllers\Main\StudentController;
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


Route::controller(CustomerController::class)->group(function () {
    Route::get('/', 'index')->name('main.index');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('portfolio', 'portfolio')->name('portfolio');
    Route::get('comment', 'comment')->name('comment');

    Route::post('store/customer/order', 'storeCustomerOrder')->name('store.customer.order');
    Route::post('store/comment', 'storeComment')->name('store.comment');
});

Route::controller(StudentController::class)->group(function () {
    Route::get('student', 'index')->name('student.index');
    Route::post('store/student/order', 'storeStudentOrder')->name('store.student.order');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('user_login', 'userLogin')->name('user.login');
    Route::post('logout',  'logout')->name('logout');
});


Route::middleware(['web','auth'])
    ->prefix('admin')
    ->group(base_path('routes/admin.php'));
