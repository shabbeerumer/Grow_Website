<?php

use App\Http\Controllers\account\AccountController;
use App\Http\Controllers\balance\BalanceController;
use App\Http\Controllers\buy\BuyController;
use App\Http\Controllers\changepass\ChangePassController;
use App\Http\Controllers\commission\CommissionController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\deposit\DepositController;
use App\Http\Controllers\deposit_history\DepositHistoryController;
use App\Http\Controllers\index\IndexController;
use App\Http\Controllers\invite\InviteController;
use App\Http\Controllers\Login\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\register\RegisterController;
use App\Http\Controllers\task\TaskController;
use App\Http\Controllers\two_factor\TwoFactorController;
use App\Http\Controllers\withdraw\WithDrawController;
use App\Http\Controllers\withdraw_history\WithDrawHistoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/deposit_history', [DepositHistoryController::class, 'index'])->name('deposit_history');
Route::get('/invite', [InviteController::class, 'index'])->name('invite');
Route::get('/task', [TaskController::class, 'index'])->name('task');
Route::get('/two_factor', [TwoFactorController::class, 'index'])->name('two_factor');
Route::get('/withdraw', [WithDrawController::class, 'index'])->name('withdraw');
Route::get('/withdraw_history', [WithDrawHistoryController::class, 'index'])->name('withdraw_history');
Route::get('/account', [AccountController::class, 'index'])->name('account');
Route::get('/balance', [BalanceController::class, 'index'])->name('balance');
Route::get('/buy', [BuyController::class, 'index'])->name('buy');
Route::get('/changepass', [ChangePassController::class, 'index'])->name('changepass');
Route::get('/commission', [CommissionController::class, 'index'])->name('commission');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/deposit', [DepositController::class, 'index'])->name('deposit');

