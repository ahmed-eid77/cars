<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Newsletter;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [AboutController::class, 'index'])->name('about-us.index');

Route::get('/get-nearest-places', [HomeController::class, 'getNearestPlaces'])->name('getNearestPlaces');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');

Route::post('/contact-us', [ContactController::class, 'sendEmail'])->name('contact.sendEmail');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//================================ AUTH ROUTES ================================
Route::middleware('auth')->group(function () {

    Route::post('/car-rental', [ReservationController::class, 'store'])->name('car-rental.store');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
