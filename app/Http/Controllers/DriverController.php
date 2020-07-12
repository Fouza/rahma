<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use App\Http\Requests\DriverStoreRequest;
use App\Http\Requests\DriverUpdateRequest;
use Carbon\Carbon;
use PHPUnit\Util\Json;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now();
        $drivers = Driver::all()->sortByDesc('created_at');
        foreach ($drivers as $driver) {
            $end = new Carbon($driver->permisFin);
            if ($end <= $now) {
                $driver->permit = '100';
                $driver->bg = 'danger';
            } else {
                $rest = $now->diffInDays($end);
                $deg = (365 - $rest) * 100 / 365;
                if ($deg < 50) {
                    $driver->bg = 'success';

                    if ($deg <= 0) {
                        $driver->permit = '10';
                    } else {
                        $driver->permit = (string) $deg;
                    }
                }
                if ($deg < 75 && $deg >= 50) {
                    $driver->bg = 'warning';
                    $driver->permit = (string) $deg;
                }
                if ($deg >= 75) {
                    $driver->bg = 'danger';
                    if ($deg >= 100) {
                        $driver->permit = "100";
                    } else {
                        $driver->permit = (string) $deg;
                    }
                }
            }
        }

        return view('drivers')->with('drivers', $drivers);
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
    public function store(DriverStoreRequest $request)
    {
        $driver = new Driver();
        $driver->nom = $request->get('nom');
        $driver->prenom = $request->get('prenom');
        $driver->email = $request->get('email');
        $driver->phone = $request->get('phone');
        $driver->permis = $request->get('permis');
        $driver->permisFin = new Carbon($request->get('permisFin'));
        $driver->adressePostal = $request->get('address');
        if ($request->hasFile('photo')) {
            $name_photo = uniqid() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs(
                'public',
                $name_photo
            );
            $driver->photo = $name_photo;
        }
        $platforms = [];
        $i = 0;
        if ($request->has('uber')) {
            $platforms[$i] = "Uber";
            $i++;
        }
        if ($request->has('kapten')) {
            $platforms[$i] = "Kapten";
            $i++;
        }
        if ($request->has('heetch')) {
            $platforms[$i] = "Heetch";
            $i++;
        }
        if ($request->has('bolt')) {
            $platforms[$i] = "Bolt";
            $i++;
        }
        if ($request->has('allocab')) {
            $platforms[$i] = "Allocab";
            $i++;
        }
        $driver->platforms = json_encode($platforms);
        $driver->save();
        return redirect('drivers')->with('Succès','Chauffeur ajouté avec succès');
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
        $driver = Driver::find($id);
        return view('editdriver')->with('driver',$driver);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DriverUpdateRequest $request, $id)
    {
        $driver = Driver::find($id);
        $driver->nom = $request->get('nom');
        $driver->prenom = $request->get('prenom');
        $driver->email = $request->get('email');
        $driver->phone = $request->get('phone');
        $driver->permis = $request->get('permis');
        $driver->permisFin = new Carbon($request->get('permisFin'));
        $driver->adressePostal = $request->get('address');
        if ($request->hasFile('photo')) {
            $name_photo = uniqid() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs(
                'public',
                $name_photo
            );
            $driver->photo = $name_photo;
        }
        $platforms = [];
        $i=0;
        if ($request->has('uber')) {
            $platforms[$i] = "Uber";
            $i++;
        }
        if ($request->has('kapten')) {
            $platforms[$i] = "Kapten";
            $i++;
        }
        if ($request->has('heetch')) {
            $platforms[$i] = "Heetch";
            $i++;
        }
        if ($request->has('bolt')) {
            $platforms[$i] = "Bolt";
            $i++;
        }
        if ($request->has('allocab')) {
            $platforms[$i] = "Allocab";
            $i++;
        }
        $driver->platforms = json_encode($platforms);
        $driver->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        return redirect()->back();
    }
}
