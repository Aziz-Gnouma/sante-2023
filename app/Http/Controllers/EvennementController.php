<?php

namespace App\Http\Controllers;

use App\Models\User;


use App\Models\Evennement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvennementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $events = Evennement::all();

        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Evennement::all();

        return view('events.create',compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validation
        // using function validation
        $request->validate($this->validationRules());
         // Créer un Post vide
         $newEvent = new Evennement();
       
         // Le remplir avec le contenu du formulaire
         $newEvent->title = $request->title;
         $newEvent->description = $request->description;
         $newEvent->date = $request->date;
         // Sauvegarde dans la BD
         $newEvent->save();
 
         return redirect()->route('events.show', $newEvent->id)->with('success', 'Evenement created successfully');
   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Evennement::findOrFail($id);
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Evennement::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->validationRules());

        $event = Evennement::findOrFail($id);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->save() ;
        return redirect()->route('events.show', $event->id)->with('success', 'Evenement updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Evenement::findOrFail($id);

        $event->delete();

        return redirect()->route('events.index')->with('success', 'Evenenments deleted successfully');
    
    }
    private function validationRules() {
        return [
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'date' => 'required',
            
           
        ];
    }
}