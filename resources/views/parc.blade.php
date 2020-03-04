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
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 cardbox">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-9 col-sm-9 col-md-9">
                        <span class="badge bg-warning">En cours de location</span>
                    </div>
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/v1.jpg')}}" alt="Card image cap">
                    </div>

                    <div class="col-lg-6 col-md-5 col-sm-6 col-xs-6 write">
                        <div class="col-lg-10">
                            <p class="shown"><strong>Volkswagen Passat (Bleu)</strong></p>
                            <p class="shown">EK-187-MT</p>
                            <p class="hide"><strong>Année de circulation : </strong>2017</p>
                            <p class="hide"><strong>Capacité : </strong> 6 </p>
                            <p class="hide"><strong>Propriétaire : </strong>Nabil</p>
                            <p class="hide"><strong>En cours de location depuis : </strong> 2020-02-02 par Amar Karim</p>

                        </div>
                        <div class="col-lg-10">
                            <p class="hide"><strong>Expiration du contrôle technique : </strong>2020-05-20</p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-success bar-hide-fils" style="width: 65%;height:100%;"></div>
                            </div>
                            <p class="hide"><strong>Expiration de l'assurance : </strong>2020-03-19</p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-danger bar-hide-fils" style="width: 35%;height:100%;"></div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                                <form class="form-document">
                                    <!--<div class="file btn btn-sm btn-outline-dark btn-document">
                                        Télécharger contrôle technique
                                        <input type="file" name="file"/>
                                    </div>
                                    <div class="file btn btn-sm btn-outline-dark btn-document">
                                        Télécharger carte verte
                                        <input type="file" name="file"/>
                                    </div>-->
                                    <!--<div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Contrôle technique</label>
                                      </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Carte verte</label>
                                    </div>-->
                                    <button class="btn btn-doc"><i class="fa fa-download"></i> Assurance</button>
                                    <button class="btn btn-doc"><i class="fa fa-download"></i> Contrôle technique</button>
                                    <!--<div class="sub btn btn-sm btn-dark btn-document float-right">
                                        Enregistrer
                                        <input type="submit" name="file"/>
                                    </div>-->
                                </form>
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->

                <div class="card-footer">
                <a type="button" class="btn btn-info footer-btn" href="{{url("parc/entretiens")}}">Historique</a>
                    <button type="button" class="btn btn-primary footer-btn">Modifier</button>
                    <button type="button" class="btn btn-danger footer-btn">Supprimer</button>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" style="width: 35%;height:100%;"></div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 cardbox">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-9 col-sm-9 col-md-9">
                        <span class="badge bg-danger">Vendue</span>
                    </div>
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/v1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 write">
                        <div class="col-lg-8">
                            <p class="shown"><strong>Peugeot 508 (Noir)</strong> </p>
                            <p class="shown">AA-165-QQ</p>
                            <p><strong>Année : </strong>2018</p>
                            <p><strong>Vendue à : </strong>2019-12-25 par Oukacha Fouzi</p>
                        </div>
                        <div class="col-lg-8">
                            <p><strong>Expiration du contrôle technique : </strong></p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-success bar-hide-fils" style="width: 75%;height:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="progress progress-xs bar-hide">
                            <div class="progress-bar bg-danger bar-hide-fils" style="width: 15%;height:100%;"></div>
                        </div>
                    </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- card -->

        <!-- card -->
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4 cardbox">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-9 col-sm-9 col-md-9">
                        <span class="badge bg-success">Disponible</span>
                    </div>
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/v1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 write">
                        <div class="col-lg-8">
                            <p class="shown"><strong>Citroen DS5 (Bleu)</strong> </p>
                            <p class="shown">CZ-256-FS</p>
                            <p><strong>Année : </strong>2016</p>
                            <p><strong>Dernière location : </strong>2020-02-20 par Amar Karim</p>
                        </div>
                        <div class="col-lg-8">
                            <p><strong>Expiration du contrôle technique : </strong></p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-success bar-hide-fils" style="width: 85%;height:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="progress progress-xs bar-hide">
                            <div class="progress-bar bg-success bar-hide-fils" style="width: 85%;height:100%;"></div>
                        </div>
                    </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- row-->

    <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-sm-4 col-md-4 cardbox">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-9 col-sm-9 col-md-9">
                        <span class="badge bg-warning">En cours de location</span>
                    </div>
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/v1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 write">
                        <div class="col-lg-8">
                            <p class="shown"><strong>Volkswagen Passat (Bleu)</strong> </p>
                            <p class="shown">EK-187-MT</p>
                            <p><strong>Année : </strong>2017</p>
                            <p><strong>En cours de location depuis : </strong> 2020-02-02 par Amar Karim</p>

                        </div>
                        <div class="col-lg-8">
                            <p><strong>Expiration du contrôle technique:</strong></p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-success bar-hide-fils" style="width: 35%;height:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="progress progress-xs bar-hide">
                            <div class="progress-bar bg-warning bar-hide-fils" style="width: 60%;height:100%;"></div>
                        </div>
                    </div>
            </div>
            <!-- /.card -->
        </div>

        <div class="col-lg-4 col-sm-4 col-md-4 cardbox">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-9 col-sm-9 col-md-9">
                        <span class="badge bg-warning">En cours de location</span>
                    </div>
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/v1.jpg')}}" alt="Card image cap">
                    </div>

                    <div class="col-lg-6 col-md-5 col-sm-6 col-xs-6 write">
                        <div class="col-lg-10">
                            <p class="shown"><strong>Volkswagen Passat (Bleu)</strong></p>
                            <p class="shown">EK-187-MT</p>
                            <p class="hide"><strong>Année de circulation : </strong>2017</p>
                            <p class="hide"><strong>Capacité : </strong> 6 </p>
                            <p class="hide"><strong>Propriétaire : </strong>Nabil</p>
                            <p class="hide"><strong>En cours de location depuis : </strong> 2020-02-02 par Amar Karim</p>

                        </div>
                        <div class="col-lg-10">
                            <p class="hide"><strong>Expiration du contrôle technique : </strong>2020-05-20</p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-success bar-hide-fils" style="width: 65%;height:100%;"></div>
                            </div>
                            <p class="hide"><strong>Expiration de l'assurance : </strong>2020-03-19</p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-danger bar-hide-fils" style="width: 35%;height:100%;"></div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                                <form class="form-document">
                                    <!--<div class="file btn btn-sm btn-outline-dark btn-document">
                                        Télécharger contrôle technique
                                        <input type="file" name="file"/>
                                    </div>
                                    <div class="file btn btn-sm btn-outline-dark btn-document">
                                        Télécharger carte verte
                                        <input type="file" name="file"/>
                                    </div>-->
                                    <!--<div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Contrôle technique</label>
                                      </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Carte verte</label>
                                    </div>-->
                                    <button class="btn btn-doc"><i class="fa fa-download"></i> Assurance</button>
                                    <button class="btn btn-doc"><i class="fa fa-download"></i> Contrôle technique</button>
                                    <!--<div class="sub btn btn-sm btn-dark btn-document float-right">
                                        Enregistrer
                                        <input type="submit" name="file"/>
                                    </div>-->
                                </form>
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->

                <div class="card-footer">
                    <button type="button" class="btn btn-info footer-btn">Historique</button>
                    <button type="button" class="btn btn-primary footer-btn">Modifier</button>
                    <button type="button" class="btn btn-danger footer-btn">Supprimer</button>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- card -->

        <!-- card -->
        <div class="col-lg-4 col-sm-4 col-md-4 cardbox">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-9 col-sm-9 col-md-9">
                        <span class="badge bg-success">Disponible</span>
                    </div>
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/v1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 write">
                        <div class="col-lg-8">
                            <p class="shown"><strong>Citroen DS5 (Bleu)</strong> </p>
                            <p class="shown">CZ-256-FS</p>
                            <p><strong>Année : </strong>2016</p>
                            <p><strong>Dernière location : </strong>2020-02-20 par Amar Karim</p>
                        </div>
                        <div class="col-lg-8">
                            <p><strong>Expiration du contrôle technique : </strong></p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-success bar-hide-fils" style="width: 70%;height:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="progress progress-xs bar-hide">
                            <div class="progress-bar bg-success bar-hide-fils" style="width: 99%;height:100%;"></div>
                        </div>
                    </div>
            </div>
            <!-- /.card -->
        </div>
    </div>


    <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-sm-4 col-md-4 cardbox">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-9 col-sm-9 col-md-9">
                        <span class="badge bg-warning">En cours de location</span>
                    </div>
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-6 col-md-6 col-sm-6 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/v1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 write">
                        <div class="col-lg-8">
                            <p class="shown"><strong>Volkswagen Passat (Bleu)</strong> </p>
                            <p class="shown">EK-187-MT</p>
                            <p><strong>Année : </strong>2017</p>
                            <p><strong>En cours de location depuis : </strong> 2020-02-02 par Amar Karim</p>

                        </div>
                        <div class="col-lg-8">
                            <p><strong>Expiration du contrôle technique:</strong></p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-success bar-hide-fils" style="width: 35%;height:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="progress progress-xs bar-hide">
                            <div class="progress-bar bg-warning bar-hide-fils" style="width: 45%;height:100%;"></div>
                        </div>
                    </div>
            </div>
            <!-- /.card -->
        </div>

        <div class="col-lg-4 col-sm-4 col-md-4 cardbox">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-9 col-sm-9 col-md-9">
                        <span class="badge bg-danger">Vendue</span>
                    </div>
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-6 col-md-6 col-sm-6 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/v1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 write">
                        <div class="col-lg-8">
                            <p class="shown"><strong>Peugeot 508 (Noir)</strong> </p>
                            <p class="shown">AA-165-QQ</p>
                            <p><strong>Année : </strong>2018</p>
                            <p><strong>Vendue à : </strong>2019-12-25 par Oukacha Fouzi</p>
                        </div>
                        <div class="col-lg-8">
                            <p><strong>Expiration du contrôle technique : </strong></p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-warning bar-hide-fils" style="width: 75%;height:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="progress progress-xs bar-hide">
                            <div class="progress-bar bg-warning bar-hide-fils" style="width: 50%;height:100%;"></div>
                        </div>
                    </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- card -->

        <!-- card -->
        <div class="col-lg-4 col-sm-4 col-md-4 cardbox">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-9 col-sm-9 col-md-9">
                        <span class="badge bg-success">Disponible</span>
                    </div>
                    <div class="card-tools col-md-3 col-lg-3 col-sm-3">
                        <!-- Maximize Button -->
                        <button type="button" class="btn btn-tool" data-card-widget="maximize" data-animation-speed="3000"><i class="fas fa-expand"></i></button>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body row">
                    <div class="col-lg-6 col-md-6 col-sm-6 body-imp">
                        <img class="card-img-top card-image" src="{{asset('img/v1.jpg')}}" alt="Card image cap">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 write">
                        <div class="col-lg-8">
                            <p class="shown"><strong>Citroen DS5 (Bleu)</strong> </p>
                            <p class="shown">CZ-256-FS</p>
                            <p><strong>Année : </strong>2016</p>
                            <p><strong>Dernière location : </strong>2020-02-20 par Amar Karim</p>
                        </div>
                        <div class="col-lg-8">
                            <p><strong>Expiration du contrôle technique : </strong></p>
                            <div class="progress progress-xs bar-hide">
                                <div class="progress-bar bg-danger bar-hide-fils" style="width: 85%;height:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="progress progress-xs bar-hide">
                            <div class="progress-bar bg-success bar-hide-fils" style="width: 65%;height:100%;"></div>
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
