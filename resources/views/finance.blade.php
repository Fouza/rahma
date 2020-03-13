{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Finances</h1>
@stop

@section('adminlte_css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/style2.css') }}">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">

@stop
@section('content')
<p>Consulter les trésoreries de la société ainsi que les partnaires et leurs évolutions chaque semaine.</p>
<div class="row">
    <div class="col-md-6">
        <!-- Widget: user widget style 2 -->
        <div class="card card-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg">
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username"><strong>Trésorerie de Nabil</strong></h3>
          </div>
          <div class="card-footer p-0">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Voitures <span class="float-right badge bg-primary">120</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Solde actuel <span class="float-right badge bg-info">90</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Chiffre semaine dernière <span class="float-right badge bg-success">1200$</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Chiffre mois dernier <span class="float-right badge bg-danger">84200$</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.widget-user -->
      </div>

      <div class="col-md-6">
        <!-- Widget: user widget style 2 -->
        <div class="card card-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg">
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username"><strong>Trésorerie de Nazih</strong></h3>
          </div>
          <div class="card-footer p-0">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Voitures <span class="float-right badge bg-primary">120</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Solde actuel <span class="float-right badge bg-info">90</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Chiffre semaine dernière <span class="float-right badge bg-success">1200$</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Chiffre mois dernier <span class="float-right badge bg-danger">84200$</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.widget-user -->
      </div>

</div>
<div class="row">
      <div class="col-md-6">
        <!-- Widget: user widget style 2 -->
        <div class="card card-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg">
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username"><strong>La Société</strong></h3>
          </div>
          <div class="card-footer p-0">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Voitures <span class="float-right badge bg-primary">240</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Solde actuel <span class="float-right badge bg-info">180</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Chiffre semaine dernière <span class="float-right badge bg-success">2400$</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Chiffre mois dernier <span class="float-right badge bg-danger">168400$</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
</div>
<br><br><br><br><br>
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
