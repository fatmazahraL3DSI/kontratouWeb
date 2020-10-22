@extends('admin.layouts.index')
@section('content')


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
              
            </ul>
          </li>
          <li class="sub-menu">
            <a  href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Les Chambres</span>
              </a>
            <ul class="sub">
              <li><a href="{{ asset ('admin/chambre') }}">Liste des Chambres</a></li>
              <li><a href="{{ asset ('admin/add_chambre') }}">Ajouter des Chambres</a></li>
              
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
              <div class="row mt mb">
                <div class="col-lg-12">
                  <h3><i class="fa fa-tasks"></i>Liste des Promotions de l'hotel {{ Auth::user()->name}}</h3>
                  <br>
                  @if(Session::has('message'))
                 <div class="alert alert-dismissible alert-success">
                   <button type="button" class="close" data-dismiss="alert">&times;</button>
                   <strong>  {{ Session::get('message') }}</strong>
                 </div>
                 @endif
                  @foreach ($promos as $promo)
                  @if($promo->admin_id ==  Auth::user()->id)
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="dmbox">
                      <div class="service-icon">
                        <a class="" href="{{ route ('admin.promo.promo_detail',[$promo->id]) }}"><i class="dm-icon fa fa-eye fa-3x"></i></a>
                      </div>
                      <h4> {{$promo->Titre}} </h4>
                      <p>de {{$promo->date_deb}} au {{$promo->date_fin}}</p>
                      <a href="{{ route ('admin.promo.edit',[$promo->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="{{ route ('admin.promo.promo_delete',[$promo->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                    </div>
                  </div>
                  @endif
                  @endforeach
                </div>
                <!--  /col-lg-12 -->
              </div>
              <!-- /row -->
             
              <!--  /row -->
            </section>
            <!-- /wrapper -->
          @endsection





