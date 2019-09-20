@extends('shared::layouts.app')
@section('content')
@section('title', 'Admin | Users')
@section('content_header')
    <h1>Users </h1>
    <ol class="breadcrumb">
	<img class="loader" src="{{ asset('img/loading.gif') }}" >
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">permissions</li>
      </ol>
@stop
@include('flash::message')


<div class="box box-info">
	<div class="box-header">
		<h3>Add User</h3>
    <a href="{{route('admin.users.create')}}"
    class="btn btn-sm btn-success pull-right" >
    <strong><i class="fa fa-plus-square"></i> Add</strong>
  </a>
    

	</div>
	<div class="box-body">

				<table id="data_table" class="table table-striped table-hover">
						<thead>
								<tr>
									<th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Last Login</th>
                  <th>Action</th>

								</tr>
						</thead>

						<tbody>

								@foreach($users as $row)
								 		<tr >
												<td>{!! $row->realname !!}</td>
                        <td>{!! $row->userid!!}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->role->secrolename}}</td>
                        <td>{{$row->lastvisitdate}}</td>
                        <td>
                  				<a href="{{route('admin.users.edit',$row->userid)}}"
                  					class="btn btn-sm btn-warning"
                  					   >
                  					<i class="fa fa-pencil"></i>Edit
                  				</a>
                  				<a href="{{ route('admin.users.delete',$row->userid) }}"
                  				onclick="return confirm('Are you sure you want to delete this user?')"  class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete" title="Delete">Delete</a>
                  			</td>
				 						</tr>

								@endforeach

						<tbody>
					</table>


				</div>
	</div>


@endsection
@section('js')
   @parent
    <script>
       $(document).ready(function() {
		   $('.loader').hide();



                var table = $('#data_table').DataTable({
					responsive: false,
					dom: 'Blfrtip',
					buttons: [
						{
							extend: 'excelHtml5',
							exportOptions: {
								columns: ':visible'
							}
						},
						{
							extend: 'pdfHtml5',
							exportOptions: {
								columns: ':visible'
							}
						},
						'colvis',
					],
      });



				$('.datepicker').datepicker({
					format: 'yyyy-mm-dd',
				});




	});


    </script>
@stop
