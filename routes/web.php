<?php
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ConsultationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EvenementController as AdminEvenementController;;


use App\Models\Appointment;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
    EvenementController,
    
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
Route::delete('/admin/appointments/{name}', function ($id) {
    // Code pour supprimer l'élément avec l'ID donné
    // Utilisez le modèle approprié et la méthode delete()
    // Assurez-vous de gérer les erreurs
    
    return response()->json(['message' => 'Appointment deleted successfully']);
});






Route::post('/answer', function (Request $request) {
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'subject' => 'required',
        'message' => 'required',
    ]);

    // Création d'une nouvelle instance du modèle Answer
    $answer = new Answer();
    $answer->subject = $validatedData['subject'];
    $answer->message = $validatedData['message'];

    // Sauvegarde de l'objet Answer dans la base de données
    $answer->save();

    // Redirection vers une autre page ou affichage d'un message de succès
    return redirect()->back()->with('success', 'Answer sent successfully!');
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

Route::get('/about', function () {
    return view('about');
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

Route::post('admin/events/{event}/interesser/{userID}', [EvenementController::class, 'interesser'])->name('admin.events.interesser');
Route::post('admin/events/{event}/participer/{userID}', [EvenementController::class, 'participer'])->name('admin.events.participer');
Route::delete('admin/events/{event}/participation', [EvenementController::class, 'destroyParticipation'])->name('admin.events.destroyParticipation');
Route::delete('admin/events/{event}/interresant', [EvenementController::class, 'destroyInterresant'])->name('admin.events.destroyInterresant');

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
        Route::resource('events','EvenementController');

        

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});
Route::resource('events', EvenementController::class);
