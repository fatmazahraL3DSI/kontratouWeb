@extends('layouts.app')

@section('content')
<li class="mt">
    <a class="active" href="{{asset('dashboard') }}">
      <i class="fa fa-dashboard"></i>
      <span>Dashboard</span>
      </a>
  </li>
  <li class="sub-menu">
    <a href="javascript:;">
      <i class="fa fa-desktop"></i>
      <span>Hôtel</span>
      </a>
    <ul class="sub">
      <li><a href="{{ asset ('list') }}">Général</a></li>
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
