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
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/comment', 'comment')->name('comment');

    Route::post('insert_customer_order', 'storeCustomerOrder')->name('store.customer.order');
    Route::post('/add_comment', 'storeComment')->name('store.comment');
});

Route::controller(StudentController::class)->group(function () {
    Route::get('/for-students', 'index')->name('student.index');
    Route::post('insert_student_order', 'storeStudentOrder')->name('store.student.order');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/user_login', 'userLogin')->name('user.login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout'); // shesacvlelia GET to POST
});


Route::middleware('web')
    ->prefix('admin')
    ->group(base_path('routes/admin.php'));
