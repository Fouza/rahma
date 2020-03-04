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
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/clients.css') }}">

@stop
@section('content')
    <p>Consulter les plateformes partenaires.</p>
    <div class="row float-right">
        <div class="col-lg-12 operations">
            <button class="btn btn-outline-secondary">Ajouter</button>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-dark">
                <h3 class="widget-user-username">Uber</h3>
                <!--<h3 class="widget-user-desc">Founder &amp; CEO</h3>-->
                </div>
                <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ asset('img/uber.png') }}" alt="User Avatar">
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

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">Kapten</h3>
                <!--<h3 class="widget-user-desc">Founder &amp; CEO</h3>-->
                </div>
                <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ asset('img/kapten.png') }}" alt="User Avatar">
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
                        <h3 class="description-header">13,000</h3>
                        <span class="description-text">GAINS</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                    <div class="description-block">
                        <h3 class="description-header">35</h3>
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

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-danger">
                <h3 class="widget-user-username">Heetch</h3>
                <!--<h3 class="widget-user-desc">Founder &amp; CEO</h3>-->
                </div>
                <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ asset('img/heetch.png') }}" alt="User Avatar">
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
                        <h3 class="description-header">13,000</h3>
                        <span class="description-text">GAINS</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                    <div class="description-block">
                        <h3 class="description-header">35</h3>
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

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-success">
                <h3 class="widget-user-username">Bolt</h3>
                </div>
                <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ asset('img/bolt.png') }}" alt="User Avatar">
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
                        <h3 class="description-header">13,000</h3>
                        <span class="description-text">GAINS</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                    <div class="description-block">
                        <h3 class="description-header">35</h3>
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

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-warning">
                <h3 class="widget-user-username">Bolt</h3>
                </div>
                <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ asset('img/allocab.png') }}" alt="User Avatar">
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
                        <h3 class="description-header">13,000</h3>
                        <span class="description-text">GAINS</span>
                    </div>
                    <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                    <div class="description-block">
                        <h3 class="description-header">35</h3>
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
