@extends('admin.layouts.index')
@section('content')
<li class="mt">
  <a class="active" href="{{asset('admin/dashboard') }}">
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
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-9 main-chart">
        <!--CUSTOM CHART START -->
        <div class="border-head">
          <h3>AGENCES VISITS</h3>
        </div>
        <div class="custom-bar-chart">
          <ul class="y-axis">
            <li><span>10.000</span></li>
            <li><span>8.000</span></li>
            <li><span>6.000</span></li>
            <li><span>4.000</span></li>
            <li><span>2.000</span></li>
            <li><span>0</span></li>
          </ul>
          <div class="bar">
            <div class="title">JAN</div>
            <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
          </div>
          <div class="bar ">
            <div class="title">FEB</div>
            <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
          </div>
          <div class="bar ">
            <div class="title">MAR</div>
            <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
          </div>
          <div class="bar ">
            <div class="title">APR</div>
            <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
          </div>
          <div class="bar">
            <div class="title">MAY</div>
            <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
          </div>
          <div class="bar ">
            <div class="title">JUN</div>
            <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
          </div>
          <div class="bar">
            <div class="title">JUL</div>
            <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
          </div>
        </div>
        <!--custom chart end-->
        <div class="row mt">
          <!-- SERVER STATUS PANELS -->
          <div class="col-md-4 col-sm-4 mb">
            <div class="grey-panel pn donut-chart">
              <div class="grey-header">
                <h5>SERVER LOAD</h5>
              </div>
              <canvas id="serverstatus01" height="120" width="120"></canvas>
              <script>
                var doughnutData = [{
                    value: 70,
                    color: "#FF6B6B"
                  },
                  {
                    value: 30,
                    color: "#fdfdfd"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
              </script>
              <div class="row">
                <div class="col-sm-6 col-xs-6 goleft">
                  <p>Usage<br/>Increase:</p>
                </div>
                <div class="col-sm-6 col-xs-6">
                  <h2>21%</h2>
                </div>
              </div>
            </div>
            <!-- /grey-panel -->
          </div>
          <!-- /col-md-4-->
          <div class="col-md-4 col-sm-4 mb">
            <div class="darkblue-panel pn">
              <div class="darkblue-header">
                <h5>DROPBOX STATICS</h5>
              </div>
              <canvas id="serverstatus02" height="120" width="120"></canvas>
              <script>
                var doughnutData = [{
                    value: 60,
                    color: "#1c9ca7"
                  },
                  {
                    value: 40,
                    color: "#f68275"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
              </script>
              <p>April 17, 2014</p>
              <footer>
                <div class="pull-left">
                  <h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
                </div>
                <div class="pull-right">
                  <h5>60% Used</h5>
                </div>
              </footer>
            </div>
            <!--  /darkblue panel -->
          </div>
          <!-- /col-md-4 -->
          <div class="col-md-4 mb">
            <div class="weather pn">
              <i class="fa fa-cloud fa-4x"></i>
              <h2>11º C</h2>
              <h4>BUDAPEST</h4>
            </div>
          </div>
          <!-- /col-md-4 -->
        </div>
      
      </div>
      <!-- /col-lg-9 END SECTION MIDDLE -->
      <!-- **********************************************************************************************************************************************************
          RIGHT SIDEBAR CONTENT
          *********************************************************************************************************************************************************** -->
      <div class="col-lg-3 ds">
       
       
        <!--NEW EARNING STATS -->
        <div class="panel terques-chart">
          <div class="panel-body">
            <div class="chart">
              <div class="centered">
                <span>GAIN D'AUJOURD'HUI</span>
                <strong>$ 890,00 | 15%</strong>
              </div>
              <br>
              <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
            </div>
          </div>
        </div>
        <!--new earning end-->
        <!-- RECENT ACTIVITIES SECTION -->
        
      
        <!-- Second Activity -->
        <div class="desc">
          <div class="thumb">
            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
          </div>
          <div class="details">
            <p>
              <muted>2 Minutes Ago</muted>
              <br/>
              <a href="#">James Brown</a> subscribed to your newsletter.<br/>
            </p>
          </div>
        </div>
       
     
        <!-- CALENDAR-->
        <div id="calendar" class="mb">
          <div class="panel green-panel no-margin">
            <div class="panel-body">
              <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                <div class="arrow"></div>
                <h3 class="popover-title" style="disadding: none;"></h3>
                <div id="date-popover-content" class="popover-content"></div>
              </div>
              <div id="my-calendar"></div>
            </div>
          </div>
        </div>
        <!-- / calendar -->
      </div>
      <!-- /col-lg-3 -->
    </div>
    <!-- /row -->
  </section>
</section>



@endsection