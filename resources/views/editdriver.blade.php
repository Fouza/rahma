{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Entretiens</h1>
@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
@stop

@section('adminlte_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
@stop
@section('content')

<form action="{{ route('updatedriver',['driverId'=>$driver->id]) }}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="marque">Nom</label>
        <input type="" class="form-control" id="nom" name="nom" placeholder="Entrez le nom" value="{{ $driver->nom }} ">
    </div>
    <div class="form-group">
        <label for="modele">Prénom</label>
        <input type="" class="form-control" id="modele" name="prenom" placeholder="Entrez le prénom" value="{{ $driver->prenom }} ">
    </div>
    <div class="form-group">
        <label for="mat">E-mail</label>
        <input type="" class="form-control" id="email" name="email" placeholder="Entrez l'e-mail" value="{{ $driver->email }} ">
    </div>
    <div class="form-group">
        <label for="annee">Numéro de téléphone</label>
    <input type="text" class="form-control" id="annee" name="phone" placeholder="Entrez le numéro de téléphone" value="{{$driver->phone}}">
    </div>
    <div class="form-group">
        <label for="capacite">Numéro de permis</label>
        <input type="text" class="form-control" id="capacite" name="permis" placeholder="Entrez le numéro de permis" value="{{ $driver->permis }} ">
    </div>
    <div class="container">
        <label for="datepicker">Entrez la date d'expiration du permis</label>
        <div class="col-md-6">
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="permisFin" id="datepicker" value="{{ $driver->permisFin }} "/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="capacite">Adresse postale</label>
        <input type="text" class="form-control" id="capacite" name="address" placeholder="Entrez l'adresse postale" value="{{ $driver->adressePostal }} ">
    </div>
    <div class="form-group">
        <label for="photo">Ajouter une photo</label>
        <input type="file" class="form-control-file" id="photo" name="photo" accept="image/*">
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="uber" <?php if(strpos($driver->platforms, "Uber")) echo 'checked'?> >Uber
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="kapten" <?php if(strpos($driver->platforms, "Kapten")) echo 'checked' ?>>Kapten
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="heetch" <?php if(strpos($driver->platforms, "Heetch")) echo 'checked' ?>>Heetch
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="bolt" <?php if(strpos($driver->platforms, "Bolt")) echo 'checked' ?>>Bolt
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="allocab" <?php if(strpos($driver->platforms, "Allocab")) echo 'checked'?>>Allocab
        </label>
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
        weekStart: 1
        , daysOfWeekHighlighted: "6,0"
        , autoclose: true
        , todayHighlight: true
    , });
    $('#datepicker').datepicker("setDate", new Date());

</script>


@stop
