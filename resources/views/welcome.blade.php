@extends('frontend.layouts.app')
@section('nav_links')
  <li><a href="{{url('/')}}" class="active">Home</a></li>
  <li><a href="professional.html">Professionals</a></li>
  <li><a href="store.html">Store</a></li>
  <li><a href="login.html" class="wallet-listing">Wallet</a></li>
  <li><a href="login.html"><img src="img/user_account_icon.png"></a></li>
@endsection  

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
