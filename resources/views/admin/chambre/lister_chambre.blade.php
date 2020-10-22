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
            <a  href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Les Promos</span>
              </a>
            <ul class="sub">
              <li><a href="{{ asset ('admin/liste_promo') }}">Liste des promotions</a></li>
              <li class="active"><a href="{{ asset ('admin/add_promo') }}">Ajouter des promotions</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Les Chambres</span>
              </a>
            <ul class="sub">
              <li class="active"><a href="{{ asset ('admin/chambre') }}">Liste des Chambres</a></li>
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
                <div class="col-lg-12">
                  
                    <table class="table table-striped table-advance table-hover">
                      <h4><i class="fa fa-tasks"></i> Tout Les Chambres</h4>
                      <hr>
                      <br/>
                      @if(Session::has('message'))
                      <div class="alert alert-dismissible alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>  {{ Session::get('message') }}</strong>
                      </div>
                      @endif
                      <thead>
                        <tr>
                          <th><i class="fa fa-sort-numeric-asc"></i> Num Chambre</th>
                          <th ><i class="fa fa-hand-o-right"></i> Type Chambre</th>
                          <th><i class="fa fa-users"></i> Disponibilité Chambre</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($chambres as $chambre)
                        @if($chambre->admin_id ==  Auth::user()->id)
                        <tr>
                          <td>
                            <a href="basic_table.html#">{{$chambre->numch}}</a>
                          </td>
                          <td class="hidden-phone">{{$chambre->categorie}}</td>
                          <td>{{$chambre->disponibilite}} </td>
                         
                          <td>
                            <a href="{{ route ('admin.chambre.edit',[$chambre->id]) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                            <a href="{{ route ('admin.chambre.delete',[$chambre->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                          </td>
                        </tr>
                        @endif
                        @endforeach
                      </tbody>
                    </table>
            
                  <!-- /content-panel -->
                </div>
                <!-- /col-md-12 -->
              </div>
              <!-- /row -->
            </section>
          </section>
       
          @endsection





