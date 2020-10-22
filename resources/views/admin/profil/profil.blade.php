@extends('admin.layouts.index')
@section('content')
<li class="mt">
  <a 
  href="{{asset('admin/dashboard') }}">
    <i class="fa fa-dashboard"></i>
    <span>Dashboard</span>
    </a>
</li>
<li class="sub-menu">
  <a href="javascript:;">
    <i class="fa fa-desktop"></i>
    <span>Touts les agences </span>
  </a>
<ul class="sub">
  <li><a href="{{ asset ('admin/liste_agences_enattente') }}">En Attente</a></li>
  <li><a href="{{ asset ('admin/liste_agences_accepter') }}">Accepter</a></li>
  
</ul>
</li>
<li class="sub-menu">
  <a href="javascript:;">
    <i class="fa fa-cogs"></i>
    <span>Touts Les Contrats</span>
    </a>
  <ul class="sub">
    <li><a href="grids.html">Allotement</a></li>
    <li><a href="calendar.html">Garantie</a></li>
    <li><a href="gallery.html">Hébergement</a></li>
    <li><a href="todo_list.html">Collaboration</a></li>
    
  </ul>
</li>
<li class="sub-menu">
  <a href="javascript:;">
    <i class="fa fa-book"></i>
    <span>Les Promos</span>
    </a>
  <ul class="sub">
    <li><a href="{{ asset ('admin/liste_promo') }}">Liste des promotions</a></li>
    <li><a href="{{ asset ('admin/add_promo') }}">Ajouter des promotions</a></li>
   
  </ul>
</li>
<li class="sub-menu">
  <a  href="javascript:;">
    <i class="fa fa-tasks"></i>
    <span>Les Chambres</span>
    </a>
  <ul class="sub">
    <li><a href="{{ asset ('admin/chambre') }}">Liste des Chambres</a></li>
    <li ><a href="{{ asset ('admin/add_chambre') }}">Ajouter des Chambres</a></li>
    
  </ul>
</li>
<li class="sub-menu">
  <a  href="javascript:;">
    <i class="fa fa-th"></i>
    <span>Les Reclamations</span>
    </a>
  <ul class="sub">
    <li ><a href="{{ asset ('admin/reclamation') }}">Tout les Reclamations</a></li>
   
  </ul>
</li>

