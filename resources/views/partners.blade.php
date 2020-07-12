{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('adminlte_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">

@stop
@section('content')
    <div class="col-lg-12 operations">
        <button class="btn btn-outline-secondary float-right" data-toggle="modal" data-target="#exampleModalLong">Ajouter un partenaire</button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Formualire d'ajout d'une plateforme</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                <form>
                    <div class="form-group">
                        <label for="marque">Nom</label>
                        <input type="" class="form-control" id="marque" placeholder="Entrez le nom de la plateforme">
                    </div>
                    <div class="form-group">
                        <label for="marque">Prénom</label>
                        <input type="" class="form-control" id="marque" placeholder="Entrez le nom de la plateforme">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="marque">N° Téléphone</label>
                        <input type="" class="form-control" id="marque" placeholder="Entrez le nom de la plateforme">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    <h1>Les propriétaires</h1>
    @foreach($partners1 as $partner)
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">{{ $partner->nom. ' ' .$partner->prenom }} </h3>
                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        Propriétaire de <strong>{{ $partner->nbCars }} véhicules</strong> <br>
                        <strong>{{ $partner->nbLoue }}</strong> sont en cours de location
                        <br>

                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    @endforeach
    <br><br>
    <h1>Partenaires externes</h1>
    @foreach($partners2 as $partner)
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $partner->nom. ' ' . $partner->prenom }}</h3>

                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        Propriétaire de <strong>{{ $partner->nbCars }} véhicules</strong> <br>
                        <strong>{{ $partner->nbLoue }}</strong> sont en cours de location <br>
                        Date d'adhésion : {{ $partner->adhesion }}
                        <br>
                        <strong>Email : </strong>{{ $partner->email }}
                        <br>
                        <strong>N°Téléphone : </strong>{{ $partner->phone }}
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    @endforeach
    <br><br><br>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('adminlte_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.2/js/adminlte.min.js"></script>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        </script>

    <script>
        $('.card-btn').CardWidget('maximizeTrigger')
    </script>
@stop
