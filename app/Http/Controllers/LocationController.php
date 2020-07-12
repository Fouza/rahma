<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use App\Location;
use App\Car;
use App\Http\Requests\LocationStoreRequest;
use Carbon\Carbon;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all()->sortByDesc('created_at');
        foreach($locations as $location){
            $testDeb = new Carbon($location->dateDebut);
            if($testDeb->diffInDays(Carbon::now()) == 0){
                $location->nowDeb = true;
            }else{
                $location->nowDeb = false;
            }
            $testFin = new Carbon($location->dateFin);
            if($testFin->diffInDays(Carbon::now()) == 0){
                $location->nowFin = true;
            }else{
                $location->nowFin = false;
            }
        }
        return view('locations')->with('locations',$locations);
    }

    public function downloadContrat($id){
        $location = Location::find($id);
        if($location->contrat <> null){
            $contrat = $location->contrat;
            return response()->download(storage_path().'\app\public\\'.$contrat);
        }else{
            return redirect()->back()->with('errors','Fichier téléchargé n\'existe pas');
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationStoreRequest $request)
    {
        $driver = Driver::find($request->get('driverId'));
        $location = new Location();
        $car = Car::where('matricule',$request->get('matricule'))->first();
        if($car == null) {
            //$drivers = Driver::all()->sortByDesc('created_at');
            //return view('drivers')->with('drivers',$drivers)->with('echec','Matricule Erroné, respectez le format XXX YYY XXX');
            return redirect()->back();
        }
        $location->driver_id = $driver->id;
        $location->nom = $driver->nom;
        $location->prenom = $driver->prenom;
        $location->car_id = $car->id;
        $location->matricule = $car->matricule;
        $location->dateDebut = new Carbon($request->get('dateDebut'));
        $location->dateFin = new Carbon($request->get('dateFin'));
        if ($request->hasFile('contrat')) {
            $name_contrat = uniqid() . '.' . $request->file('contrat')->getClientOriginalExtension();
            $request->file('contrat')->storeAs(
                'public',
                $name_contrat
            );
            $location->contrat = $name_contrat;
        }
        $location->save();
        //$drivers = Driver::all()->sortByDesc('created_at');
        return redirect()->back();
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
