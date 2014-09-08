<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <tilte>{{ $title }}</title>
    {{ HTML::style('css/bootstrap-arabic.css') }}
    {{ HTML::style('css/font-awesome.css') }}
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap-arabic.js') }}

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

        @yield('content')

      </div>



  </body>



</html>
