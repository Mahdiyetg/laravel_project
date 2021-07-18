<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CourseController;
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

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/',"App\Http\Controllers\CourseController@index")->name('admin.index.course');
    Route::get('/add-course',"App\Http\Controllers\CourseController@create")->name('admin.create.course');
    Route::get('/course/{id}/edit',"App\Http\Controllers\CourseController@edit")->name('admin.edit.course');
    Route::put('/course/update/{id}',"App\Http\Controllers\CourseController@update")->name('admin.update.course');
    Route::get('/course/destroy/{id}',"App\Http\Controllers\CourseController@destroy")->name('admin.destroy.course');
    Route::post('/store-course',"App\Http\Controllers\CourseController@store")->name('admin.store.course');
    Route::get('/add-coach',"App\Http\Controllers\Admincontroller@create_coach")->name('admin.create.coach');
    Route::post('/store-coach',"App\Http\Controllers\Admincontroller@store_coach")->name('admin.store.coach');
    Route::get('/coach-list',"App\Http\Controllers\Admincontroller@coach_list")->name('admin.index.coach');
    Route::get('/coach-destroy/{id}',"App\Http\Controllers\Admincontroller@destroy_coach")->name('admin.destroy.coach');
    Route::get('/register-list',"App\Http\Controllers\RegisterController@index")->name('admin.register.index');
    Route::get('/destroy/{id}',"App\Http\Controllers\RegisterController@destroy")->name('admin.register.destroy');
    Route::get('/users',"App\Http\Controllers\Admincontroller@users_list")->name('admin.list.users');
    Route::get('/user-list/{id}',"App\Http\Controllers\Admincontroller@user_list")->name('admin.list.user');
    Route::get('/course-user-list/{id}',"App\Http\Controllers\CourseController@course_users")->name('admin.course.users');
    Route::get('/delete_user/{id}',"App\Http\Controllers\Admincontroller@destroy_user")->name('admin.destroy.user');

});

Route::get('/course-register','App\Http\Controllers\RegisterController@create')->name('course.register.create');
Route::post('/store-register','App\Http\Controllers\RegisterController@store')->name('course.register.store');
Route::get('/user-register','App\Http\Controllers\RegisterController@user_list')->name('course.register.user.list');
Route::get('/logout',function ()
{
   Auth::logout();
   return view('home');
})->name('admin.logout');

Route::get('/', function () {
    return view('home');
    redirect('/');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
