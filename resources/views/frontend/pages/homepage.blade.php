@extends('frontend.layouts.app')
@section('nav_links')
  <li class="nav-item"><a class="nav-link"  href="{{url('/')}}" class="active">Home</a></li>
  <li class="nav-item"><a class="nav-link"  href="{{url('/professionals')}}">Professionals</a></li>
  <li class="nav-item"><a class="nav-link"  href="{{url('/')}}">Store</a></li>
  <li class="nav-item"><a class="nav-link"  href="{{url('/login')}}" class="wallet-listing">Wallet</a></li>
  
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 col-sm-6 options-wrapper">
          <a href="{{url('/login')}}">Fundi Wallet</a>
        </div>
        <div class="col-md-3 col-sm-6 options-wrapper">
          <a href="{{url('/professionals')}}">Professionals</a>
        </div>
        <div class="col-md-3 col-sm-6 options-wrapper">
          <a href="{{url('/')}}">Buy from the store</a>
        </div>
        <div class="col-md-3 col-sm-6 options-wrapper">
          <a href="{{url('/')}}">Get Financed</a>
        </div>
        <div class="col-md-3 col-sm-6 options-wrapper">
          <a href="{{url('/')}}">Get a building plan</a>
        </div>
        <div class="col-md-3 col-sm-6 options-wrapper">
          <a href="{{url('/')}}">Insure your project</a>
        </div>
        <div class="col-md-3 col-sm-6 options-wrapper">
          <a href="{{url('/')}}">Utilities</a>
        </div>

    </div>
</div>
@endsection
