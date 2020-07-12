{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Entretiens</h1>
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

    .side_logo {
        width: 90%;
        margin-left: 4%;
        margin-top: 20%;
        opacity: 0.5;
    }

</style>

@stop
@section('content')
<div class="row">
    <div class="col-lg-6 ouf">
        <p>Historique des entretiens de la voiture <strong>{{ $car->marque }} {{ $car->model }} (Bleu)</strong></p>
        <p>ayant le matricule {{ $car->matricule }} </p>
        <p><strong>Année de circulation : </strong> {{ $car->year }} </p>
        <p><strong>Capacité : </strong> {{ $car->capacite }} </p>
        <p><strong>Propriétaire : </strong>{{ $car->partner->prenom }} </p>
        @if($car->etat == 'En cours de location')
        <p class="hide"><strong>En cours de location depuis : </strong> {{ $car->location->dateDebut }} par {{ $car->driver }}</p>
        @endif
        @if($car->etat == 'Disponible' && $car->location <> null)
            <p class="hide"><strong>Dernière location depuis : </strong> {{ $car->location->dateFin }} par {{ $car->driver }}</p>
            @endif
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <img class="entretien-img float-right" src="{{asset('storage/'.$car->photo)}}" alt="Card image cap">
    </div>
</div>
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
                    <th>Date de l'entretien</th>
                    <th>Kilométrage</th>
                    <th>Commentaire</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entretiens as $entretien)
                <tr>
                    <td>{{ $entretien->date }} </td>
                    <td>{{ $entretien->kilometrage }} </td>
                    <td>{{ $entretien->commentaire }} </td>
                </tr>
                @endforeach

            <tfoot>
                <tr>
                    <th>Date de l'entretien</th>
                    <th>Kilométrage</th>
                    <th>Commentaire</th>
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
        $('#myTable thead th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="' + title + '" />');
        });

        // DataTable
        var table = $('#myTable').DataTable({
            language: {
                processing: "Traitement en cours..."
                , search: "Rechercher&nbsp;:"
                , lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments"
                , info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments"
                , infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments"
                , infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)"
                , infoPostFix: ""
                , loadingRecords: "Chargement en cours..."
                , zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher"
                , emptyTable: "Aucune donnée disponible dans le tableau"
                , paginate: {
                    first: "Premier"
                    , previous: "Pr&eacute;c&eacute;dent"
                    , next: "Suivant"
                    , last: "Dernier"
                }
                , aria: {
                    sortAscending: ": activer pour trier la colonne par ordre croissant"
                    , sortDescending: ": activer pour trier la colonne par ordre décroissant"
                }
            }
        });

        // Apply the search
        table.columns().every(function() {
            var that = this;

            $('input', this.header()).on('keyup change clear', function() {
                if (that.search() !== this.value) {
                    that
                        .search(this.value)
                        .draw();
                }
            });
        });
    });

</script>


@stop
