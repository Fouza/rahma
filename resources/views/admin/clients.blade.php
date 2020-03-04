{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Plateformes</h1>
@stop

@section('adminlte_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" media="screen and (min-device-width: 576px)" href="{{ asset('css/tablet.css') }}">
<link rel="stylesheet" media="screen and (max-device-width: 575px)" href="{{ asset('css/mobile.css') }}">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">


@stop
@section('content')
    <p>Consulter, ajouter ou supprimer des plateformes et voir le nombre de véhicules loués.</p>
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
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 122.133px;" aria-sort="ascending" >Nom</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 178.283px;" >Nombre de chauffeurs</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 175.017px;" >Voitures louées</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 128.467px;" >Commission à payer(€)</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 88.7667px;" >Revenues liées(€)</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 98.7667px;" >Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1">Uber</td>
                        <td>120</td>
                        <td>16</td>
                        <td>2340</td>
                        <td>12600</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">Heetch</td>
                        <td>97</td>
                        <td>26</td>
                        <td>2150</td>
                        <td>16000</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>

                    </tr>
                    <tr role="row" class="odd">
                        <td class="sorting_1">Kapten</td>
                        <td>130</td>
                        <td>30</td>
                        <td>2322</td>
                        <td>32990</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>

                    </tr>
                    <tr role="row" class="even">
                        <td class="sorting_1">Bolt</td>
                        <td>152</td>
                        <td>29</td>
                        <td>9222</td>
                        <td>43300</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>

                    </tr>
                    <tr role="row" class="odd">
                        <td class="sorting_1">Allocab</td>
                        <td>169</td>
                        <td>43</td>
                        <td>25000</td>
                        <td>544300</td>
                        <td>
                            <div class="row" >
                                <button class="btn-secondary" style="margin-left:3%">Modifier</button>
                                <button class="btn-primary" style="margin-left:3%"><i class="fas fa-info-circle"></i></button>
                            </div>
                        </td>

                    </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1">Nom</th>
                            <th rowspan="1" colspan="1">Nombre de chauffeurs</th>
                            <th rowspan="1" colspan="1">Voitures louées</th>
                            <th rowspan="1" colspan="1">Commission à payer(€)</th>
                            <th rowspan="1" colspan="1">Revenues liées(€)</th>
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
                        text: 'Ajouter une plateforme',
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
