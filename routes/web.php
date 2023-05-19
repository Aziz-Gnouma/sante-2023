<?php
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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


Route::post('/answer', function (Request $request) {
    $subject = $request->input('subject');
    $message = $request->input('message');

    // Effectuez ici la logique de sauvegarde dans la base de données
    DB::table('answers')->insert([
        'subject' => $subject,
        'message' => $message,
    ]);

    // Retournez une réponse appropriée à l'utilisateur
    return response('Answer submitted successfully!', 200);
});






Route::view('/contact', 'contact');

Route::delete('/admin/users/{id}', function ($id) {
    $deleted = DB::table('users')->where('id', $id)->delete();

    if ($deleted) {
        // Suppression réussie, renvoyer une réponse appropriée
        return response()->json(['message' => 'Utilisateur supprimé avec succès'], 200);
    } else {
        // Utilisateur non trouvé, renvoyer une réponse d'erreur
        return response()->json(['message' => 'Utilisateur non trouvé'], 404);
    }
});

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
