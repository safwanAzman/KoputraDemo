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
use App\Http\Controllers\NonMemberController;
use App\Http\Controllers\AdminKoputraController;
use App\Http\Controllers\SiskopController;
use App\Http\Controllers\AlkController;

use App\Http\Controllers\kutipan\SenaraiKutipanController;
use App\Http\Controllers\cukai\TaxInvoiceController;


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

    //NON-MEMBER
    Route::get('nonmembers', [NonMemberController::class, 'index'])->name('non-member');
    Route::get('nonmembers/MohonAhli', [NonMemberController::class, 'mohon'])->name('mohon');
    Route::get('nonmembers/salinanIC', [NonMemberController::class, 'salinanIc'])->name('salinanIc');
    Route::get('nonmembers/suratLantikan', [NonMemberController::class, 'suratTawaran'])->name('suratTawaran');
    Route::get('nonmembers/firasat', [MembersController::class, 'firasat'])->name('nonmembers-firasat');


    //MEMBER
    Route::get('adminkoputra/members', [MembersController::class, 'index'])->name('adminkoputra-members');
    Route::get('members/create', [MembersController::class, 'create'])->name('members-create');
    Route::get('members/produk', [MembersController::class, 'produk'])->name('members-produk');
    Route::get('members/produk2', [MembersController::class, 'produk2'])->name('members-produk2');
    Route::get('members/yuran', [MembersController::class, 'yuran'])->name('members-yuran');
    Route::get('members/saham', [MembersController::class, 'saham'])->name('members-saham');
    Route::get('members/jaminan', [MembersController::class, 'jaminan'])->name('members-jaminan');
    Route::get('members/pembiayaan', [MembersController::class, 'pembiayaan'])->name('members-pembiayaan');
    Route::get('members/firasat', [MembersController::class, 'firasat'])->name('members-firasat');

    //member Details Trading
    Route::get('members/produk/trading/makananTersedia', [MembersController::class, 'tradingMakananTersedia'])->name('members.product.trading.makananTersedia');
    //member Buy Trading
    Route::get('members/produk/trading/makananTersedia/buy', [MembersController::class, 'tradingMakananTersediaBuy'])->name('members.product.trading.makananTersedia.buy');
    //member Details Homestay
    Route::get('members/produk/homestay/cameron', [MembersController::class, 'homestayCameron'])->name('members.product.homestay.cameron');
    //member Book Homestay
    Route::get('members/produk/homestay/cameron/booking', [MembersController::class, 'homestayCameronBooking'])->name('members.product.homestay.cameron.booking');
    //member Book Services
    Route::get('members/produk/services/booking', [MembersController::class, 'servicesBooking'])->name('servicesBooking');

    //non-member Details Trading
    Route::get('nonmembers/produk/trading/makananTersedia', [MembersController::class, 'tradingMakananTersedia'])->name('nonmembers.product.trading.makananTersedia');
    //non-member Buy Trading
    Route::get('nonmembers/produk/trading/makananTersedia/buy', [MembersController::class, 'tradingMakananTersediaBuy'])->name('nonmembers.product.trading.makananTersedia.buy');
    //non-member Details Homestay
    Route::get('nonmembers/produk/homestay/cameron', [MembersController::class, 'homestayCameron'])->name('nonmembers.product.homestay.cameron');
    //non-member Book Homestay
    Route::get('nonmembers/produk/homestay/cameron/booking', [MembersController::class, 'homestayCameronBooking'])->name('nonmembers.product.homestay.cameron.booking');
    //non-member Book Services
    Route::get('nonmembers/produk/services/booking', [MembersController::class, 'servicesBooking'])->name('nonservicesBooking');

    //ADMIN
    Route::get('adminkoputra', [AdminKoputraController::class, 'index'])->name('adminkoputra');
    Route::get('adminkoputra/tetapan', [AdminKoputraController::class, 'tetapan'])->name('tetapan');
    Route::get('adminkoputra/permohonan', [AdminKoputraController::class, 'permohonan'])->name('permohonan');
    Route::get('adminkoputra/permohonan1', [AdminKoputraController::class, 'donepermohonan'])->name('donepermohonan');
    Route::get('adminkoputra/permohonan2', [AdminKoputraController::class, 'donepermohonan2'])->name('donepermohonan2');

    //ALK
    Route::get('alk', [AlkController::class, 'index'])->name('alk');
    Route::get('alk/2', [DashboardController::class, 'index2'])->name('alk2');
    Route::get('alk/3', [AlkController::class, 'tolakpermohonan'])->name('alk3');

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
            Route::group([
                'prefix'        => 'individual',
                'as'            => 'individual.',
            ], function (){
                Route::get('{uuid}', [SiskopController::class, 'member_show'])->name('show');
            });
        });

        Route::group([
            'prefix'        => 'finance',
            'as'            => 'finance.',
        ], function (){
            Route::get('/', [SiskopController::class, 'finance_index'])->name('index');
            Route::get('{uuid}', [SiskopController::class, 'finance_show'])->name('show');
        });

        Route::get('firasat', [SiskopController::class, 'firasat_index'])->name('firasat.index');
        Route::group([
            'prefix'        => 'teller',
            'as'            => 'teller.',
        ], function (){
            // Route::get('/', [SiskopController::class, 'teller_index'])->name('index');
            Route::get('/', [SenaraiKutipanController::class, 'index'])->name('index');
        });

        Route::group([
            'prefix'        => 'report',
            'as'            => 'report.',
        ], function (){
            Route::get('/', [SiskopController::class, 'report_index'])->name('index');
            Route::get('list-position-contribution', [SiskopController::class, 'listPositionContribution_report'])->name('listPositionContribution_report');
            Route::get('contributionshare-projection', [SiskopController::class, 'contributionshare_projection'])->name('contributionshare_projection');
            Route::get('member-summary', [SiskopController::class, 'member_summary'])->name('member_summary');
        });
    });

    // Route::get('teller', [SenaraiKutipanController::class, 'index'])->name('teller');
    Route::get('SenaraiResit', [SenaraiKutipanController::class, 'senaraiResit'])->name('senaraiResit');
    Route::get('resitPDF/{id}', [SenaraiKutipanController::class, 'senaraiTransaksiPDF'])->name('resitPDF');
    Route::get('senaraiTransaksiPDF/{duration}', [SenaraiKutipanController::class, 'ssenaraiTransaksiPDF'])->name('senaraiTransaksiPDF');
    Route::get('TaxinvoicePDF/{id}', [TaxInvoiceController::class, 'taxInvoice'])->name('taxInvoice');
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
