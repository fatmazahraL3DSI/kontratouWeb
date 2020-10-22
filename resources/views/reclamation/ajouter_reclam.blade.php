@extends('layouts.app')

@section('content')
<li class="mt">
    <a href="{{asset('dashboard') }}">
      <i class="fa fa-dashboard"></i>
      <span>Dashboard</span>
      </a>
  </li>
  <li class="sub-menu">
    <a  href="javascript:;">
      <i class="fa fa-desktop"></i>
      <span>Hôtel</span>
      </a>
    <ul class="sub">
      <li  ><a href="{{ asset ('list') }}">Général</a></li>
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
    <a class="active" href="javascript:;">
      <i class="fa fa-th"></i>
      <span>Les Reclamations</span>
      </a>
    <ul class="sub">
      <li ><a href="/reclamation">Historique Reclamation</a></li>
      <li class="active"><a href="/add_reclamation">Ajouter Reclamation</a></li>
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
      <h3><i class="fa fa-angle-right"></i> Ajouter des Reclations</h3>
    
      <div class="row mt mb">
        <div class="col-lg-12">
          <div class="form-panel">
            <form class="form-horizontal style-form"  action="{{ route('reclamation.ajouter_reclam.store') }}" method="POST" enctype="multipart/form-data">
              {{ method_field('GET') }}                      
              <div class="form-group">
                <label class="control-label col-md-3">Nom d'hotel</label>
                <div class="col-md-4">
                    <select class="form-control"name="name" >
                        <option>------</option>
                        @foreach ($admins as $admin)
                        <option >{{$admin->name}}</option>
                        @endforeach
                    </select>        
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3">Titre de Reclamation</label>
                <div class="col-md-4">
                    <input type="text" name="Titre" class="form-control"  size="16">        
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">Description</label>
                <div class="col-md-4">
                    <textarea  name="Description" rows="6" cols="50" class="form-control">
                    </textarea>
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-theme" type="submit">Ajouter</button>
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
