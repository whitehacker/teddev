@if(isset($errors) && count($errors->all()) > 0)
<div class="alert alert-danger">

    <a class="close" href="#" data-dismiss="alert">x</a>
    <h4 class="alert-heading">غلطی های ذیل را اصلاح نمایید!</h4>

    <ul>
        @foreach($errors->all('<li>:messages</li>') as $message)
        {{ $message }}
        @endforeach
    </ul>

  </div>
@endif
