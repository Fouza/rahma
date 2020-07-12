<?php

namespace App\Http\Controllers;


use App\Http\Requests\PlatformStoreRequest;
use App\Http\Requests\PlatformUpdateRequest;
use Illuminate\Http\Request;
use App\Platform;

use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platforms = Platform::all();
        $cpt=0;
        foreach($platforms as $platform){

            $palette = Palette::fromFilename(storage_path().'\app\public\\'.$platform->logo);
            //$col = $palette->getMostUsedColors(1);
            $extractor = new ColorExtractor($palette);
            $ext = $extractor->extract(1);
            $color = Color::fromIntToHex($ext[0]);
            $platform->color = $color;
            $cpt++;
        }
        return view('platforms')->with('platforms',$platforms);
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
    public function store(PlatformStoreRequest $request)
    {
        $platform = new Platform;
        $platform->nom = $request->get('nom');
        if ($request->hasFile('logo')) {
            $logo = uniqid() . '.' . $request->file("logo")->getClientOriginalExtension();
            $request->file("logo")->storeAs(
                'public',
                $logo
            );
            $platform->logo = $logo;
        }
        if ($request->hasFile('contrat')) {
            $contrat = uniqid() . '.' . $request->file("contrat")->getClientOriginalExtension();
            $request->file("contrat")->storeAs(
                'public',
                $contrat
            );
            $platform->contrat = $contrat;
        }
        $platform->save();
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
    public function update(PlatformUpdateRequest $request, $id)
    {
        $platform = Platform::find($id);
        $platform->nom = $request->get('nom');
        if ($request->hasFile('logo')) {
            $logo = uniqid() . '.' . $request->file("logo")->getClientOriginalExtension();
            $request->file("logo")->storeAs(
                'public',
                $logo
            );
            $platform->logo = $logo;
        }
        if ($request->hasFile('contrat')) {
            $contrat = uniqid() . '.' . $request->file("contrat")->getClientOriginalExtension();
            $request->file("contrat")->storeAs(
                'public',
                $contrat
            );
            $platform->contrat = $contrat;
        }
        $platform->save();
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
        //
    }
}
