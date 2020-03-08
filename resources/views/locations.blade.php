{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Locations</h1>
@stop

@section('adminlte_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/location.css')}}}">
<style>
    thead input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    .side_logo{
        width: 90%;
        margin-left: 4%;
        margin-top:20%;
        opacity: 0.5;
    }
</style>



@stop
@section('content')
    <p>Consulter les locations des véhicules et les chauffeurs concernés par chaque location.</p>

    <br><br>
    <div class="row">
    <div class="col-lg-12 table">
        <table id="myTable" class="display" style="width:90%">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Matricule</th>
                    <th>Date début</th>
                    <th>Date fin</th>
                    <th>Comptabiliser</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>234 KA 346</td>
                    <td>03/01/2020</td>
                    <td>04/05/2020</td>
                    <td><i class="fas fa-hand-holding-usd cpt-done"></i></td>
                </tr>
                <tr>
                    <td>Garrett</td>
                    <td>Winters</td>
                    <td>539 OB 452</td>
                    <td>04/02/2020</td>
                    <td>Jusqu'à aujourd'hui</td>
                    <td><i class="fas fa-hand-holding-usd cpt-wait"></i></td>
                </tr>
                <tr>
                    <td>Ashton</td>
                    <td>Cox</td>
                    <td>948 DK 456</td>
                    <td>15/02/2020</td>
                    <td>25/03/2020</td>
                    <td><i class="fas fa-hand-holding-usd cpt-wait"></i></td>
                </tr>
                <tr>
                    <td>Cedric</td>
                    <td>Kelly</td>
                    <td>967 UH 000</td>
                    <td>14/02/2020</td>
                    <td>Jusqu'à aujourd'hui</td>
                    <td><i class="fas fa-hand-holding-usd cpt-done"></i></td>
                </tr>
                <tr>
                    <td>Jenette</td>
                    <td>Caldwell</td>
                    <td>523 YH 356</td>
                    <td>03/01/2020</td>
                    <td>04/05/2020</td>
                    <td><i class="fas fa-hand-holding-usd cpt-done"></i></td>
                </tr>
                <tr>
                    <td>Yuri</td>
                    <td>Berry</td>
                    <td>324 KG 345</td>
                    <td>15/02/2020</td>
                    <td>Jusqu'à aujourd'hui</td>
                    <td><i class="fas fa-hand-holding-usd cpt-wait"></i></td>
                </tr>
                <tr>
                    <td>Caesar</td>
                    <td>Vance</td>
                    <td>586 LD 346</td>
                    <td>14/02/2020</td>
                    <td>29/03/2020</td>
                    <td><i class="fas fa-hand-holding-usd cpt-done"></i></td>
                </tr>
                <tr>
                    <td>Doris</td>
                    <td>Wilder</td>
                    <td>456 IH 367</td>
                    <td>Aujourd'hui</td>
                    <td>19/06/2020</td>
                    <td><i class="fas fa-hand-holding-usd cpt-done"></i></td>
                </tr>
                <tr>
                    <td>Angelica</td>
                    <td>Ramos</td>
                    <td>457 NB 467</td>
                    <td>03/03/2020</td>
                    <td>27/05/2020</td>
                    <td><i class="fas fa-hand-holding-usd cpt-done"></i></td>
                </tr>
                <tr>
                    <td>Gavin</td>
                    <td>Joyce</td>
                    <td>235 PG 346</td>
                    <td>Aujourd'hui</td>
                    <td>27/03/2020</td>
                    <td><i class="fas fa-hand-holding-usd cpt-wait"></i></td>
                </tr>
                <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Matricule</th>
                        <th>Date début</th>
                        <th>Date fin</th>
                        <th>Comptabiliser</th>
                    </tr>
                </tfoot>
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('adminlte_js')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.2/js/adminlte.min.js"></script>

    <script>
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#myTable thead th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="'+title+'" />' );
            } );

            // DataTable
            var table = $('#myTable').DataTable({
                language: {
                    processing:     "Traitement en cours...",
                    search:         "Rechercher&nbsp;:",
                    lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
                    info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix:    "",
                    loadingRecords: "Chargement en cours...",
                    zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    emptyTable:     "Aucune donnée disponible dans le tableau",
                    paginate: {
                        first:      "Premier",
                        previous:   "Pr&eacute;c&eacute;dent",
                        next:       "Suivant",
                        last:       "Dernier"
                    },
                    aria: {
                        sortAscending:  ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            });

            // Apply the search
            table.columns().every( function () {
                var that = this;

                $( 'input', this.header() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        } );
    </script>


@stop
