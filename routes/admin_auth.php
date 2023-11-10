<?php

use App\Http\Controllers\Admin\Admin_Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Admin_Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Admin_Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Admin_Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Admin_Auth\NewPasswordController;
use App\Http\Controllers\Admin\Admin_Auth\PasswordController;
use App\Http\Controllers\Admin\Admin_Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Admin_Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Admin_Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {


    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
