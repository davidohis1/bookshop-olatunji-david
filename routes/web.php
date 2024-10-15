<?php

use Illuminate\Support\Facades\Route;
use App\Models\Detail;
use App\Models\Rooms;
use App\Models\Staff;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StaffController;

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

Route::controller(StaffController::class)->group(function() {
    Route::get('/registration','registration')->middleware('alreadyLoggedIn');
    Route::post('/registration-user','registerUser')->name('register-user');
    Route::get('/login','login');
    Route::post('/login-user','loginUser')->name('login-user');
    Route::get('/dashboard','dashboard')->middleware('isLoggedIn');
    Route::post('/dashboard','dashboard')->name('dashboard');
    Route::post('/look', 'look')->name('look');
    Route::get('/logout','logout');

    Route::get('/','index');
});


Route::controller(SiteController::class)->group(function() {
    Route::get('/','index');
    Route::get('/add','add');
    Route::post('/add-item','addItem')->name('add-item');

    Route::post('/placeorder', 'placeorder')->name('placeorder');
    Route::post('/', 'search')->name('search');

    Route::get('/finished','finished');
    Route::post('/finished','finished')->name('finished');
    Route::get('/last','last');
    Route::post('/last','last')->name('last');

});


Route::fallback(function () {
    return view('404');
});



//Route::get('/showproduct/{a}/{b}', [Product1Controller::class, 'Show']);

// Route::get('/Detail', [DetailController::class, 'index'])->name('Detail.index');
// Route::post('/Detail', [DetailController::class, 'store'])->name('Detail.store');

// Route::get('/', [RoomsController::class, 'index'])->name('Detailj.index');
// Route::post('/', [RoomsController::class, 'store'])->name('Detail.store');


// Route::get('/read', [DetailController::class, 'read']);
// Route::get('edit/{id}', [DetailController::class, 'edit'])->name('Detail.edit');
// Route::put('/update', [DetailController::class, 'update']);