@extends('shared::layouts.app')
@section('content')
@section('title', 'Courier | Contract RAtes')
@section('content_header')
    <h1>Roles </h1>
    <ol class="breadcrumb">
	<img class="loader" src="{{ asset('img/loading.gif') }}" >
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">contract rates</li>
      </ol>
@stop
@include('flash::message')

<div class="box box-info">
	<div class="box-header">
		<h3>Add New Role</h3>
    <form method="post" action="{{route('admin.roles.save')}}">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-md-6">
          <input class="form-control" name="secrolename" placeholder="Role Name">
        </div>
        <div class="col-md-6">
          <button class="btn btn-info">Add</button>
        </div>
      </div>
    </form>

    <hr>

	</div>
	<div class="box-body">

				<table id="data_table" class="table table-striped table-hover">
						<thead>
								<tr>
									<th>id</th>
                  <th>Role</th>
                  <th>Action</th>

								</tr>
						</thead>

						<tbody>

								@foreach($roles as $row)
								 		<tr data-entity-id="{{$row->secroleid}}">
												<td>{!! $row->secroleid !!}</td>
                        <td>{!! $row->secrolename !!}</td>
                        <td>
                  				<a href="{{route('admin.roles.edit',$row->secroleid)}}"
                  					class="btn btn-sm btn-warning"
                  					 data-typeid="{{$row->id}}"  >
                  					<i class="fa fa-pencil"></i>Edit
                  				</a>
                  				<a href="{{ route('admin.roles.delete',$row->secroleid) }}"
                  				onclick="return confirm('Are you sure you want to delete this role?')"  class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete" title="Delete">Delete</a>
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
