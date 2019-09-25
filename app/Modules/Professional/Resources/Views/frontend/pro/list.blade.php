@extends('frontend.layouts.app')
@section('nav_links')
  <li class="nav-item"><a class="nav-link"  href="{{url('/')}}" class="active">Home</a></li>
  <li class="nav-item"><a class="nav-link"  href="{{url('/professionals')}}">Professionals</a></li>
  <li class="nav-item"><a class="nav-link"  href="{{url('/')}}">Store</a></li>
  <li class="nav-item"><a class="nav-link"  href="{{url('/login')}}" class="wallet-listing">Wallet</a></li>

@endsection

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">

                <ul class="professionals-list">
                  @foreach ($professionals as $pro)
                    <li>
                      <a href="{{route('pro.frontend.view',$pro->id)}}">
                          <img class="img img-thumbnail" src="{{asset('storage/pros/'.$pro->professional_photo)}}" />

                          <h4><a href="{{route('pro.frontend.view',$pro->id)}}">{{($pro->display == 'person') ? $pro->first_name." ".$pro->last_name." ".$pro->middle_name : $pro->company_name}}</a></h4>

                          <h5>
                            <a href="{{route('pro.frontend.view',$pro->id)}}">
                            @foreach ($pro->services as $service)
                              {{$service->name.","}}
                            @endforeach
                            </a>
                          </h5>
                      </a>

                    </li>

                  @endforeach

                </ul>


    </div>
</div>
@endsection
