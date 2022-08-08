<?php

use App\Http\Controllers\BusesController;
use App\Http\Controllers\CustmerController;
use App\Http\Controllers\IdCardController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentTeacherController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TicketController;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Jobs\SendEmailJob;
use App\Jobs\TestJob;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::post('login', function (Request $request) {
//     return $request->all();
// });
Route::view('/test','test');
Route::POST('submit',[TestController::class,'create']);

//custmer
Route::view('/custmer','custmer\custmer');
Route::get('submit',[CustmerController::class,'create']);
Route::view('WelcomeCustmer','custmer\welcome');
Route::get('update/{id}/edit',[CustmerController::class,'edit']);
Route::get('updated/{customer}',[CustmerController::class,'update']);
Route::view('/delete','custmer\delete');
Route::get('delete/{custmer}',[CustmerController::class,'destroy']);

// Route::view('/bus','custmer\bus');
// Route::post('submit',[BusesController::class,'create']);
Route::view('/ticket','custmer\ticket');
Route::POST('submit',[TicketController::class,'create']);

Route::post('testing/{buses}', [TicketController::class,'getCompanyDetails']);
Route::view('/flow','ajax');
Route::get('/flows', [TicketController::class,'testMethod']);
Route::get('/send-mail', [TicketController::class,'email']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('/student','student');
Route::POST('student-submit',[StudentController::class,'create']);
Route::view('/teacher','teacher');
Route::POST('teacher-submit',[TeacherController::class,'create']);
Route::view('/phone','phone');
Route::POST('phone-submit',[PhoneController::class,'create']);
Route::view('/idcard','idcard');
Route::POST('idcard-submit',[IdCardController::class,'create']);
Route::view('/studentTeacher','student_teacher');
Route::POST('student_teacher-submit',[StudentTeacherController::class,'create']);
