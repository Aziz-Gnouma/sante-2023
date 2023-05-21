<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;


use App\Models\Evenement;
use App\Models\Interresant;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Evenement access|Evenement create|Evenement edit|Evenement delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Evenement create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Evenement edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Evenement delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $events = Evenement::all();

        return view('events.index',compact('events'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('events.create');
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
         $newEvent = new Evenement();
       
         // Le remplir avec le contenu du formulaire
         $newEvent->Nom_Evenement = $request->Nom_Evenement;
         $newEvent->description = $request->description;
         $newEvent->date = $request->date;
         $newEvent->Nom_club = $request->Nom_club;
         $newEvent->user_id = Auth::user()->id;
         $newEvent->Email = $request->Email;
         $newEvent->publish = $request->publish;
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
        $event = Evenement::findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function interesser($event_id,$user_id)
    {
        $newInterresant = new Interresant();
        $newInterresant-> user_id =$user_id;
        $newInterresant-> evennement_id =$event_id;
         // Sauvegarde dans la BD
         $newInterresant->save();
         return redirect()->route('Evenement')->with('success', 'interressé');
   
    }

    public function participer($event_id,$user_id)
    {
        $newParticipant = new Participant();
        $newParticipant-> user_id =$user_id;
        $newParticipant-> evennement_id =$event_id;
         // Sauvegarde dans la BD
         $newParticipant->save();
         return redirect()->route('Evenement')->with('success', 'you are participate');
   
    }
    public function destroyParticipation($id)
    {
        DB::table('participants')->where('evennement_id', $id)->delete();
       
        return redirect()->route('Evenement')->with('success', 'participante deleted');
   
    }
    public function destroyInterresant($id)
    {
        DB::table('interresants')->where('evennement_id', $id)->delete();
       
        return redirect()->route('Evenement')->with('success', 'Interresante deleted');
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Evenement::findOrFail($id);
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

        $event = Evenement::findOrFail($id);
        $event->Nom_Evenement = $request->Nom_Evenement;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->Nom_club = $request->Nom_club;
        $event->user_id = Auth::user()->id;
        $event->Email = $request->Email;
        $event->publish = $request->publish;
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
            'Nom_Evenement' => 'required|min:5',
            'description' => 'required|min:10',
            'date' => 'required',
            'Nom_club' => 'required|min:5',
            'Email' => 'required',
            'publish' => 'required',
        ];
    }
}