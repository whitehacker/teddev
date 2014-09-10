@extends('master')

@section('content')
  <h3>Welcome to your profile Page {{ ucwords(Auth:user()->username) }}

@endsection
