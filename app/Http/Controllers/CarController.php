<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\Car;
use App\Driver;
use App\Partner;
use App\Location;
use App\Controle;
use App\Assurance;
use App\Http\Requests\CarStoreRequest;
use App\Http\Requests\CarUpdateRequest;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Date;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list1 = storage_path('app/public/carbrands.json');
        $arrayBrands = json_decode(file_get_contents($list1));
        $list2 = storage_path('app/public/carmodels.json');
        $arrayModels = json_decode(file_get_contents($list2));
        // dd($arrayBrands[0]->name);
        $partners = Partner::all();
        $cars = Car::all()->sortByDesc('created_at');
        $now = Carbon::now();
        foreach($cars as $car){
            $ctrl = Controle::where('car_id',$car->id)->latest()->first();
            if($ctrl <> null){
                //$begin = new Carbon($ctrl->ctrlTechDebut);
                $end = new Carbon($ctrl->ctrlTechFin);
                if($end<=$now){
                    $car->ctrl = '100';
                    $car->bgCtrl = 'danger';
                }else{
                    $rest = $now->diffInDays($end);
                    if($rest > 365){
                        $ctrlCar=0;
                    }else{
                        $ctrlCar = (365-$rest)*100/365;
                    }

                    if($ctrlCar < 50){
                        $car->bgCtrl = 'success';
                        if($ctrlCar <= 0 ){
                            $ctrlCar = 10;
                        }
                    }
                    if($ctrlCar< 75 && $ctrlCar>=50){
                        $car->bgCtrl = 'warning';
                    }
                    if($ctrlCar>=75 || $ctrlCar <=0){
                        $car->bgCtrl = 'danger';
                    }
                    $car->ctrl = (String) $ctrlCar;
                }
                $car->controle = $ctrl;
            }
            $ass = Assurance::where('car_id',$car->id)->latest()->first();
            if($ass <> null){
                //$begin = new Carbon($ass->assuranceDebut);
                $end = new Carbon($ass->assuranceFin);
                if($end<=$now){
                    $car->ass = '100';
                    $car->bgAss = 'danger';
                }else{
                    $rest = $now->diffInDays($end);
                    if($rest > 365){
                        $assCar = 0;
                    }else{
                        $assCar = (365-$rest)*100/365;
                    }
                    if($assCar < 50){
                        $car->bgAss = 'success';
                        if($assCar<=0){
                            $assCar = 10;
                        }
                    }
                    if($assCar< 75 && $assCar>50){
                        $car->bgAss = 'warning';
                    }
                    if($assCar >= 75){
                        $car->bgAss = 'danger';
                    }
                    $car->ass = (String) $assCar;
                }
                $car->assurance = $ass;
            }

            $location = Location::where('car_id',$car->id)->latest()->first();
            if($location<>null){
                $driver = Driver::find($location->driver_id);
                $car->driver = $driver->nom. ' ' .$driver->prenom;
                $car->location = $location;
            }
            $partner = Partner::find($car->partner_id);
            $car->partner = $partner->nom;
            /*$controle = Controle::where('car_id',$car->id)->latest()->first();
            $controle = public_path().$controle->contrat;
            $assurance = Assurance::where('car_id',$car->id)->latest()->first();
            $assurance = public_path().$assurance->contrat;
            */
            //$car->cContrat = $controle;
            //$car->aContrat = $assurance;
        }
        return view('parc')->with('partners',$partners)->with('cars',$cars)->with('brands',$arrayBrands)->with('models',$arrayModels);
    }

    public function downloadControle($carId){
        //$car = Car::find($carId);
        $controle = Controle::where('car_id',$carId)->latest()->first();
        //$file = public_path().$controle->contrat;
        if($controle->contrat <> null){
            return response()->download(storage_path().'\app\public\\'.$controle->contrat);
        }else{
            return redirect()->back()->with('errors','Fichier téléchargé n\'existe pas');
        }
    }

    public function downloadAssurance($carId){
        //$car = Car::find($carId);
        $assurance = Assurance::where('car_id',$carId)->latest()->first();
        //$file = public_path().$controle->contrat;
        if($assurance->assurance <> null){
            return response()->download(storage_path().'\app\public\\'.$assurance->assurance);
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarStoreRequest $request)
    {
        //$request = $request->validated();

        $car = new Car;
        $car->marque = $request->get('marque');
        $car->model = $request->get('model');
        $car->matricule = $request->get('matricule');
        $car->capacite = $request->get('capacite');
        $car->year = $request->get('year');
        $partner = Partner::where('prenom',$request->get('partner'))->first();
        if($partner == null){
            return back()->withInput()->with(['Echec','Il n\'existe pas de partenaire']);
        }
        $car->partner_id = $partner->id;
        if ($request->hasFile('photo')) {
            $name_photo = uniqid() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs(
                'public',
                $name_photo
            );
            $car->photo = $name_photo;
        }
        $car->save();

        $controle = new Controle;
        $controle->ctrlTechFin = new Carbon($request->get('ctrl_exp'));

        if ($request->hasFile('fileCtrl')) {
            $name_controle = uniqid() . '.' . $request->file("fileCtrl")->getClientOriginalExtension();
            $request->file("fileCtrl")->storeAs(
                'public',
                $name_controle
            );
            $controle->contrat = $name_controle;
        }
        $controle->car_id = $car->id;
        $controle->save();
        $assurance = new Assurance;
        $assurance->assuranceFin = new Carbon($request->get('ass_exp'));
        if ($request->hasFile('fileAss')) {
            $name_assurance = uniqid() . '.' . $request->file("fileAss")->getClientOriginalExtension();
            $request->file("fileAss")->storeAs(
                'public',
                $name_assurance
            );
            $assurance->assurance = $name_assurance;
        }
        $assurance->car_id = $car->id;
        $assurance->save();
        return redirect('parc')->with('Success','Véhicule ajouté avec succès');
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
        $car = Car::find($id);
        $car->partner = Partner::find($car->partner_id);
        $assurance = Assurance::where('car_id',$car->id)->latest()->first();
        if($assurance <> null) {
            $car->assuranceFin = $assurance->assuranceFin;
        }else{
            $car->assuranceFin = Carbon::now();
        }
        $controle = Controle::where('car_id',$car->id)->latest()->first();
        if($controle <> null){
            $car->ctrlTechFin = $controle->ctrlTechFin;
        }else{
            $car->ctrlTechFin = Carbon::now();
        }
        return view('editcar')->with('car',$car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarUpdateRequest $request, $id)
    {
        //$request = $request->validated();
        $car = Car::find($id);
        $car->marque = $request->get('marque');
        $car->model = $request->get('model');
        $car->matricule = $request->get('matricule');
        $car->capacite = $request->get('capacite');
        $car->year = $request->get('year');
        $partner = Partner::where('prenom',$request->get('partner'))->first();
        if($partner == null){
            return back()->withInput()->with(['Echec','Il n\'existe pas de partenaire']);
        }
        $car->partner_id = $partner->id;
        if ($request->hasFile('photo')) {
            $name_photo = uniqid() . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs(
                'public',
                $name_photo
            );
            $car->photo = $name_photo;
        }
        $car->save();
        $controle = new Controle;
        $controle->ctrlTechFin = new Carbon($request->get('ctrl_exp'));

        if ($request->hasFile('fileCtrl')) {
            $name_controle = uniqid() . '.' . $request->file("fileCtrl")->getClientOriginalExtension();
            $request->file("fileCtrl")->storeAs(
                'public',
                $name_controle
            );
            $controle->contrat = $name_controle;
        }
        $controle->car_id = $car->id;
        $controle->save();
        $assurance = new Assurance;
        $assurance->assuranceFin = new Carbon($request->get('ass_exp'));
        if ($request->hasFile('fileAss')) {
            $name_assurance = uniqid() . '.' . $request->file("fileAss")->getClientOriginalExtension();
            $request->file("fileAss")->storeAs(
                'public',
                $name_assurance
            );
            $assurance->assurance = $name_assurance;
        }
        $assurance->car_id = $car->id;
        $assurance->save();
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
        $car = Car::find($id);
        $car->delete();
        return redirect()->back();
    }
}
