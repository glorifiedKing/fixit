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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Professionals Area</div>

                <div class="card-body">
                    <button class="btn">Hire a Professional</button>
                    <button class="btn">Become a Professional</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
