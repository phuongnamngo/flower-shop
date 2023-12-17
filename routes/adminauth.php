<?php

use App\Http\Controllers\AuthAdmin\AuthenticatedSessionController;
use App\Http\Controllers\AuthAdmin\ConfirmablePasswordController;
use App\Http\Controllers\AuthAdmin\EmailVerificationNotificationController;
use App\Http\Controllers\AuthAdmin\EmailVerificationPromptController;
use App\Http\Controllers\AuthAdmin\NewPasswordController;
use App\Http\Controllers\AuthAdmin\PasswordController;
use App\Http\Controllers\AuthAdmin\PasswordResetLinkController;
use App\Http\Controllers\AuthAdmin\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {

    Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])
        ->name('admin.login');
    Route::post('admin/login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->group(function () {
    Route::get('admin/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('admin.logout');
});
