<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\RentalRegisterController;
use App\Models\Car;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome')->with('cars' , Car::where('available' , 1)->get());
});

Route::get('/parc' , function () {
    return view('location')->with('cars' , Car::where('available' , 1)->get());
});

Route::get('/help' , function () {
    return view('help')->with('faqs' , Faq::all());
});

Route::get('/car-detail/{id}' , function ($id) {
    return view('car-detail')->with('car' , Car::findOrFail($id));
})->name('single-car');

Route::get('/dashboard', function () {
    if(Auth::user()->profile == 'admin'){
        return view('admin-dashboard');
    }else{
        return view('dashboard');
    }
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('rental/add-form\{id}', [RentalRegisterController::class, 'create'])
                ->name('rental-add-form');
    Route::post('rental/add' , [RentalRegisterController::class , 'store'])
                ->name('rental-add');
});


Route::middleware('isAdmin')->group(function () {

    Route::get('faq/list', [FaqController::class, 'index'])
                ->name('faq-list');
    Route::get('faq/add-form', [FaqController::class, 'create'])
                ->name('faq-add-form');
    Route::post('faq/add' , [FaqController::class , 'store'])
                ->name('faq-add');
    Route::delete('faq/remove/{id}' , [FaqController::class , 'destroy'])
                ->name('faq-remove');


    Route::get('car/list', [CarController::class, 'index'])
                ->name('car-list');
    Route::get('car/unavailable', [CarController::class, 'carRented'])
                ->name('car-unavailable');
    Route::get('car/make-available/{id}', [CarController::class, 'makeAvailable'])
                ->name('car-make-available');
    Route::get('car/add-form', [CarController::class, 'create'])
                ->name('car-add-form');
    Route::get('car/edit-form/{id}', [CarController::class, 'edit'])
                ->name('car-edit-form');
    Route::post('car/add' , [CarController::class , 'store'])
                ->name('car-add');
    Route::post('car/edit/{id}' , [CarController::class , 'update'])
                ->name('car-edit');
    Route::get('car/remove/{id}' , [CarController::class , 'destroy'])
                ->name('car-remove');


    Route::get('rental/list', [RentalRegisterController::class, 'index'])
                ->name('rental-list');
});


require __DIR__.'/auth.php';
