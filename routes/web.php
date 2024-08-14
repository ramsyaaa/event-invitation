<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CompanyCategoryController;
use App\Http\Controllers\Admin\CompanySubcategoryController;
use App\Http\Controllers\Admin\EmailInvitationListController;
use App\Http\Controllers\Admin\InvitationListController;
use App\Http\Controllers\Admin\GuestListController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/rsvp', [HomeController::class, 'rsvpPage'])->name('rsvp.page');

Route::get('/auth-user', [App\Http\Controllers\Auth\AuthController::class, 'loginPage'])->name('auth.page');
Route::post('/auth-user', [App\Http\Controllers\Auth\AuthController::class, 'loginUser'])->name('auth.submit');


Auth::routes();
Route::get('/sign-out', [AuthController::class, 'logout'])->name('sign-out');



// Admin routes
Route::get('/admin', [AdminController::class, 'index']);

Route::resource('/admin/company-category', CompanyCategoryController::class);
Route::resource('admin/company-subcategory', CompanySubcategoryController::class);
Route::resource('admin/email-invitation-list', EmailInvitationListController::class);
Route::resource('admin/invitation-list', InvitationListController::class);
Route::resource('admin/guest-list', GuestListController::class);
Route::get('download-template', [InvitationListController::class, 'downloadTemplate'])->name('download.template');
Route::post('upload-excel', [InvitationListController::class, 'uploadExcel'])->name('upload.excel');