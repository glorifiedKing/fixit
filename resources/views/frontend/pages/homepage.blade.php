@extends('frontend.layouts.app')
@section('nav_links')
  <li class="nav-item"><a class="nav-link"  href="{{url('/')}}" class="active">Home</a></li>
  <li class="nav-item"><a class="nav-link"  href="{{url('/professionals')}}">Professionals</a></li>
  <li class="nav-item"><a class="nav-link"  href="{{url('/')}}">Store</a></li>
  <li class="nav-item"><a class="nav-link"  href="{{url('/login')}}" class="wallet-listing">Wallet</a></li>
  <li class="nav-item"><a class="nav-link"  href="{{url('/login')}}"><img src="{{asset('img/user_account_icon.png')}}"></a></li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm">
          <a href="{{url('/login')}}">Fundi Wallet</a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="{{url('/professionals')}}">Professionals</a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="{{url('/')}}">Buy from the store</a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="{{url('/')}}">Get Financed</a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="{{url('/')}}">Get a building plan</a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="{{url('/')}}">Insure your project</a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="{{url('/')}}">Utilities</a>
        </div>

    </div>
</div>
@endsection
