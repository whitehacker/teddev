<?php
  class UserController extends BaseController{
    public $restful = true;
    public function get_index(){
      $title= "دخول";
      return View::make('users.index')
          ->with('title', $title);

    }
    public function post_index(){
        $input = Input::all();
        $rules = array('email' => 'required|email', 'password' => 'required');
        $v = Validator::make($input,$rules);

        if($v ->fails()){
          return Redirect::to('login')->withErrors($v);
        }
        else{
          $credentials = array('username' =>$input['email'], 'password' => $input['password']);
          if(Auth::attempt($credentials)){
            return Redirect::to('profile');
          }
          else{
            return Redirect::to('login');
          }
        }
    }
    public function get_register(){
      $title= "ثبت نام";
      return View::make('users.register')
          ->with('title', $title);
    }

    public function post_register(){
        $input = Input::all();
        $rules=array(
          'username' => 'required|unique:users',
          'email' => 'required|unique:users|email',
          'password' => 'required'
        );
        $v = Validator::make($input,$rules);
        if($v->fails()){
          return Redirect::to('register')->withErrors($v);
        }
        else{
          $password = Input::get('password');
          $password = Hash::make($password);
          $user = new User;
          $user->username= Input::get('username');
          $user->email= Input::get('email');
          $user->password=$password;
          $user->save();
          return Redirect::to('login');
        }
    }

    public function get_profile(){
        $title = ucwords(Auth::user()->username, "'s Page");
        return View::make('user.profile')
        ->with('title', $title);
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');

    }

  }

?>
