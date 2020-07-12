{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Entretiens</h1>
@stop

@section('adminlte_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
@stop
@section('content')

    <form action="{{ route('updatecar',['carId'=>$car->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="marque">Marque</label>
        <input type="" class="form-control" name="marque" placeholder="Entrez la marque" value="{{$car->marque}}">
        </div>
        <div class="form-group">
            <label for="model">Modèle</label>
            <input type="" class="form-control" name="model" placeholder="Entrez le modèle" value="{{ $car->model }} ">
        </div>
        <div class="form-group">
            <label for="matricule">Matricule</label>
            <input type="" class="form-control" name="matricule" placeholder="Entrez le matricule" value="{{ $car->matricule }} ">
        </div>
        <div class="form-group">
            <label for="year">Année de circulation</label>
            <input type="numeric" class="form-control" name="year" placeholder="Entrez l'année de circulation" value="{{ $car->year }} ">
        </div>
        <div class="form-group">
            <label for="capacite">Capacité</label>
            <input type="numeric" class="form-control" name="capacite" placeholder="Entrez la capacité de la voiture" max="10" value="{{ $car->capacite }} ">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Propriétaire</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="partner">
            <option value="" selected disabled hidden>Choisir...</option>
            <option value="Nazih" <?php if($car->partner->prenom == "Nazih") echo "selected"; ?>>Nazih</option>
            <option value="Nabil" <?php if($car->partner->prenom == "Nabil") echo "selected"; ?>>Nabil</option>
            </select>
        </div>
        <div class="container">
                <label for="datepicker">Entrez la date d'expiration du contrôle technique</label>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" id="datepicker" name="ctrl_exp" value="{{ $car->ctrlTechFin }} "/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container">
            <label for="datepicker">Entrez la date d'expiration de l'assurance</label>
            <div class="col-md-6">
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" id="datepicker2" name="ass_exp" value="{{ $car->assuranceFin }} "/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="photo">Ajouter une photo</label>
            <input type="file" class="form-control-file" id="photo" name="photo" accept="image/*">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Ajouter le contrôle technique</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fileCtrl">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Ajouter l'assurance</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile2" name="fileAss">
        </div>


    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('adminlte_js')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.2/js/adminlte.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
        $('#datepicker').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker').datepicker("setDate", new Date());
    </script>
    <script type="text/javascript">
        $('#datepicker2').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker').datepicker("setDate", new Date());
    </script>

@stop
