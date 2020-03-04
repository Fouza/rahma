{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Véhicules</h1>
@stop

@section('adminlte_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" media="screen and (min-device-width: 576px)" href="{{ asset('css/tablet.css') }}">
<link rel="stylesheet" media="screen and (max-device-width: 575px)" href="{{ asset('css/mobile.css') }}">



@stop
@section('content')
    <p>Consulter vos véhciules et suivez leurs états actuels : disponible ou louée.</p>
    <br><br><br>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des véhicules.</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 142.133px;" aria-sort="ascending">Modèle</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 158.283px;" >Marque</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.017px;" >Matricule</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 128.467px;" >Prix/jour(€)</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 88.7667px;" >Etat</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 98.7667px;" >Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1">Model1</td>
                        <td>Alfa Romeo</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.7</td>
                        <td>En cours de location</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">Model2</td>
                        <td>Alfa Romeo</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>Disponible</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="sorting_1">Model1</td>
                        <td>Audi</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>En cours de location</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">Model2</td>
                        <td>Bentley</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td>1.9</td>
                        <td>Disponible</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="sorting_1">Model4</td>
                        <td>Citroen</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td>En cours de location</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">Model5</td>
                        <td>Audi</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td>En cours de location</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="sorting_1">Model4</td>
                        <td>Alfa Romeo</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td>1.7</td>
                        <td>En cours de location</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">Model3</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td>1.7</td>
                        <td>En cours de location</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr role="row" class="odd">
                        <td class="sorting_1">Model3</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>Disponible</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">Model1</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td>En cours de location</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                        <tr><th rowspan="1" colspan="1">Modèle</th>
                            <th rowspan="1" colspan="1">Marque</th>
                            <th rowspan="1" colspan="1">Matricule</th>
                            <th rowspan="1" colspan="1">Prix/jour(€)</th>
                            <th rowspan="1" colspan="1">Etat</th>
                            <th rowspan="1" colspan="1">Actions</th>
                        </tr>
                    </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('adminlte_js')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.js"></script>


    <script>
        $(document).ready( function () {
            $('#example1').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        text: 'Ajouter un véhicule',
                        className: 'btn btn-primary',
                        action: function ( e, dt, node, config ) {
                            alert( 'Button activated' );
                        }
                    }
                ],
                "language": {
                    "lengthMenu": "Afficher _MENU_ véhicules par page",
                    "zeroRecords": "Aucune résultat",
                    "info": "Afficher la page numéro _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucun véhicule"
                    //"infoFiltered": "(filtered from _MAX_ total records)"
                }
            });
        } );
    </script>
@stop
