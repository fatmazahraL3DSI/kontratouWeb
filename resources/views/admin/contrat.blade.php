@extends('admin.layouts.index')
@section('content')
<li class="mt">
  <a  href="{{asset('admin/dashboard') }}">
    <i class="fa fa-dashboard"></i>
    <span>Dashboard</span>
    </a>
</li>
<li class="sub-menu">
  <a class="active" href="javascript:;">
    <i class="fa fa-desktop"></i>
    <span>Touts les agences </span>
              </a>
            <ul class="sub">
              <li><a href="{{ asset ('admin/liste_agences_enattente') }}">En Attente</a></li>
              <li  class="active"><a href="{{ asset ('admin/liste_agences_accepter') }}">Accepter</a></li>
              
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
<div class="row mt mb">
  <div class="col-md-12">
    <section class="task-panel tasks-widget">
      <div class="panel-heading">
        <div class="pull-left">
          <h5><i class="fa fa-tasks"></i> Liste des Agences Accepter</h5>
        </div>
        <br>
      </div>
      <div class="panel-body">
        <div class="task-content">
          <ul id="sortable" class="task-list">
            @foreach ($users as $user)
            @if($user->demande == "vrais")
            <li class="list-primary">
              <i class=" fa fa-ellipsis-v"></i>
             
              <div class="task-title">
                <span class="task-title-sp"><img src="{{ asset('storage/public/images/'.$user->logo) }}" class="img-circle"  width="3%"></span>
                <span class="task-title-sp">{{$user->name}}</span>
                <div class="pull-right hidden-phone">
                  
                  
                 
                </div>
              </div>
             
            </li> 
            @endif
            @endforeach
          </ul>
        </div>
        
      </div>
    </section>
  </div>
</div>
</section>
</section>
 

@endsection