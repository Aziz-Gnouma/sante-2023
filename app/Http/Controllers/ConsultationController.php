<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;





class ConsultationController extends Controller
{
    public function consultation()
    {
        return view('consultation');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'number' => 'required|numeric',
        'email' => 'required|email|unique:users',
        'date' => 'required|date'
    ]);

    $appointment = new Appointment();
    $appointment->name = $validatedData['name'];
    $appointment->number = $validatedData['number'];
    $appointment->email = $validatedData['email'];
    $appointment->date = $validatedData['date'];
    $appointment->save();

    return redirect('/')->with('success', 'Appointment has been added.');
    $appointment = Appointment::find(1); // Remplacez 1 par l'ID de l'appointment que vous souhaitez afficher

    return view('front.consultation', compact('appointment'));
}

    
}
