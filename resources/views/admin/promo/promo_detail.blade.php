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
              <li class="active"><a href="{{ asset ('admin/liste_promo') }}">Liste des promotions</a></li>
              <li><a href="{{ asset ('admin/add_promo') }}">Ajouter des promotions</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              
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
            <section class="wrapper">
              <div class="col-lg-12 mt">
                <div class="row content-panel">
                  <div class="col-lg-10 col-lg-offset-1">
                    <div class="invoice-body">
                      <div class="pull-left">
                        <p><img src="{{ asset('storage/public/images/'.Auth::user()->logo) }}" class="img-circle" width="20%"></p>
                        <address>
                      <strong>{{ Auth::user()->name }}.</strong><br>
                      {{ Auth::user()->adresse }}<br>
                      {{ Auth::user()->email }}<br>
                      <abbr title="Phone">Tel:</abbr> (+216) {{ Auth::user()->tel }}
                    </address>
                      </div>
                      <!-- /pull-left -->
                      <div class="pull-right">
                        <img src="{{ asset ('img/logo.png')}}" />
                      </div>
                      <!-- /pull-right -->
                      <div class="clearfix"></div>
                      <br>
                      <br>
                      <br>
                      <div class="row">
                        <div class="col-md-9">
                          <h4>{{ Auth::user()->representant }}</h4>
                          <address>
                        <strong>{{$promo->Titre}}.</strong><br>
                        
                      </address>
                        </div>
                        <!-- /col-md-9 -->
                        <div class="col-md-3">
                          <br>
                          <div>
                            <div class="pull-left"> Debut Promotiom : </div>
                            <div class="pull-right"> {{ $promo->date_deb}}</div>
                            <div class="clearfix"></div>
                          </div>
                          <div>
                            <!-- /col-md-3 -->
                            <div class="pull-left"> fin Promotion : </div>
                            <div class="pull-right"> {{ $promo->date_fin}} </div>
                            <div class="clearfix"></div>
                          </div>
                          <!-- /row -->
                          <br>
                          <div class="well well-small green">
                            <div class="pull-left"> Prix de promotion : </div>
                            <div class="pull-right"> {{ $promo->prix}} Dt </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                        <!-- /invoice-body -->
                      </div>
                      <!-- /col-lg-10 -->
                     
                      <br>
                      <br>
                    </div>
                    <!--/col-lg-12 mt -->
            </section>
            <!-- /wrapper -->
          </section>
       
          @endsection





