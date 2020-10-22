<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Welcome</title>

  <!-- Favicons -->
  <link href="{{ asset ('img/favicon.png')}}" rel="icon">
  <link href="{{ asset ('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset ('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset ('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
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
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
        <br/><br/><br/><br/>
      <div class="form-welc" >
		  
        <h2 class="form-welc-heading">Bienvenue Dans notre Plateforme</h2>
        <div class="login-wrap">
                 <div class="image">
                 <img src="{{ asset ('img/logo.png')}}" style="width: 60%; height: 20%;" /><br/><br/></div>
				 <div class="login-social-link centered">
          <br/><br/>
          
					<a href="{{ asset ('admin/login')}}"  class="btn-theme btn-lg page-scroll loun">Session Hôtel</a>  
          <a href="{{ asset ('login')}}" class="btn-theme  btn-lg page-scroll loun">Session Agence</a> 
				  </div>
        </div>
				</div>
	</div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset ('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset ('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="{{ asset ('lib/jquery.backstretch.min.js')}}"></script>
  <script>
    $.backstretch("img/about.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
