@extends('shared::layouts.app')
@section('content')
@section('title', 'Contracts | Edit')
@section('content_header')
    <h1>Edit {{$role->secrolename}} Role </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('admin.roles.index')}}"><i class="fa fa-male"></i> roles</a></li>
        <li class="active">edit role</li>
      </ol>
@stop
@include('flash::message')

<div class="box box-info">
	<div class="box-header">
		<h3>{{$role->secrolename}}</h3>
	</div>
	<div class="box-body">
		<div class="col-xs-12" >
		<form  method="post"  enctype="multipart/form-data" >
		  {{ csrf_field() }}
		<div class="panel-body">
		<div class="row">

			<div class="col-sm-4">
				<div class="form-group no-margin-hr">
				    <label class="control-label">Role Name</label>
				    <input class="form-control" name="secrolename" value="{{$role->secrolename}}">
				</div>
			</div>

			<div class="col-sm-4">
				<div class="form-group no-margin-hr">
					<label class="control-label">&nbsp;</label>

				<button class="btn btn-success form-control"  >Update</button>
				</div>
			</div>
		</div>
			</form>
		</div>
	</div>
  <table class="table table-striped">
    <thead>
        <th colspan="3">Assigned Permissions</th>
        <th colspan="3">Available Permissions</th>
    </thead>
    <tbody>
      @foreach ($permissions as $key => $permission)
        @if(in_array($permission->tokenid,$assigned_permissions))
          <tr>
            <td>{{$permission->tokenid}}</td>
            <td>{{$permission->tokenname}}</td>
            <td><a class="btn btn-xs btn-danger" href="{{route('admin.roles.permissions.remove',[$role->secroleid,$permission->tokenid])}}">Remove</a></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        @elseif (!in_array($permission->tokenid,$assigned_permissions))
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>{{$permission->tokenid}}</td>
            <td>{{$permission->tokenname}}</td>
            <td><a class="btn btn-xs btn-success" href="{{route('admin.roles.permissions.add',[$role->secroleid,$permission->tokenid])}}">Add</a></td>
          </tr>

        @endif

      @endforeach
    </tbody>

  </table>
</div>
</div>
@endsection
@section('js')
   @parent
    <script>
       $(document).ready(function() {


		});
    </script>
@stop
