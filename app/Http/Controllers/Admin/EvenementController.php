<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evennement;
use Auth;
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Evennement= Evennement::paginate(4);

        return view('Evenement.index',['evennements'=>$Evennement]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Evenement.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        $data['id'] = Auth::user()->id;
        $Evenement = Evenement::create($data);
        return redirect()->back()->withSuccess('Evenement created !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Evennement $Evennement)
    {
       return view('Evenement.edit',['Evenement' => $Evennement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evennement $Evennement)
    {
        $Evennement->update($request->all());
        return redirect()->back()->withSuccess('Evenement updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evennement $Evennement)
    {
        $Evennement->delete();
        return redirect()->back()->withSuccess('Evennement deleted!');
    }
    
   
}