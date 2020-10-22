<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Login Agence</title>

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
        
      <form class="form-login" method="POST" action="{{ route('admin.auth.loginAdmin') }}">
        <h2 class="form-login-heading">login Hôtel</h2>
        <div class="login-wrap">
            
                 @csrf
                 <div class="images">
                 <img src="{{ asset ('img/logo.png')}}" style="width: 60%; height: 20%;" /><br/><br/></div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right ">{{ __('Adresse E-Mail ') }}</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <label class="checkbox col-md-12">
                            <input type="checkbox" value="remember-me" id="remember" {{ old('remember') ? 'checked' : '' }}/>  {{ __('Souviens-toi de moi') }}
                            <span class="pull-right">
                                @if (Route::has('password.request'))
                            <a data-toggle="modal" href="{{ route('password.request') }}">  {{ __('Mot de passe oublié?') }}</a>@endif
                            </span>
                         </label>
                                <button type="submit" class="btn btn-theme btn-block">
                                    <i class="fa fa-lock"></i>
                                    {{ __('Connexion') }}
                                </button> 
                                <hr>
                                <div class="registration">
                                  Vous n'avez pas encore de compte?<br/>
                                    <a class="nav-link" href="{{ route('admin.register') }}">
                                      Créer un compte
                                      </a>
                                  </div>

                    </div>
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset ('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset ('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="{{ asset ('lib/jquery.backstretch.min.js')}}"></script>
  <script>
    $.backstretch("../img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
