<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Entretien;
use App\Partner;
use App\Location;
use App\Driver;

class EntretienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $car = Car::find($id);
        $entretiens = Entretien::where('car_id',$id)->latest()->get();
        $car->partner = Partner::find($car->partner_id);
        $location = Location::where('car_id',$car->id)->latest()->first();
            if($location<>null){
                $driver = Driver::find($location->driver_id);
                $car->driver = $driver->nom. ' ' .$driver->prenom;
                $car->location = $location;
            }
        return view('entretiens')->with('car',$car)->with('entretiens',$entretiens);
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
