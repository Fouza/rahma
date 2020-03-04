{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Locations</h1>
@stop

@section('adminlte_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<style>
    thead input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }

</style>

@stop
@section('content')
    <p>Consulter les locations des véhicules et les chauffeurs concernés par chaque location.</p>
    <div class="row float-right">
        <div class="col-lg-12 operations">
            <button class="btn btn-outline-secondary">Ajouter</button>
        </div>
    </div>
    <br><br>
    <div class="row">
    <div class="col-lg-12 table">
        <table id="myTable" class="display" style="width:90%">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Matricule</th>
                    <th>Date début</th>
                    <th>Date fin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>Edinburgh</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett</td>
                    <td>Winters</td>
                    <td>Tokyo</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Ashton</td>
                    <td>Cox</td>
                    <td>San Francisco</td>
                    <td>$86,000</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <td>Cedric</td>
                    <td>Kelly</td>
                    <td>Edinburgh</td>
                    <td>$433,060</td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <td>Jenette</td>
                    <td>Caldwell</td>
                    <td>New York</td>
                    <td>$345,000</td>
                    <td>$345,000</td>
                </tr>
                <tr>
                    <td>Yuri</td>
                    <td>Berry</td>
                    <td>New York</td>
                    <td>$675,000</td>
                    <td>$345,000</td>
                </tr>
                <tr>
                    <td>Caesar</td>
                    <td>Vance</td>
                    <td>New York</td>
                    <td>$106,450</td>
                    <td>$106,450</td>
                </tr>
                <tr>
                    <td>Doris</td>
                    <td>Wilder</td>
                    <td>Sydney</td>
                    <td>$85,600</td>
                    <td>$85,600</td>
                </tr>
                <tr>
                    <td>Angelica</td>
                    <td>Ramos</td>
                    <td>London</td>
                    <td>$1,200,000</td>
                    <td>$1,200,000</td>
                </tr>
                <tr>
                    <td>Gavin</td>
                    <td>Joyce</td>
                    <td>Edinburgh</td>
                    <td>$92,575</td>
                    <td>$92,575</td>
                </tr>
                <tfoot>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Matricule</th>
                        <th>Date début</th>
                        <th>Date fin</th>
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
