@extends('shared::layouts.app')
@section('content')
@section('title', 'Admin | Users')
@section('content_header')
    <h1>Modules </h1>
    <ol class="breadcrumb">
	<img class="loader" src="{{ asset('img/loading.gif') }}" >
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">modules</li>
      </ol>
@stop
@include('flash::message')


<div class="box box-info">
	<div class="box-header">
		<h3>Modules</h3>

	</div>
	<div class="box-body">

				<table id="data_table" class="table table-striped table-hover">
						<thead>
								<tr>
									<th>Module Name</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Order</th>
                  <th>Action</th>

								</tr>
						</thead>

						<tbody>

								@foreach($modules as $row)
								 		<tr >
												<td>{{ $row['name'] }}</td>
                        <td>{{ $row['name'] }}</td>
                        <td>{{ ($row['enabled']) == true ? 'Enabled' : 'Disabled'}}</td>
                        <td>{{$row['order']}}</td>
                        <td>
                          @if($row['enabled'] == true)
                  				<a href="{{route('admin.modules.disable',$row['slug'])}}"
                  					class="btn btn-sm btn-danger"
                  					   >
                  					<i class="fa fa-remove"></i> Disable
                  				</a>
                        @elseif ($row['enabled'] == false)
                          <a href="{{route('admin.modules.enable',$row['slug'])}}"
                  					class="btn btn-sm btn-success"
                  					   >
                  					<i class="fa fa-check"></i> Enable
                  				</a>

                        @endif
                        &nbsp;
                        <a href="{{route('admin.modules.increment',$row['slug'])}}"
                          class="btn btn-sm btn-info"
                             >
                          <i class="fa fa-arrow-up"></i>
                        </a>
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
