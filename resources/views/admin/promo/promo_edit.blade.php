@extends('admin.layouts.index')
@section('content')
@if(Session::has('message'))
<div class="alert alert-dismissible alert-success">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <strong>  {{ Session::get('message') }}</strong>
</div>
@endif

          <li class="mt">
            <a href="{{asset('admin/dashboard') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a  href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Touts les agences </span>
              </a>
            <ul class="sub">
              <li ><a href="{{ asset ('admin/liste_agences_enattente') }}">En Attente</a></li>
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
            <a class="active" href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Les Promos</span>
              </a>
            <ul class="sub">
              <li><a href="{{ asset ('admin/liste_promo') }}">Liste des promotions</a></li>
              <li class="active"><a href="{{ asset ('admin/add_promo') }}">Ajouter des promotions</a></li>
              
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
              <h3><i class="fa fa-angle-right"></i> Modifier Promotion</h3>
            
              <div class="row mt mb">
                <div class="col-lg-12">
                  <div class="form-panel">
                    <form class="form-horizontal style-form"  action="{{ action ('PromoAdminController@update',$promo->id) }}" method="PUT" enctype="multipart/form-data">
                      {{ method_field('GET') }}                      
                      <div class="form-group">
                        <label class="control-label col-md-3">Titre du Promo</label>
                        <div class="col-md-4">
                          <input size="16" type="text" name="Titre" value="{{$promo->Titre}}" class=" form-control" required>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3">Date debut du Promo</label>
                        <div class="col-md-4">
                            <input type="date" name="date_deb" class="form-control" value="{{$promo->date_deb}}" required>        
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3">Date fin du Promo</label>
                        <div class="col-md-4">
                            <input type="date" name="date_fin"class="form-control"  value="{{$promo->date_fin}}" required>
                            
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Prix du Promo</label>
                          <div class="col-md-4">
                            <input size="16" type="number" name="prix" value="{{ $promo->prix}}" class=" form-control" required>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                          <button class="btn btn-theme" type="submit">Modifier</button>
                          <a   href="{{ asset ('admin/liste_promo') }}" class="btn btn-danger" type="reset">Annuler</a>
                        </div>
                      </div>
                      </div>
                     
                      
                    </form>
                  </div>
                  <!-- /form-panel -->
                </div>
                <!-- /col-lg-12 -->
           
             
              <!-- row -->
            </section>
            <!-- /wrapper -->
          </section>
       
          @endsection





