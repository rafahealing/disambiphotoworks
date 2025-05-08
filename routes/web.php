<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController; // Ensure this controller exists in the specified namespace

// Homepage halaman utama
Route::get('/', function () {
    return view('/user/home');
})->name('home');

// Sign Up (Only for guests, if already logged in, redirect)
Route::prefix('user')->middleware('guest')->group(function () {
    Route::get('signup', fn() => view('user.signup'))->name('signup');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('register.post');

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});
Route::post('user/logout', [LoginController::class, 'logout'])->name('logout');


// wedding
Route::get('/wedding', function () {
    return view('user/wedding');
})->name('wedding');


// Menampilkan form booking
Route::get('/user/booking', [BookingController::class, 'showBookingForm'])->name('user.booking')->middleware('auth');

// Form submit booking
Route::post('/booking/submit', [BookingController::class, 'submitBooking'])->name('booking.submit');


// Menampilkan halaman receipt setelah submit

Route::get('/user/receipt', [BookingController::class, 'showReceipt'])->name('receipt');




// Route untuk halaman admin yang menampilkan daftar booking
Route::get('/admin', [BookingController::class, 'showAdminBookings'])->name('admin');

Route::put('/admin/bookings/{id}', [BookingController::class, 'update']);


Route::get('/admin/booking/export-excel', [BookingController::class, 'exportExcel'])->name('booking.export.excel');

Route::get('/admin/booking/export/pdf', [BookingController::class, 'exportPdf'])->name('booking.export.pdf');

Route::get('/admin/booking/invoice/{id}', [BookingController::class, 'invoice'])->name('booking.invoice');








// wedding-detail
Route::get('/detail/wedding-detail-an', function () {
    return view('detail/wedding-detail-an');
})->name('detail/wedding-detail-an');

Route::get('/detail/wedding-detail-ma', function () {
    return view('detail/wedding-detail-ma');
})->name('detail/wedding-detail-ma');

Route::get('/detail/wedding-detail-ia', function () {
    return view('detail/wedding-detail-ia');
})->name('detail/wedding-detail-ia');

Route::get('/detail/wedding-detail-al', function () {
    return view('detail/wedding-detail-al');
})->name('detail/wedding-detail-al');

Route::get('/detail/wedding-detail-id', function () {
    return view('detail/wedding-detail-id');
})->name('detail/wedding-detail-id');

Route::get('/detail/wedding-detail-dw', function () {
    return view('detail/wedding-detail-dw');
})->name('detail/wedding-detail-dw');

Route::get('/detail/wedding-detail-nd', function () {
    return view('detail/wedding-detail-nd');
})->name('detail/wedding-detail-nd');

Route::get('/detail/wedding-detail-nb', function () {
    return view('detail/wedding-detail-nb');
})->name('detail/wedding-detail-nb');

Route::get('/detail/wedding-detail-sf', function () {
    return view('detail/wedding-detail-sf');
})->name('detail/wedding-detail-sf');

Route::get('/detail/wedding-detail-ai', function () {
    return view('detail/wedding-detail-ai');
})->name('detail/wedding-detail-ai');







