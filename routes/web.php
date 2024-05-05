<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CommentController;
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
Route::get('/get-nearest-agencys', [HomeController::class, 'getNearestAgencys'])->name('getNearestAgencys');
Route::get('/get-available-cars', [HomeController::class, 'getAvailableCars'])->name('getAvailableCars');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');

Route::post('/contact-us', [ContactController::class, 'sendEmail'])->name('contact.sendEmail');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//================================ AUTH ROUTES ================================
Route::middleware('auth')->group(function () {

    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

    Route::post('/car-rental', [ReservationController::class, 'store'])->name('car-rental.store');
    
    Route::middleware('is_agency')->group(function () {
        Route::get('/agency', [AgencyController::class, 'index'])->name('agency.index');
        Route::post('/agency/add', [AgencyController::class, 'store'])->name('agency.add');

        Route::get('/agency/cars', [CarController::class, 'show'])->name('agency.cars.show');
        Route::get('/agency/blogs', [AgencyController::class, 'Myblogs'])->name('agency.blogs');
        Route::post('/agency/cars/add', [CarController::class, 'store'])->name('agency.cars.add');

        Route::get('/agency/blogs/create', [BlogController::class, 'create'])->name('agency.blogs.create');
        Route::post('/agency/blogs/add', [BlogController::class, 'store'])->name('agency.blogs.store');
        Route::get('/agency/blogs/{blog}', [BlogController::class, 'edit'])->name('agency.blogs.edit');
        Route::put('/agency/blogs/{blog}', [BlogController::class, 'update'])->name('agency.blogs.update');
        Route::delete('/agency/blog/{blog}', [BlogController::class, 'destroy'])->name('agency.blogs.destroy');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
