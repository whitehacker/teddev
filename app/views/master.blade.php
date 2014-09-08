<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <tilte>{{ $title }}</title>
    {{ HTML::style('css/bootstrap-arabic.css') }}
    {{ HTML::style('css/font-awesome.css') }}
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap-arabic.js') }}
    <style type="text/css">
    body{margin-top:20px;}
.fa-fw {width: 2em;}
    </style>
  </head>

  <body>

    <nav class='navbar navbar-default'>
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
            <li>{{ HTML::link('login', 'داخل شدن') }}</li>
          @endif
        </ul>

      </div>
    </nav>


<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
              @if(Auth::user())
              <li class="active"><a href="/"><i class="fa fa-home fa-fw"></i>صفحه اصلی</a></li>
                <li><a href="/faculty_i"><i class="fa fa-user fa-fw"></i>فورم مصاحبه با استاد</a></li>
                <li><a href="/faculty_o"><i class="fa fa-eye fa-fw"></i>فورم مشاهده استاد</a></li>
                <li><a href="/student"><i class="fa fa-group fa-fw"></i>فورم مصاحبه با محصل</a></li>
                <li><a href="/admin"><i class="fa fa-institution fa-fw"></i>فورم مصاحبه با کارمندان اداری</a></li>
              @else
              <li class="active"><a href="/"><i class="fa fa-home fa-fw"></i>صفحه اصلی</a></li>
              <li><a href="/help"><i class="fa fa-question fa-fw"></i>رهنما</a></li>
              <li><a href="/contact"><i class="fa fa-envelope fa-fw"></i>تماس با ما</a></li>
              @endif

              
            </ul>
        </div>
        <div class="col-md-9 well">
            @yield('content')
        </div>
    </div>
</div>







  </body>



</html>