</ul>
<!-- sidebar menu end-->
</div>
</aside>
<section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row mt">
        <div class="col-lg-12">
          <div class="row content-panel">
            <div class="col-md-4 profile-text mt mb centered">
              <div class="right-divider hidden-sm hidden-xs">
                <h4>{{$a}}</h4>
                <h6>Nombre des<br/> Agences</h6>
                <h4>00,00 DT</h4>
                <h6>REVENUS</h6>
              </div>
            </div>
            <!-- /col-md-4 -->
            <div class="col-md-4 profile-text">
                <br>  <br>
              <h3>{{ Auth::user()->name }}</h3>
            </div>
            <!-- /col-md-4 -->
            <div class="col-md-4 centered">
              <div class="profile-pic">
                <p><img src="{{ asset('storage/public/images/'.Auth::user()->logo) }}" class="img-circle"></p>
                <p>      
                </p>
              </div>
            </div>
            <!-- /col-md-4 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /col-lg-12 -->
        <div class="col-lg-12 mt">
          <div class="row content-panel">
            <div class="panel-heading">
              <ul class="nav nav-tabs nav-justified">
                <li class="active">
                  <a data-toggle="tab" href="#overview">Aperçu</a>
                </li>
                <li>
                  <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
                </li>
                <li>
                  <a data-toggle="tab" href="#edit">Editer le profil</a>
                </li>
              </ul>
            </div>
            <!-- /panel-heading -->
            <div class="panel-body">
              <div class="tab-content">
                <div id="overview" class="tab-pane active">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detailed ">
                        
                        <div class="recent-activity">
                          @if(Session::has('message'))
                        <div class="alert alert-dismissible alert-success">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>  {{ Session::get('message') }}</strong>
                        </div>
                        @endif
                        </div>
                        <!-- /recent-activity -->
                      </div>
                      <!-- /detailed -->
                    </div>
                    <!-- /col-md-6 -->
                    <div class="col-md-6 detailed">
                      <!-- /row -->
                      <h4>Mes agences</h4>
                      <div class="row centered mb">
                        <ul class="my-friends">
                            @foreach ($users as $user)
                          <li>
                            <div class="friends-pic"><img class="img-circle" width="70" height="45" src="{{ asset('storage/public/images/'.$user->logo) }}"></div>
                          </li>
                          @endforeach
                        </ul>
                       
                      </div>
                      <!-- /row -->
                      <h4>Pending Tasks</h4>
                      <div class="row centered">
                        <div class="col-md-8 col-md-offset-2">
                          <h5>Dashboard Update (40%)</h5>
                          <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                              <span class="sr-only">40% Complete (success)</span>
                            </div>
                          </div>
                          <h5>Unanswered Messages (80%)</h5>
                          <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                              <span class="sr-only">80% Complete (success)</span>
                            </div>
                          </div>
                          <h5>Product Review (60%)</h5>
                          <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                              <span class="sr-only">60% Complete (success)</span>
                            </div>
                          </div>
                          <h5>Friend Requests (90%)</h5>
                          <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                              <span class="sr-only">90% Complete (success)</span>
                            </div>
                          </div>
                        </div>
                        <!-- /col-md-8 -->
                      </div>
                      <!-- /row -->
                    </div>
                    <!-- /col-md-6 -->
                  </div>
                  <!-- /OVERVIEW -->
                </div>
                <!-- /tab-pane -->
                <div id="contact" class="tab-pane">
                  <div class="row">
                    <div class="col-md-6">
                      <div id="map"></div>
                    </div>
                    <!-- /col-md-6 -->
                    <div class="col-md-6 detailed">
                      <h4>Emplacement</h4>
                      <div class="col-md-8 col-md-offset-2 mt">
                        <p>
                            <br/>
                            Adresse postale :<br/>{{ Auth::user()->adresse }}
                        </p>
                        <p>
                            <br/>
                            Représentant d'hôtel :<br/>{{ Auth::user()->representant }}
                        </p>
                      </div>
                      <h4>Contacts</h4>
                      <div class="col-md-8 col-md-offset-2 mt">
                        <p>
                          Tel: +216 {{ Auth::user()->tel }}<br/> 
                        </p>
                        <br>
                        <p>
                          Email: {{ Auth::user()->email }}<br/>
                        </p>
                      </div>
                    </div>
                    <!-- /col-md-6 -->
                  </div>
                  <!-- /row -->
                </div>
                <!-- /tab-pane -->
                <div id="edit" class="tab-pane">
                  <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 detailed">
                      <h4 class="mb">Renseignements personnels<br/><br/></h4>
                      
                      <form role="form" class="form-horizontal" action="{{ action ('AdminProfileController@update',Auth::user()->id) }}" method="GET" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label class="control-label col-md-2">logo</label>
                            <div class="col-md-6">
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                  <img src="{{ asset ('storage/public/images/'.Auth::user()->logo) }}" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                  <span class="btn btn-theme02 btn-file">
                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Sélectionnez une image</span>
                                  <span class="fileupload-exists"><i class="fa fa-undo"></i> Changement</span>
                                  <input type="file" name="logo" class="default"  />
                                  </span>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Nom D'hôtel</label>
                          <div class="col-lg-6">
                            <input type="text"  name="name" class="form-control" value="{{Auth::user()->name}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Représentant d'hôtel </label>
                          <div class="col-lg-6">
                            <input type="text"  name="representant" class="form-control" value="{{Auth::user()->representant}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Adresse</label>
                          <div class="col-lg-6">
                            <input type="text"  name="adresse" class="form-control" value="{{Auth::user()->adresse}}">
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Tél</label>
                            <div class="col-lg-6">
                              <input type="text"  name="tel" class="form-control" value="{{Auth::user()->tel}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="text" name="email" class="form-control" value="{{Auth::user()->email}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Enregistrer</button>
                            </div>
                          </div>
                      </form>
                    </div>
               
                  </div>
                  <!-- /row -->
                </div>
                <!-- /tab-pane -->
              </div>
              <!-- /tab-content -->
            </div>
            <!-- /panel-body -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </section>
    <!-- /wrapper -->
  </section>
@endsection