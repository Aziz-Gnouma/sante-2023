<?php
use App\Http\Controllers\ConsultationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvennementController;
use App\Models\Appointment;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
    
};

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
//Route::get('/consultation', [ConsultationController::class, 'consultation'])->name('consultation');
//Route::get('/consultation', function () {
//    return view('consultation');
//})->middleware(['front'])->name('consultation');

Route::get('/consultation', function () {
    return view('front.consultation');
})->middleware(['front'])->name('consultation');
Route::post('/consultation', [App\Http\Controllers\ConsultationController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $appointments = Appointment::all();
    return view('dashboard', compact('appointments'));
});



Route::get('/test-mail',function(){

    $message = "Testing mail";

    \Mail::raw('Hi, welcome!', function ($message) {
      $message->to('ajayydavex@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});



Route::get('/Evenement', function () {
    return view('front.Evenement');
})->middleware(['front'])->name('Evenement');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('Evenements','EvenementController');

        

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});
Route::resource('events', EvennementController::class);
