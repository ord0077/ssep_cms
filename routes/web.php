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

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('customers', [CustomerController::class, 'index'])->name('customers');

Route::get('add-complain', [ComplaintController::class, 'complaintform'])->name('add-complain');
Route::get('complaints-queued', [ComplaintController::class, 'queuecomplains'])->name('complaints-queued');
Route::get('complaints-processing', [ComplaintController::class, 'processcomplains'])->name('complaints-processing');
Route::get('complaints-resolved', [ComplaintController::class, 'resolvedcomplains'])->name('complaints-resolved');

Route::get('add-inquiry', [InquiryController::class, 'inquiryform'])->name('add-inquiry');
Route::post('add-inquiry', [InquiryController::class, 'store'])->name('storeinquiry');
Route::get('inquiry-detail', [InquiryController::class, 'detail'])->name('inquiry-detail');
Route::get('inquiries-queued', [InquiryController::class, 'queueinquiries'])->name('inquiries-queued');
Route::get('inquiries-processing', [InquiryController::class, 'processinquiries'])->name('inquiries-processing');
Route::get('inquiries-completed', [InquiryController::class, 'completedinquiries'])->name('inquiries-completed');

Route::get('missed-calls', [CallController::class, 'missedcalls'])->name('missed-calls');
Route::get('received-calls', [CallController::class, 'recievedcalls'])->name('received-calls');

