{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Comptabilité</h1>
@stop

@section('adminlte_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<style>
    tfoot input {
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
    <p>Gérez la comptabilité des locations des voitures par les chauffeurs chaque semaine.</p>
    <div class="row float-right">
        <div class="col-lg-12 operations">
            <button class="btn btn-outline-secondary">Comptabiliser une location</button>
        </div>
    </div>
    <br><br>
    <div class="row">
    <div class="col-lg-12 table">
        <table id="myTable" class="display" style="width:90%">
            <thead>
                <tr>
                    <th>Nom Prénom</th>
                    <th>Matricule</th>
                    <th>Plateforme</th>
                    <th>Type de paiement</th>
                    <th>Gain</th>
                    <th>Pourboire</th>
                    <th>Bonus</th>
                    <th>avance</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>123 AJ 213</td>
                    <td>Uber</td>
                    <td>Carte</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>597 PG 836</td>
                    <td>Uber</td>
                    <td>Carte/Espèce</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>067 AA 573</td>
                    <td>Kapten</td>
                    <td>Carte/Espèce</td>
                    <td>$86,000</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Cedric Kelly</td>
                    <td>067 AA 573</td>
                    <td>Heetch</td>
                    <td>Carte/Espèce</td>
                    <td>$433,060</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Airi Satou</td>
                    <td>067 AA 573</td>
                    <td>Uber</td>
                    <td>Carte</td>
                    <td>$162,700</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Brielle Williamson</td>
                    <td>479 NG 285</td>
                    <td>Uber Specialist</td>
                    <td>Carte/Espèce</td>
                    <td>$372,000</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Herrod Chandler</td>
                    <td>959 GU 462</td>
                    <td>Heetch</td>
                    <td>Carte</td>
                    <td>$137,500</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <td>Rhona Davidson</td>
                    <td>067 AA 573</td>
                    <td>Kapten</td>
                    <td>Carte/Espèce</td>
                    <td>$327,900</td>
                    <td>$327,900</td>
                    <td>$327,900</td>
                    <td>$327,900</td>
                    <td>$327,900</td>
                </tr>
                <tr>
                    <td>Gavin Joyce</td>
                    <td>957 JE 466</td>
                    <td>Uber</td>
                    <td>Carte</td>
                    <td>$92,575</td>
                    <td>$92,575</td>
                    <td>$92,575</td>
                    <td>$92,575</td>
                    <td>$92,575</td>
                </tr>
                <tfoot>
                    <tr>
                        <th>Nom Prénom</th>
                        <th>Matricule</th>
                        <th>Plateforme</th>
                        <th>Type de paiement</th>
                        <th>Gain</th>
                        <th>Pourboire</th>
                        <th>Bonus</th>
                        <th>avance</th>
                        <th>Total</th>
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
            $('#myTable tfoot th').each( function () {
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

                $( 'input', this.footer() ).on( 'keyup change clear', function () {
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
