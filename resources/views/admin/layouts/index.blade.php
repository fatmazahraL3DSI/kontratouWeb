<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Kontratou</title>

  <!-- Favicons -->
  <link href="{{ asset ('img/favicon.png')}}" rel="icon">

  
  <!-- Bootstrap core CSS -->
  <link href="{{ asset ('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset ('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset ('css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset ('lib/gritter/css/jquery.gritter.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{ asset ('lib/bootstrap-fileupload/bootstrap-fileupload.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{ asset ('lib/bootstrap-datepicker/css/datepicker.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{ asset ('lib/bootstrap-daterangepicker/daterangepicker.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{ asset ('lib/bootstrap-timepicker/compiled/timepicker.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset ('css/style.css')}}" rel="stylesheet">
  <link href="{{ asset ('css/style-responsive.css')}}" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      
      <!--logo start-->
      <a href="index.html" class="logo"> <img src="{{ asset ('img/logo.png')}}" width="70%" height="50%"/></a>
     
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">1</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">Vous avez 7 nouvelles notifications</p>
              </li>
              <li>
                <a href="{{ asset ('admin/liste_agences_enattente') }}">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          
          @guest('admin')
              @else
                          <li>
                            <form  class="logout" id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" >
                              <a href="{{ route('admin.auth.logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               {{ __('Déconnexion') }}
                           </a>
                           {{ csrf_field() }}
                           </form>
                          </li>
              @endguest
          
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="{{ asset('admin/profil')}}"><img src="{{ asset('storage/public/images/'.Auth::user()->logo) }}" class="img-circle"  width="90%" height="50%"></a></p>
          
          
    @yield("content")
  
    <footer class="site-footer">
      <div class="text-center">
        <br/><br/>
      
      
        <a href="#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
      
     
    </footer>
    <!--footer end-->
  </section>
 <!-- js placed at the end of the document so the pages load faster -->
 <script src="{{ asset ('lib/jquery/jquery.min.js')}}"></script>
 <script src="{{ asset ('lib/bootstrap/js/bootstrap.min.js')}}"></script>
 <script class="include" type="text/javascript" src="{{ asset ('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
 <script src="{{ asset ('lib/jquery.scrollTo.min.js')}}"></script>
 <script src="{{ asset ('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
 <script src="{{ asset ('lib/jquery.sparkline.js')}}"></script>
 <!--common script for all pages-->
 <script src="{{ asset ('lib/common-scripts.js')}}"></script>
 <script type="text/javascript" src="{{ asset ('lib/gritter/js/jquery.gritter.js')}}"></script>
 <script type="text/javascript" src="{{ asset ('lib/gritter-conf.js')}}"></script>
 <!--script for this page-->
 <script src="{{ asset ('lib/sparkline-chart.js')}}"></script>
 <script src="{{ asset ('lib/zabuto_calendar.js')}}"></script>
 <script src="{{ asset ('lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset ('lib/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
 <script type="text/javascript" src="{{ asset ('lib/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
 <script type="text/javascript" src="{{ asset ('lib/bootstrap-daterangepicker/date.js')}}"></script>
 <script type="text/javascript" src="{{ asset ('lib/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
 <script type="text/javascript" src="{{ asset ('lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
 <script type="text/javascript" src="{{ asset ('lib/bootstrap-daterangepicker/moment.min.js')}}"></script>
 <script type="text/javascript" src="{{ asset ('lib/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
 <script src="{{ asset ('lib/advanced-form-components.js')}}"></script>
 <script src="{{ asset ('lib/chart-master/Chart.js')}}"></script>
 <script type="application/javascript">
   $(document).ready(function() {
     $("#date-popover").popover({
       html: true,
       trigger: "manual"
     });
     $("#date-popover").hide();
     $("#date-popover").click(function(e) {
       $(this).hide();
     });

     $("#my-calendar").zabuto_calendar({
       action: function() {
         return myDateFunction(this.id, false);
       },
       action_nav: function() {
         return myNavFunction(this.id);
       },
       ajax: {
         url: "show_data.php?action=1",
         modal: true
       },
       legend: [{
           type: "text",
           label: "Special event",
           badge: "00"
         },
         {
           type: "block",
           label: "Regular event",
         }
       ]
     });
   });

   function myNavFunction(id) {
     $("#date-popover").hide();
     var nav = $("#" + id).data("navigation");
     var to = $("#" + id).data("to");
     console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
   }
 </script>
 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 <script src="{{ asset ('lib/tasks.js')}}" type="text/javascript"></script>
 <script>
   jQuery(document).ready(function() {
     TaskList.initTaskWidget();
   });

   $(function() {
     $("#sortable").sortable();
     $("#sortable").disableSelection();
   });
 </script>

</body>

</html>

