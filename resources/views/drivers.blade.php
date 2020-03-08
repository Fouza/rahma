{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Chauffeurs</h1>
@stop

@section('adminlte_css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/style1.css') }}">
<link rel="stylesheet" media="screen and (min-device-width: 576px)" href="{{ asset('css/tablet.css') }}">
<link rel="stylesheet" media="screen and (max-device-width: 575px)" href="{{ asset('css/mobile.css') }}">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/drivers.css') }}">


@stop
@section('content')
    <p>Consulter les chauffeurs et les états de leurs permis de conduire ainsi que les plateformes dans lesquelles ils travaillent.</p>
    <div class="row float-right">
        <div class="col-lg-12 operations">
            <button class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModalLong">Ajouter un chauffeur</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Formualire d'ajout d'un chauffeur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                              <label for="marque">Nom</label>
                              <input type="" class="form-control" id="marque" placeholder="Entrez le nom">
                            </div>
                            <div class="form-group">
                                <label for="modele">Prénom</label>
                                <input type="" class="form-control" id="modele" placeholder="Entrez le prénom">
                            </div>
                            <div class="form-group">
                                <label for="mat">E-mail</label>
                                <input type="" class="form-control" id="mat" placeholder="Entrez l'e-mail">
                            </div>
                            <div class="form-group">
                                <label for="annee">Numéro de téléphone</label>
                                <input type="text" class="form-control" id="annee" placeholder="Entrez le numéro de téléphone">
                            </div>
                            <div class="form-group">
                                <label for="capacite">Numéro de permis</label>
                                <input type="text" class="form-control" id="capacite" placeholder="Entrez le numéro de permis">
                            </div>
                            <div class="container">
                                <label for="datepicker">Entrez la date d'expiration du permis</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" id="datepicker"/>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="capacite">Adresse postale</label>
                                <input type="text" class="form-control" id="capacite" placeholder="Entrez l'adresse postale">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">Uber
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">Kapten
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">Heetch
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">Bolt
                                </label>
                              </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">Allocab
                                </label>
                              </div>
                          </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
                </div>
            </div>
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
                    <button class="btn btn-outline-secondary footer-btn" data-toggle="modal" data-target="#exampleModalLong1">Réservez une voiture</button>
                    <button type="button" class="btn btn-primary footer-btn">Modifier</button>
                    <button type="button" class="btn btn-danger footer-btn">Supprimer</button>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" style="width: 35%;height:100%;"></div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong1" style="z-index:10000" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Formualire d'ajout d'une location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label for="mat">Matricule</label>
                            <input type="" class="form-control" id="mat" placeholder="Entrez le matricule">
                        </div>
                        <div class="container">
                                <label for="datepicker1">Date début de la location</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" id="datepicker1"/>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="container">
                            <label for="datepicker2">Date fin de la location</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker2'>
                                        <input type='text' class="form-control" id="datepicker2"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Ajouter le contrat de location</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

    <script type="text/javascript">
        $('#datepicker').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker').datepicker("setDate", new Date());
    </script>
    <script type="text/javascript">
        $('#datepicker1').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker').datepicker("setDate", new Date());
    </script>
    <script type="text/javascript">
        $('#datepicker2').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker').datepicker("setDate", new Date());
    </script>
    <script>
        $('.card-btn').CardWidget('maximizeTrigger')
    </script>
@stop
