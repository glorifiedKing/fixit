@extends('shared::layouts.app')
@section('content')
@section('title', 'Admin | Permissions')
@section('content_header')
    <h1>Permissions </h1>
    <ol class="breadcrumb">
	<img class="loader" src="{{ asset('img/loading.gif') }}" >
        <li><a href="{{route('admin.permissions.index')}}"><i class="fa fa-dashboard"></i> back</a></li>
        <li class="active">permissions</li>
      </ol>
@stop
@include('flash::message')


<div class="box box-info">
	<div class="box-header">
    <h3>Edit Permission {{$permission->tokenname}}</h3>


    <hr>

	</div>
	<div class="box-body">
    <form method="post" >
      {{ csrf_field() }}
      <div class="row">
        <div class="col-md-4">Id
          <input required readonly class="form-control" name="tokenid" value="{{$permission->tokenid}}">
        </div>
        <div class="col-md-4">Name
          <input required class="form-control" name="tokenname" value="{{$permission->tokenname}}">
        </div>
        <div class="col-md-4"><br>
          <button class="btn btn-info">Update</button>
        </div>
      </div>
    </form>

	</div>
	</div>


@endsection
@section('js')
   @parent
    <script>
       $(document).ready(function() {
		   $('.loader').hide();

	});


    </script>
@stop
