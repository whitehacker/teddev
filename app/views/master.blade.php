<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">

    {{ HTML::style('css/bootstrap-arabic.css') }}
    {{ HTML::style('css/bootstrap-arabic-theme.css') }}
    {{ HTML::style('css/font-awesome.css') }}
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap-arabic.js') }}
    <style type="text/css">
    body{margin-top:0px;}
.fa-fw {width: 2em;}
    </style>
  </head>

  <body>

    <nav class='navbar navbar-inverse navbar-fixed'>
      <div class='navbar-inner nav-collapse' style="height: auto;">
        <!--
        <ul class="nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Page One</a></li>
          <li><a href="#">Page Two</a></li>
        </ul>
      -->
      {{ HTML::link('/', 'سیستم نظارت دارالمعلمین ها', array('class' => 'navbar-brand')) }}
        <ul class="nav navbar-nav pull-right">
          @if(Auth::user())
          <li>{{ HTML::link('logout', 'خروج') }}</li>
          @else

            <a href="/login" class="navbar-btn btn-success btn pull-right" style="margin-left:30px">
            <span class="fa fa-lock"></span>  داخل شدن</a>

            <a href="/register" class="navbar-btn btn-warning btn pull-right" style="margin-left:30px">
            <span class="fa fa-user"></span> ثبت نام</a>
          @endif
        </ul>

      </div>
    </nav>


<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills list-group nav-stacked ">
              @if(Auth::user())
              <li class="active"><a href="/"><i class="fa fa-home fa-fw"></i>صفحه اصلی</a></li>
                <li><a href="/faculty_i"><i class="fa fa-user fa-fw"></i>فورم مصاحبه با استاد</a></li>
                <li><a href="/faculty_o"><i class="fa fa-eye fa-fw"></i>فورم مشاهده استاد</a></li>
                <li><a href="/student"><i class="fa fa-group fa-fw"></i>فورم مصاحبه با محصل</a></li>
                <li><a href="/admin"><i class="fa fa-institution fa-fw"></i>فورم مصاحبه با کارمندان اداری</a></li>
              @else

    {{ HTML::clever_link("/", 'صفحه اصلی' ) }}
    {{ HTML::clever_link("help", 'رهنما' ) }}
    {{ HTML::clever_link("contact", 'تماس با ما' ) }}



              @endif


            </ul>
        </div>
        <div class="col-md-9 well">
            @include('plugins.status')
            @yield('content')
        </div>
    </div>

   <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">© ۲۰۱۴- ریاست عمومی تربیه معلم - بخش سیستم های معلوماتی

      </p>

      <a href="/contact" class="navbar-btn btn-danger btn pull-right">
      <span class="fa fa-envelope"></span>  تماس با ما</a>
    </div>


  </div>

</div>








  </body>



</html>
