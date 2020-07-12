<?php

namespace App\Http\Controllers;

use App\Partner;
use App\Car;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners1 = Partner::where('created_at',null)->get();
        $partners2 = Partner::where('created_at','<>',null)->get();
        foreach($partners1 as $partner){
            $partner->nbCars = Car::where('partner_id',$partner->id)->count();
            $partner->nbLoue = Car::where('partner_id',$partner->id)->where('etat','En cours de location')->count();

        }
        foreach($partners2 as $partner){
            $partner->nbCars = Car::where('partner_id',$partner->id)->count();
            $partner->nbLoue = Car::where('partner_id',$partner->id)->where('etat','En cours de location')->count();
        }
        return view('partners')->with('partners1',$partners1)->with('partners2',$partners2);
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
