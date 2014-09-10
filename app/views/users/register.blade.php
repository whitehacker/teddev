@extends('master')

@section('content')
<div class="container">

<div class="row">
    <div class="col-md-6">
		
    <form action="{{ action('UserController@post_index') }}" method="post" class="form-horizontal">
			<h2>با سیستم راجستر شوید!&nbsp;<small>این ثبت نام برای مدت محدود است</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="username" class="form-control input-lg" placeholder="اسم کاربر" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" class="form-control input-lg" placeholder="شفر و یا پاسورد" tabindex="2">
					</div>
				</div>
			</div>

			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="آدرس الکترونیکی شما" tabindex="4">
			</div>



			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="ثبت نمایید!" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6"><a href="/login" class="btn btn-success btn-block btn-lg">داخل شوید!</a></div>
			</div>
		</form>
	</div>
</div>

</div>

@endsection
