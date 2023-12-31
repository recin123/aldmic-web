 <?php

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
    return view('pages.home');
})->name('home');

Route::prefix('about')->group(function () {
    Route::get('/', function () {
        return view('pages.about.index');
    })->name('about.index');

    Route::get('/news', function () {
        return view('pages.about.news');
    })->name('about.news');

    Route::get('/career', function () {
        return view('pages.about.career');
    })->name('about.career');
    
    Route::get('/faq', function () {
        return view('pages.about.faq');
    })->name('about.faq');

    
});

Route::get('/product', function() {
    return view('pages.product');
})->name('product');

Route::prefix('service')->group(function () {

    Route::get('/', function() {
    return view('pages.service.index'); 
    })->name('service.index');
    
    Route::get('/e-voucher-reseller', function() {
        return view('pages.service.e-voucher-reseller');
    })->name('service.e-voucher-reseller');

    Route::get('/loyalty-program', function() {
        return view('pages.service.loyalty-program');
    })->name('service.loyalty-program');

    Route::get('/mobile-gifting', function() {
        return view('pages.service.mobile-gifting');
    })->name('service.mobile-gifting');
});

Route::get('/contact-us', function() {
    return view('pages.contact-us.index');
})->name('contact-us.index');