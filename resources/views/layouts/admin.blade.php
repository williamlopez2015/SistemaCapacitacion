<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Ministerio de Trabajo y Previsión Social</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="{{asset('plantilla/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('plantilla/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="{{asset('plantilla/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('plantilla/css/style.css')}}" rel="stylesheet">
<link href="{{asset('plantilla/css/pages/dashboard.css')}}" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="{{url('/')}}">Ministerio de Trabajo y Previsión Social </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Cuenta <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Configuraciones</a></li>
              <li><a href="javascript:;">Ayuda</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Usuario <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="javascript:;">Salir</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="{{url('/')}}"><i class="icon-dashboard"></i><span>Inicio</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>Estrategico</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Reporte 1</a></li>
            <li><a href="#">Reporte 2</a></li>
            <li><a href="#">Reporte 2</a></li>
            <li><a href="#">Reporte 4</a></li>
            <li><a href="#">Reporte 5</a></li>
            <li><a href="#">Reporte 6</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>Tactico</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Reporte 1</a></li>
            <li><a href="#">Reporte 2</a></li>
            <li><a href="#">Reporte 2</a></li>
            <li><a href="#">Reporte 4</a></li>
            <li><a href="#">Reporte 5</a></li>
            <li><a href="#">Reporte 6</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
       @yield('contenido')
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<div class="extra">
  <div class="extra-inner">
    <div class="container">
      <div class="row">
                    <div class="span3">
                        <h4>
                            Something Legal</h4>
                        <ul>
                            <li><a href="javascript:;">Read License</a></li>
                            <li><a href="javascript:;">Terms of Use</a></li>
                        </ul>
                    </div>
                    <!-- /span3 -->
                </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /extra-inner --> 
</div>
<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2017 <a href="#">Universidad de El Salvador</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
@stack('scripts')
<script src="{{asset('plantilla/js/jquery-1.7.2.min.js')}}"></script> 
<script src="{{asset('plantilla/js/excanvas.min.js')}}"></script> 
<script src="{{asset('plantilla/js/chart.min.js')}}" type="text/javascript"></script> 
<script src="{{asset('plantilla/js/bootstrap.js')}}"></script>
<script language="javascript" type="text/javascript" src="{{asset('plantilla/js/full-calendar/fullcalendar.min.js')}}"></script>
 
<script src="{{asset('plantilla/js/base.js')}}"></script> 

</body>
</html>
