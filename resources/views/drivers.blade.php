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
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/drivers.css') }}">


@stop
@section('content')
    <p>Consulter vos véhciules et suivez leurs états actuels : disponible ou louée.</p>
    <div class="row float-right">
        <div class="col-lg-12 operations">
            <button class="btn btn-outline-secondary">Ajouter</button>
        </div>
    </div>
    <br><br>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12 cardriver">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/profile.jpg')}}" alt="Card image cap">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 write">
                        <div class="col-lg-10">
                            <p class="shown"><strong>Oukacha Fouzi</strong></p>
                            <p class="shown">gf_oukacha@esi.dz</p>
                            <p class="shown">+213556530464</p>
                            <p class="hide"><strong>Numéro de permis : </strong>6463636575</p>
                            <p class="hide"><strong>Adresse postal : </strong> 16 000 </p>
                        </div>
                        <div class="col-lg-10 col-sm-8 col-xs-8">
                            <p class="hide"><strong>Date d'expiration du permis : </strong>2020-05-20</p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-danger bar-hide-fils" style="width: 35%;height:100%;"></div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                                    <img src="{{asset('img/uber.png')}}" class="logos" >
                                    <img src="{{asset('img/kapten.png')}}" class="logos">
                                    <img src="{{asset('img/heetch.png')}}" class="logos">
                                    <img src="{{asset('img/bolt.gif')}}" class="logos" style="border-radius: 50%;
                                    border-width: 4px;
                                    border-style: outset;
                                    border-color: #7CFC00 !important;">
                                    <img src="{{asset('img/allocab.png')}}" class="logos">
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" class="btn btn-primary footer-btn">Modifier</button>
                    <button type="button" class="btn btn-danger footer-btn">Supprimer</button>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" style="width: 35%;height:100%;"></div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12 cardriver">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/profile.jpg')}}" alt="Card image cap">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 write">
                        <div class="col-lg-10">
                            <p class="shown"><strong>Oukacha Fouzi</strong></p>
                            <p class="shown">gf_oukacha@esi.dz</p>
                            <p class="shown">+213556530464</p>
                            <p class="hide"><strong>Numéro de permis : </strong>6463636575</p>
                            <p class="hide"><strong>Adresse postal : </strong> 16 000 </p>
                        </div>
                        <div class="col-lg-10 col-sm-8 col-xs-8">
                            <p class="hide"><strong>Date d'expiration du permis : </strong>2020-05-20</p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-danger bar-hide-fils" style="width: 35%;height:100%;"></div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                                    <img src="{{asset('img/uber.png')}}" class="logos" >
                                    <img src="{{asset('img/kapten.png')}}" class="logos">
                                    <img src="{{asset('img/heetch.png')}}" class="logos">
                                    <img src="{{asset('img/bolt.gif')}}" class="logos" style="border-radius: 50%;
                                    border-width: 4px;
                                    border-style: outset;
                                    border-color: #7CFC00 !important;">
                                    <img src="{{asset('img/allocab.png')}}" class="logos">
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" class="btn btn-primary footer-btn">Modifier</button>
                    <button type="button" class="btn btn-danger footer-btn">Supprimer</button>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" style="width: 35%;height:100%;"></div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12 cardriver">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/profile.jpg')}}" alt="Card image cap">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 write">
                        <div class="col-lg-10">
                            <p class="shown"><strong>Oukacha Fouzi</strong></p>
                            <p class="shown">gf_oukacha@esi.dz</p>
                            <p class="shown">+213556530464</p>
                            <p class="hide"><strong>Numéro de permis : </strong>6463636575</p>
                            <p class="hide"><strong>Adresse postal : </strong> 16 000 </p>
                        </div>
                        <div class="col-lg-10 col-sm-8 col-xs-8">
                            <p class="hide"><strong>Date d'expiration du permis : </strong>2020-05-20</p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-danger bar-hide-fils" style="width: 35%;height:100%;"></div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                                    <img src="{{asset('img/uber.png')}}" class="logos" >
                                    <img src="{{asset('img/kapten.png')}}" class="logos">
                                    <img src="{{asset('img/heetch.png')}}" class="logos">
                                    <img src="{{asset('img/bolt.gif')}}" class="logos" style="border-radius: 50%;
                                    border-width: 4px;
                                    border-style: outset;
                                    border-color: #7CFC00 !important;">
                                    <img src="{{asset('img/allocab.png')}}" class="logos">
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" class="btn btn-primary footer-btn">Modifier</button>
                    <button type="button" class="btn btn-danger footer-btn">Supprimer</button>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" style="width: 35%;height:100%;"></div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12 cardriver">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/profile.jpg')}}" alt="Card image cap">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 write">
                        <div class="col-lg-10">
                            <p class="shown"><strong>Oukacha Fouzi</strong></p>
                            <p class="shown">gf_oukacha@esi.dz</p>
                            <p class="shown">+213556530464</p>
                            <p class="hide"><strong>Numéro de permis : </strong>6463636575</p>
                            <p class="hide"><strong>Adresse postal : </strong> 16 000 </p>
                        </div>
                        <div class="col-lg-10 col-sm-8 col-xs-8">
                            <p class="hide"><strong>Date d'expiration du permis : </strong>2020-05-20</p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-danger bar-hide-fils" style="width: 35%;height:100%;"></div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                                    <img src="{{asset('img/uber.png')}}" class="logos" >
                                    <img src="{{asset('img/kapten.png')}}" class="logos">
                                    <img src="{{asset('img/heetch.png')}}" class="logos">
                                    <img src="{{asset('img/bolt.gif')}}" class="logos" style="border-radius: 50%;
                                    border-width: 4px;
                                    border-style: outset;
                                    border-color: #7CFC00 !important;">
                                    <img src="{{asset('img/allocab.png')}}" class="logos">
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" class="btn btn-primary footer-btn">Modifier</button>
                    <button type="button" class="btn btn-danger footer-btn">Supprimer</button>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" style="width: 35%;height:100%;"></div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12 cardriver">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/profile.jpg')}}" alt="Card image cap">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 write">
                        <div class="col-lg-10">
                            <p class="shown"><strong>Oukacha Fouzi</strong></p>
                            <p class="shown">gf_oukacha@esi.dz</p>
                            <p class="shown">+213556530464</p>
                            <p class="hide"><strong>Numéro de permis : </strong>6463636575</p>
                            <p class="hide"><strong>Adresse postal : </strong> 16 000 </p>
                        </div>
                        <div class="col-lg-10 col-sm-8 col-xs-8">
                            <p class="hide"><strong>Date d'expiration du permis : </strong>2020-05-20</p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-danger bar-hide-fils" style="width: 35%;height:100%;"></div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                                    <img src="{{asset('img/uber.png')}}" class="logos" >
                                    <img src="{{asset('img/kapten.png')}}" class="logos">
                                    <img src="{{asset('img/heetch.png')}}" class="logos">
                                    <img src="{{asset('img/bolt.gif')}}" class="logos" style="border-radius: 50%;
                                    border-width: 4px;
                                    border-style: outset;
                                    border-color: #7CFC00 !important;">
                                    <img src="{{asset('img/allocab.png')}}" class="logos">
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" class="btn btn-primary footer-btn">Modifier</button>
                    <button type="button" class="btn btn-danger footer-btn">Supprimer</button>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" style="width: 35%;height:100%;"></div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12 cardriver">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/profile.jpg')}}" alt="Card image cap">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 write">
                        <div class="col-lg-10">
                            <p class="shown"><strong>Oukacha Fouzi</strong></p>
                            <p class="shown">gf_oukacha@esi.dz</p>
                            <p class="shown">+213556530464</p>
                            <p class="hide"><strong>Numéro de permis : </strong>6463636575</p>
                            <p class="hide"><strong>Adresse postal : </strong> 16 000 </p>
                        </div>
                        <div class="col-lg-10 col-sm-8 col-xs-8">
                            <p class="hide"><strong>Date d'expiration du permis : </strong>2020-05-20</p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-danger bar-hide-fils" style="width: 35%;height:100%;"></div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                                    <img src="{{asset('img/uber.png')}}" class="logos" >
                                    <img src="{{asset('img/kapten.png')}}" class="logos">
                                    <img src="{{asset('img/heetch.png')}}" class="logos">
                                    <img src="{{asset('img/bolt.gif')}}" class="logos" style="border-radius: 50%;
                                    border-width: 4px;
                                    border-style: outset;
                                    border-color: #7CFC00 !important;">
                                    <img src="{{asset('img/allocab.png')}}" class="logos">
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" class="btn btn-primary footer-btn">Modifier</button>
                    <button type="button" class="btn btn-danger footer-btn">Supprimer</button>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" style="width: 35%;height:100%;"></div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12 cardriver">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/profile.jpg')}}" alt="Card image cap">
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 write">
                        <div class="col-lg-10">
                            <p class="shown"><strong>Oukacha Fouzi</strong></p>
                            <p class="shown">gf_oukacha@esi.dz</p>
                            <p class="shown">+213556530464</p>
                            <p class="hide"><strong>Numéro de permis : </strong>6463636575</p>
                            <p class="hide"><strong>Adresse postal : </strong> 16 000 </p>
                        </div>
                        <div class="col-lg-10 col-sm-8 col-xs-8">
                            <p class="hide"><strong>Date d'expiration du permis : </strong>2020-05-20</p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-danger bar-hide-fils" style="width: 35%;height:100%;"></div>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                                    <img src="{{asset('img/uber.png')}}" class="logos" >
                                    <img src="{{asset('img/kapten.png')}}" class="logos">
                                    <img src="{{asset('img/heetch.png')}}" class="logos">
                                    <img src="{{asset('img/bolt.gif')}}" class="logos" style="border-radius: 50%;
                                    border-width: 4px;
                                    border-style: outset;
                                    border-color: #7CFC00 !important;">
                                    <img src="{{asset('img/allocab.png')}}" class="logos">
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" class="btn btn-primary footer-btn">Modifier</button>
                    <button type="button" class="btn btn-danger footer-btn">Supprimer</button>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" style="width: 35%;height:100%;"></div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
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
