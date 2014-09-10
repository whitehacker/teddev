@extends('master')

@section('content')


      <div class="container">
        <div class="col-md-6 ">
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">داخل شوید</div>
                        <div style="float:left; font-size: 80%; position: relative; top:-10px"><a href="#">شفر را نمیدانم!</a></div>
                    </div>

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <!--<form id="loginform" class="form-horizontal" role="form">-->
                        <form action="{{ action('UserController@post_register') }}" method="post" class="form-horizontal">
                        <!--{{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}-->

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="ایمیل آدرس شما">
                                    </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="شفر و یا پاسورد">
                                    </div>



                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> به یاد داشته باش!
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" class="btn btn-success" value="داخل شوید!">


                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                          اکونت ندارید؟
                                        <a href="/contact">
                                            با مادر تماس شوید!
                                        </a>
                                        </div>
                                    </div>
                                </div>

                            </form>



                        </div>
                    </div>
        </div>

    </div>

@endsection
