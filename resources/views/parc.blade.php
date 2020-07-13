{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Véhicules</h1>
@stop

@section('adminlte_css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet" />
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/style1.css') }}">
<link rel="stylesheet" media="screen and (min-device-width: 576px)" href="{{ asset('css/tablet.css') }}">
<link rel="stylesheet" media="screen and (max-device-width: 575px)" href="{{ asset('css/mobile.css') }}">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">

@stop
@section('content')
<p>Consulter vos véhciules et suivez leurs états actuels : disponible ou louée.</p>
@if($errors->any())
{!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

<div class="row float-right">
    <div class="col-lg-12 operations">
        <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong">Ajouter une voiture</button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Formualire d'ajout d'une voiture</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('car/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="marque">Marque</label>
                                <select class="custom-select" name="marque">
                                    @foreach($brands as $brand)
                                    <option value={{ $brand->NAME_BRAND }} type="hidden">{{ $brand->NAME_BRAND }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="model">Modèle</label>
                                <select class="custom-select" name="marque">
                                    @foreach($models as $item)
                                    @php
                                    $class = $item->brand;
                                    @endphp
                                    @foreach($item->models as $model)
                                    <option class={{ $class." option" }} value={{ $model }} type="hidden">{{ $model }}</option>
                                    @endforeach
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="matricule">Matricule</label>
                                <input type="" class="form-control" name="matricule" placeholder="Entrez le matricule">
                            </div>
                            <div class="form-group">
                                <label for="year">Année de circulation</label>
                                <input type="numeric" class="form-control" name="year" placeholder="Entrez l'année de circulation">
                            </div>
                            <div class="form-group">
                                <label for="capacite">Capacité</label>
                                <input type="numeric" class="form-control" name="capacite" placeholder="Entrez la capacité de la voiture" max="10">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Propriétaire</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="partner">
                                    <option selected>Choisir...</option>
                                    <option value="Nabil">Nabil</option>
                                    <option value="Nazih">Nazih</option>
                                </select>
                            </div>
                            <div class="container">
                                <label for="datepicker">Entrez la date d'expiration du contrôle technique</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" id="datepicker" name="ctrl_exp" />
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
                                            <input type='text' class="form-control" id="datepicker2" name="ass_exp" />
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
                </div>
            </div>
        </div>
    </div>

</div>

<br><br>
<!--CARD-->
@php
$cpt = 0
@endphp
@foreach($cars as $car)
@if($car->etat == 'Disponible')
@php
$bg = 'success'
@endphp
@endif
@if($car->etat == 'En cours de location')
@php
$bg = 'warning'
@endphp
@endif
@if($car->etat == 'Vendue')
@php
$bg = 'danger'
@endphp
@endif

@if($cpt==4)
@php
$cpt=1
@endphp
@endif

@if($cpt == 3)
@php
$cpt=4
@endphp
</div>
<div class="row d-flex justify-content-center">
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 cardbox">
        <div class="card">
            <div class="card-header">
                <div class="col-lg-9 col-sm-9 col-md-9">
                    <span class="badge bg-{{ $bg }}">{{ $car->etat }}</span>
                </div>
                <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                    <!-- Maximize Button -->
                    <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 body-imp">
                    <img class="card-img-top card-image" src="{{asset($car->photo<>null ? 'storage/'.$car->photo : 'img/unknown.jpg')}}" alt="Card image cap">
                </div>

                <div class="col-lg-6 col-md-5 col-sm-6 col-xs-6 write">
                    <div class="col-lg-10">
                        <p class="shown"><strong>{{ $car->marque }} {{ $car->model }} </strong></p>
                        <p class="shown">{{ $car->matricule }} </p>
                        <p class="hide"><strong>Année de circulation : </strong>{{ $car->year }}</p>
                        <p class="hide"><strong>Capacité : </strong> {{ $car->capacite }} </p>
                        <p class="hide"><strong>Propriétaire : </strong>{{ $car->partner }} </p>
                        @if($car->etat == 'En cours de location')
                        <p class="hide"><strong>En cours de location depuis : </strong> {{ $car->location->dateDebut }} par {{ $car->driver }}</p>
                        @endif
                        @if($car->etat == 'Disponible' && $car->location <> null)
                            <p class="hide"><strong>Dernière location depuis : </strong> {{ $car->location->dateFin }} par {{ $car->driver }}</p>
                            @endif
                    </div>
                    <div class="col-lg-10">
                        @if($car->controle<>null)
                            <p class="hide"><strong>Expiration du contrôle technique : </strong>{{ $car->controle->ctrlTechFin }}</p>
                            @endif
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-{{$car->bgCtrl}} bar-hide-fils" style="width: {{ $car->ctrl }}%;height:100%;"></div>
                            </div>
                            @if($car->assurance<>null)
                                <p class="hide"><strong>Expiration de l'assurance : </strong>{{ $car->assurance->assuranceFin }} </p>
                                @endif
                                <div class="progress progress-xs bar-hide">
                                    <div class="progress-bar bg-{{$car->bgAss}} bar-hide-fils" style="width: {{ $car->ass }}%;height:100%;"></div>
                                </div>
                    </div>
                    <div class="col-lg-10">
                        @if($car->controle<>null)
                            <a class="btn btn-doc" href="{{ route('downloadassurance',['carId'=>$car->id]) }}" target="_blank"><i class="fa fa-download"></i> Assurance</a>
                            @endif
                            @if($car->assurance<>null)
                                <a class="btn btn-doc" href="{{ route('downloadcontrole',['carId'=>$car->id]) }}" target="_blank"><i class="fa fa-download"></i> Contrôle technique</a>
                                @endif
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a type="button" class="btn btn-info footer-btn" href="{{route('entretiens',['carId'=>$car->id])}}">Historique</a>
                <a type="button" class="btn btn-primary footer-btn" href="{{route('editcar',['carId'=>$car->id])}}">Modifier</a>
                <a type="button" class="btn btn-danger footer-btn" href="{{ route('cardel',['carId'=>$car->id]) }} ">Supprimer</a>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-{{$car->bgCtrl}}" style="width:{{ $car->ctrl }}%;height:100%;"></div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

    @endif


    @if($cpt == 1 || $cpt == 2)
    @php
    $cpt++
    @endphp
    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 cardbox">
        <div class="card">
            <div class="card-header">
                <div class="col-lg-9 col-sm-9 col-md-9">
                    <span class="badge bg-{{$bg}}">{{ $car->etat }}</span>
                </div>
                <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                    <!-- Maximize Button -->
                    <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 body-imp">
                    <img class="card-img-top card-image" src="{{asset($car->photo<>null ? 'storage/'.$car->photo : 'img/unknown.jpg')}}" alt="Card image cap">
                </div>

                <div class="col-lg-6 col-md-5 col-sm-6 col-xs-6 write">
                    <div class="col-lg-10">
                        <p class="shown"><strong>{{ $car->marque }} {{ $car->model }} </strong></p>
                        <p class="shown">{{ $car->matricule }} </p>
                        <p class="hide"><strong>Année de circulation : </strong>{{ $car->year }}</p>
                        <p class="hide"><strong>Capacité : </strong> {{ $car->capacite }} </p>
                        <p class="hide"><strong>Propriétaire : </strong>{{ $car->partner }}</p>
                        @if($car->etat == 'En cours de location')
                        <p class="hide"><strong>En cours de location depuis : </strong> {{ $car->location->dateDebut }} par {{ $car->driver }}</p>
                        @endif
                        @if($car->etat == 'Disponible' && $car->location <> null)
                            <p class="hide"><strong>Dernière location depuis : </strong> {{ $car->location->dateFin }} par {{ $car->driver }}</p>
                            @endif
                    </div>
                    <div class="col-lg-10">
                        @if($car->controle<>null)
                            <p class="hide"><strong>Expiration du contrôle technique : </strong>{{ $car->controle->ctrlTechFin }} </p>
                            @endif
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-{{$car->bgCtrl}} bar-hide-fils" style="width: {{ $car->ctrl }}%;height:100%;"></div>
                            </div>

                            @if($car->assurance<>null)
                                <p class="hide"><strong>Expiration de l'assurance : </strong>{{ $car->assurance->assuranceFin }} </p>
                                @endif
                                <div class="progress progress-xs bar-hide">
                                    <div class="progress-bar bg-{{$car->bgAss}} bar-hide-fils" style="width: {{ $car->ass }}%;height:100%;"></div>
                                </div>
                    </div>
                    <div class="col-lg-10">
                        <form class="form-document">
                            <a class="btn btn-doc" href="{{ route('downloadassurance',['carId'=>$car->id]) }}" target="_blank"><i class="fa fa-download"></i> Assurance</a>
                            <a class="btn btn-doc" href="{{ route('downloadcontrole',['carId'=>$car->id]) }}" target="_blank"><i class="fa fa-download"></i> Contrôle technique</a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a type="button" class="btn btn-info footer-btn" href="{{route('entretiens',['carId'=>$car->id])}}">Historique</a>
                <a type="button" class="btn btn-primary footer-btn" href="{{route('editcar',['carId'=>$car->id])}}">Modifier</a>
                <a type="button" class="btn btn-danger footer-btn" href="{{  route('cardel',['carId'=>$car->id])  }}">Supprimer</a>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-{{$car->bgCtrl}}" style="width: {{$car->ctrl}}%;height:100%;"></div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

    @endif



    @if($cpt == 0)
    @php
    $cpt++
    @endphp
    <div class="row d-flex justify-content-center">


        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 cardbox">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-9 col-sm-9 col-md-9">
                        <span class="badge bg-{{$bg}} ">{{ $car->etat   }}</span>
                    </div>
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 body-imp">
                        <img class="card-img-top card-image" src="{{asset($car->photo<>null ? 'storage/'.$car->photo : 'img/unknown.jpg')}}" alt="Card image cap">
                    </div>

                    <div class="col-lg-6 col-md-5 col-sm-6 col-xs-6 write">
                        <div class="col-lg-10">
                            <p class="shown"><strong>{{ $car->marque }} {{ $car->model }} </strong></p>
                            <p class="shown">{{ $car->matricule }} </p>
                            <p class="hide"><strong>Année de circulation : </strong>{{ $car->year }}</p>
                            <p class="hide"><strong>Capacité : </strong> {{ $car->capacite }} </p>
                            <p class="hide"><strong>Propriétaire : </strong>{{ $car->partner }}</p>
                            @if($car->etat == 'En cours de location')
                            <p class="hide"><strong>En cours de location depuis : </strong> {{ $car->location->dateDebut }} par {{ $car->driver }}</p>
                            @endif
                            @if($car->etat == 'Disponible' && $car->location <> null)
                                <p class="hide"><strong>Dernière location depuis : </strong> {{ $car->location->dateFin }} par {{ $car->driver }}</p>
                                @endif
                        </div>
                        <div class="col-lg-10">
                            @if($car->controle<>null)
                                <p class="hide"><strong>Expiration du contrôle technique : </strong>{{ $car->controle->ctrlTechFin }}</p>
                                @endif
                                <div class="progress progress-xs bar-hide">
                                    <div class="progress-bar bg-{{$car->bgCtrl}} bar-hide-fils" style="width: {{ $car->ctrl }}%;height:100%;"></div>
                                </div>
                                @if($car->assurance<>null)
                                    <p class="hide"><strong>Expiration de l'assurance : </strong>{{ $car->assurance->assuranceFin }} </p>
                                    @endif
                                    <div class="progress progress-xs bar-hide">
                                        <div class="progress-bar bg-{{$car->bgAss}} bar-hide-fils" style="width: {{ $car->ass }}%;height:100%;"></div>
                                    </div>
                        </div>
                        <div class="col-lg-10">
                            <form class="form-document">
                                @if($car->controle<>null)
                                    <a class="btn btn-doc" href="{{ route('downloadassurance',['carId'=>$car->id]) }}" target="_blank"><i class="fa fa-download"></i> Assurance</a>
                                    @endif
                                    @if($car->assurance<>null)
                                        <a class="btn btn-doc" href="{{ route('downloadcontrole',['carId'=>$car->id]) }}" target="_blank"><i class="fa fa-download"></i> Contrôle technique</a>
                                        @endif
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <a type="button" class="btn btn-info footer-btn" href="{{route('entretiens',['carId'=>$car->id])}}">Historique</a>
                    <a type="button" class="btn btn-primary footer-btn" href="{{route('editcar',['carId'=>$car->id])}}">Modifier</a>
                    <a type="button" class="btn btn-danger footer-btn" href="{{ route('cardel',['carId'=>$car->id]) }}">Supprimer</a>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-{{$car->bgCtrl}}" style="width: {{ $car->ctrl }}%;height:100%;"></div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        @endif
        @endforeach
        <!-- row-->



        @stop

        @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('adminlte_js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.2/js/adminlte.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $('#datepicker').datepicker({
                weekStart: 1
                , daysOfWeekHighlighted: "6,0"
                , autoclose: true
                , todayHighlight: true
            , });
            $('#datepicker').datepicker("setDate", new Date());

        </script>
        <script type="text/javascript">
            $('#datepicker2').datepicker({
                weekStart: 1
                , daysOfWeekHighlighted: "6,0"
                , autoclose: true
                , todayHighlight: true
            , });
            $('#datepicker').datepicker("setDate", new Date());

        </script>
        <script>
            $('.card-btn').CardWidget('maximizeTrigger');

        </script>
        {{-- <script>
            function showOption(value) {
                $(".option").each(function(element) {
                    console.log(element);
                    if (element.hasClass(value)) {
                        element.show();
                    } else {
                        element.hide();
                    }
                })
            }

        </script>  --}}

        @stop
