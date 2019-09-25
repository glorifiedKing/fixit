@extends('shared::layouts.app')
@section('content')
@section('title', 'Professionals | List')
@section('content_header')
    <h1>Professionals </h1>
    <ol class="breadcrumb">
	<img class="loader" src="{{ asset('img/loading.gif') }}" >
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">professionals</li>
      </ol>
@stop
@include('flash::message')


<div class="box box-info">
	<div class="box-header">
		<h3>Professional</h3>

	</div>
	<div class="box-body">

				<table id="data_table" class="table table-striped table-hover">
						<thead>
								<tr>
									<th>Name</th>
                  <th>Address</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Services</th>
                  <th>Action</th>

								</tr>
						</thead>

						<tbody>

								@foreach($professionals as $row)
								 		<tr >
												<td>{{ ($row->display == 'person') ? $row->first_name." ".$row->last_name." ".$row->middle_name : $row->company_name }}</td>
                        <td>{{ $row->company_address}}</td>
                        <td>{{ substr($row->description,0,20)." ..."}}</td>
                        <td>{{($row->status == 0) ? 'Pending' : 'Approved'}}</td>
                        <td>
                          @foreach ($row->services as $key => $service)
                            {{$service->name.","}}
                          @endforeach
                        </td>

                        <td>
                          @can('ViewProfessionals')
                  				<a href="{{route('pro.edit',$row->id)}}"
                  					class="btn btn-sm btn-warning"
                  					   >
                  					<i class="fa fa-remove"></i> Edit
                  				</a>
                        @endcan
                        @can('DeleteProfessionals')
                          <a href="{{route('pro.delete',$row->id)}}"
                  					class="btn btn-sm btn-danger"
                  					   >
                  					<i class="fa fa-check"></i> Delete
                  				</a>
                        @endcan
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
					            "order": [[ 3, "asc" ]]
              });



				$('.datepicker').datepicker({
					format: 'yyyy-mm-dd',
				});




	});


    </script>
@stop
