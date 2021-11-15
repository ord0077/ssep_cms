<?php

use App\Http\Controllers\CallController;
use App\Http\Controllers\ComplaintController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InquiryController;

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
    return view('auth.login');
});

// Authentication Routes
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


// Dashboard Routes
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Customers Routes
Route::get('customers', [CustomerController::class, 'index'])->name('customers');


// Complains Routes
Route::get('add-complain', [ComplaintController::class, 'complaintform'])->name('add-complain');
Route::post('add-complain', [ComplaintController::class, 'store'])->name('storecomplain');
Route::get('edit-complain/{id}', [ComplaintController::class, 'editqueuecomplain'])->name('edit-complain');
Route::post('update-complain/{id}', [ComplaintController::class, 'update'])->name('updatecomplain');
Route::get('complain-detail/{id}', [ComplaintController::class, 'detail'])->name('complain-detail');
Route::post('complain-update-process/{id}', [ComplaintController::class, 'updatestatusprocess'])->name('complainupdatestatusprocess');
Route::post('complain-update-complete/{id}', [ComplaintController::class, 'updatestatuscomplete'])->name('complainupdatestatuscomplete');
Route::get('complaints-delete/{id}', [ComplaintController::class, 'delete'])->name('deletecomplain');
Route::get('complaints-queued', [ComplaintController::class, 'queuecomplains'])->name('complaints-queued');
Route::get('complaints-processing', [ComplaintController::class, 'processcomplains'])->name('complaints-processing');
Route::get('complaints-resolved', [ComplaintController::class, 'resolvedcomplains'])->name('complaints-resolved');


// Inquiries Routes
Route::get('add-inquiry', [InquiryController::class, 'inquiryform'])->name('add-inquiry');
Route::post('add-inquiry', [InquiryController::class, 'store'])->name('storeinquiry');
Route::get('edit-inquiry/{id}', [InquiryController::class, 'editqueueinquiry'])->name('edit-inquiry');
Route::post('update-inquiry/{id}', [InquiryController::class, 'update'])->name('updateinquiry');
Route::get('inquiry-detail/{id}', [InquiryController::class, 'detail'])->name('inquiry-detail');
Route::post('inquiry-update-process/{id}', [InquiryController::class, 'updatestatusprocess'])->name('updatestatusprocess');
Route::post('inquiry-update-complete/{id}', [InquiryController::class, 'updatestatuscomplete'])->name('updatestatuscomplete');
Route::get('inquiry-delete/{id}', [InquiryController::class, 'delete'])->name('deleteinquiry');
Route::get('inquiries-queued', [InquiryController::class, 'queueinquiries'])->name('inquiries-queued');
Route::get('inquiries-processing', [InquiryController::class, 'processinquiries'])->name('inquiries-processing');
Route::get('inquiries-completed', [InquiryController::class, 'completedinquiries'])->name('inquiries-completed');


// Calls Routes
Route::get('missed-calls', [CallController::class, 'missedcalls'])->name('missed-calls');
Route::get('received-calls', [CallController::class, 'recievedcalls'])->name('received-calls');

