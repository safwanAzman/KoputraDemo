<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\MembersController;
use App\Http\Controllers\AdminKoputraController;
use App\Http\Controllers\SiskopController;
use App\Http\Controllers\AlkController;

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

Route::view('/', 'welcome')->name('wellcome');

Route::middleware('guest')->group(function () {
    //MEMBER
    Route::get('members', [MembersController::class, 'index'])->name('members');
    Route::get('members/create', [MembersController::class, 'create'])->name('members-create');
    Route::get('members/produk', [MembersController::class, 'produk'])->name('members-produk');
    Route::get('members/produk/trading/makananTersedia', [MembersController::class, 'tradingMakananTersedia'])->name('members.product.trading.makananTersedia');
    Route::get('members/produk/trading/makananTersedia/buy', [MembersController::class, 'tradingMakananTersediaBuy'])->name('members.product.trading.makananTersedia.buy');

    //ADMIN
    Route::get('adminkoputra', [AdminKoputraController::class, 'index'])->name('adminkoputra');
    Route::get('adminkoputra/tetapan', [AdminKoputraController::class, 'tetapan'])->name('tetapan');

    //ALK
    Route::get('alk', [AlkController::class, 'index'])->name('alk');
    Route::get('alk/2', [DashboardController::class, 'index2'])->name('alk2');

    //SISKOP
    Route::group([
        'prefix'        => 'siskop',
        'as'            => 'siskop.',
    ], function (){
        Route::get('/', [SiskopController::class, 'index'])->name('index');
        Route::group([
            'prefix'        => 'member',
            'as'            => 'member.',
        ], function (){
            Route::get('/', [SiskopController::class, 'member_index'])->name('index');
        });

        Route::group([
            'prefix'        => 'finance',
            'as'            => 'finance.',
        ], function (){
            Route::get('/', [SiskopController::class, 'finance_index'])->name('index');
        });

        Route::get('firasat', [SiskopController::class, 'firasat_index'])->name('firasat.index');
        Route::group([
            'prefix'        => 'teller',
            'as'            => 'teller.',
        ], function (){
            Route::get('/', [SiskopController::class, 'teller_index'])->name('index');
        });

        Route::group([
            'prefix'        => 'report',
            'as'            => 'report.',
        ], function (){
            Route::get('/', [SiskopController::class, 'report_index'])->name('index');
        });
    });
    //ENDSISKOP
    // Route::get('home', [DashboardController::class, 'index'])->name('home');
    // Route::get('home2', [DashboardController::class, 'index2'])->name('home2');
    Route::get('login', Login::class) ->name('login');

    Route::get('register', Register::class)->name('register');

});

Route::get('password/reset', Email::class)->name('password.request');

Route::get('password/reset/{token}', Reset::class)->name('password.reset');


Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)->middleware('throttle:6,1')->name('verification.notice');
    Route::get('password/confirm', Confirm::class)->name('password.confirm');
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)->middleware('signed')->name('verification.verify');
    Route::post('logout', LogoutController::class)->name('logout');
});
