@extends('layouts.app')

@section('content')
<li class="mt">
    <a href="{{asset('dashboard') }}">
      <i class="fa fa-dashboard"></i>
      <span>Dashboard</span>
      </a>
  </li>
  <li class="sub-menu">
    <a  class="active" href="javascript:;">
      <i class="fa fa-desktop"></i>
      <span>Hôtel</span>
      </a>
    <ul class="sub">
      <li  class="active"><a href="{{ asset ('list') }}">Général</a></li>
      <li><a href="buttons.html">Contrat</a></li>
      <li><a href="panels.html">Promos</a></li>
      <li><a href="font_awesome.html">Point</a></li>
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
      <li><a href="blank.html">Blank Page</a></li>
      <li><a href="login.html">Login</a></li>
      <li><a href="lock_screen.html">Lock Screen</a></li>
      <li><a href="profile.html">Profile</a></li>
      <li><a href="invoice.html">Invoice</a></li>
      <li><a href="pricing_table.html">Pricing Table</a></li>
      <li><a href="faq.html">FAQ</a></li>
      <li><a href="404.html">404 Error</a></li>
      <li><a href="500.html">500 Error</a></li>
    </ul>
  </li>
  <li class="sub-menu">
    <a href="javascript:;">
      <i class="fa fa-tasks"></i>
      <span>Les Chambres</span>
      </a>
    <ul class="sub">
      <li><a href="form_component.html">Form Components</a></li>
      <li><a href="advanced_form_components.html">Advanced Components</a></li>
      <li><a href="form_validation.html">Form Validation</a></li>
      <li><a href="contactform.html">Contact Form</a></li>
    </ul>
  </li>
  <li class="sub-menu">
    <a href="javascript:;">
      <i class="fa fa-th"></i>
      <span>Les Reclamations</span>
      </a>
    <ul class="sub">
      <li><a href="/reclamation">Historique Reclamation</a></li>
      <li><a href="/add_reclamation">Ajouter Reclamation</a></li>
    </ul>
  </li>
  <li>
    <a href="google_maps.html">
      <i class="fa fa-map-marker"></i>
      <span>Google Maps </span>
      </a>
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
          <h5><i class="fa fa-tasks"></i> Liste des Hôtel</h5>
        </div>
        <br>
      </div>
      <div class="panel-body">
        <div class="task-content">
          <ul id="sortable" class="task-list">
            @foreach ($admins as $admin)
            @if(Auth::user()->demande == "faux")
            <li class="list-success">
              <i class=" fa fa-ellipsis-v"></i>
              
              <div class="task-title">
                <span class="task-title-sp"><img src="{{ asset('storage/public/images/'.$admin->logo) }}" class="img-circle"  width="3%"></span>
                <span class="task-title-sp">{{$admin->name}}</span>
                
                <span class="badge bg-important">Demande</span>
                <div class="pull-right hidden-phone">
                  <a href="{{ action('ListHotelsController@demande',[$admin->id]) }}" class="btn btn-success btn-xs fa fa-plus"></a>
                 
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
