@extends('shared::layouts.app')
@section('content')
@section('title', 'Admin | Permissions')
@section('content_header')
    <h1>Permissions </h1>
    <ol class="breadcrumb">
	<img class="loader" src="{{ asset('img/loading.gif') }}" >
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">permissions</li>
      </ol>
@stop
@include('flash::message')


<div class="box box-info">
	<div class="box-header">
    <h3>Add New Permission</h3>
    <form method="post" action="{{route('admin.permissions.save')}}">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-md-4">
          <input required class="form-control" value="{{$newest->tokenid+1 ?? ''}}" name="tokenid" placeholder="Permission ID">
        </div>
        <div class="col-md-4">
          <input required class="form-control" name="tokenname" placeholder="Permission Name">
        </div>
        <div class="col-md-4">
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

								@foreach($permissions as $row)
								 		<tr data-entity-id="{{$row->tokenid}}">
												<td>{!! $row->tokenid !!}</td>
                        <td>{!! $row->tokenname!!}</td>
                        <td>
                  				<a href="{{route('admin.permissions.edit',$row->tokenid)}}"
                  					class="btn btn-sm btn-warning"
                  					 data-typeid="{{$row->tokenid}}"  >
                  					<i class="fa fa-pencil"></i>Edit
                  				</a>
                  				<a href="{{ route('admin.permissions.delete',$row->tokenid) }}"
                  				onclick="return confirm('Are you sure you want to delete this permission?')"  class="btn btn-sm btn-danger" data-toggle="tooltip" data-original-title="Delete" title="Delete">Delete</a>
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
