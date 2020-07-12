{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Plateformes</h1>
@stop

@section('adminlte_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/style1.css') }}">
<link rel="stylesheet" media="screen and (min-device-width: 576px)" href="{{ asset('css/tablet.css') }}">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/clients.css') }}">

@stop
@section('content')
<p>Consulter les plateformes partenaires.</p>
@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="row float-right">
    <div class="col-lg-12 operations">
        <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong">Ajouter une plateforme</button>
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

                        <form action="{{ url('platform/store') }} " method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="marque">Nom</label>
                                <input type="" class="form-control" name="nom" placeholder="Entrez le nom de la plateforme">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Importer un logo</label>
                                <input type="file" class="form-control-file" name="logo" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile2">Importer un contrat</label>
                                <input type="file" class="form-control-file" name="contrat" id="exampleFormControlFile2">
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

<div class="row">
    @foreach($platforms as $platform)
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header" style="background-color:{{ $platform->color }} ">
                    <h3 class="widget-user-username">{{ $platform->nom }} </h3>
                    <!--<h3 class="widget-user-desc">Founder &amp; CEO</h3>-->
                </div>
                <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="{{ asset('storage/'.$platform->logo) }}" alt="User Avatar">
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h3 class="description-header">3,200</h3>
                                <span class="description-text">Véhicules</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h3 class="description-header">130,000 €</h3>
                                <span class="description-text">Gains</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h3 class="description-header">95</h3>
                                <span class="description-text">Chauffeurs</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        </div>
    @endforeach


</div>

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
