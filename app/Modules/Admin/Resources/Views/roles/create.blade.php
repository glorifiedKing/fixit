@extends('shared::layouts.app')
@section('content')
@section('title', 'Contracts | New')
@section('content_header')
    <h1>Contract Rates <small>new rate</small></h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('courier.contract_rate.list')}}"><i class="fa fa-male"></i> client rates</a></li>
        <li class="active">new rate</li>
      </ol>
@stop
@include('flash::message')

<div class="box box-info">
	<div class="box-header">
		<h3>Contract Rates</h3>
	</div>
	<div class="box-body">
		<div class="col-xs-12" >
		<form  method="post"  enctype="multipart/form-data" >
		  {{ csrf_field() }}
		<div class="panel-body">
		<div class="row">

			<div class="col-sm-2">
				<div class="form-group no-margin-hr">
				    <label class="control-label">Client</label>
				    <select class="form-control" name="customer_id">
						@foreach($customers as $customer)
							<option value="{{$customer->branchcode}}">{{$customer->brname}}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="col-sm-2">
				<div class="form-group no-margin-hr">
				    <label class="control-label">From Area</label>
				    <select class="form-control selecta" name="from_area_id">
						@foreach($delivery_areas as $delivery_area)
							<option value="{{$delivery_area->id}}">{{$delivery_area->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
      <div class="col-sm-2">
				<div class="form-group no-margin-hr">
				    <label class="control-label">To Area</label>
				    <select class="form-control selecta" name="to_area_id">
						@foreach($delivery_areas as $delivery_area)
							<option value="{{$delivery_area->id}}">{{$delivery_area->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
      <div class="col-sm-2">
				<div class="form-group no-margin-hr">
				    <label class="control-label">Currency</label>
				    <select class="form-control selecta" name="currency">
						@foreach($currencies as $currency)
							<option value="{{$currency->currabrev}}">{{$currency->currabrev}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="form-group no-margin-hr">
				    <label class="control-label">Standard Rate</label>
				    <input name="standard_charge" class="form-control">
				</div>
			</div>
      <div class="col-sm-2">
				<div class="form-group no-margin-hr">
				    <label class="control-label">Standard Weight</label>
				    <input name="standard_weight" class="form-control" value="5">
				</div>
			</div>
      <div class="col-sm-2">
				<div class="form-group no-margin-hr">
				    <label class="control-label">Surchage Rate</label>
				    <input name="surchage" class="form-control">
				</div>
			</div>

			<div class="col-sm-2">
				<div class="form-group no-margin-hr">
					<label class="control-label">&nbsp;</label>

				<button class="btn btn-success form-control"  >Save</button>
				</div>
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
    		   $('.datepicker').datepicker({
    				format: 'yyyy-mm-dd',

    			});
          $('.selecta').select2();

		});
    </script>
@stop
