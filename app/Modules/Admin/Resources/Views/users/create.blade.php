@extends('shared::layouts.app')
@section('content')
@section('title', 'Users | New')
@section('content_header')
    <h1>Users <small>new user</small></h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('admin.users.index')}}"><i class="fa fa-male"></i> users</a></li>
        <li class="active">new user</li>
      </ol>
@stop
@include('flash::message')

<div class="box box-info">
	<div class="box-header">
		<h3>Create User</h3>
	</div>
	<div class="box-body">
    <form class="form-material"  method="POST"  enctype="multipart/form-data">                                                             <!-- CSRF Token -->
        {{ csrf_field() }}
     <fieldset>
       <legend><h5>1. User Details</h5></legend>
         <div class="row">
           <div class="col-sm-3">
             <div class="form-group {{ $errors->has('userid') ? ' has-error' : '' }}">
                 <label class="">Username</label>
                 <input type="text" name="userid"  value="{{ old('userid') }}" class="form-control" placeholder="username" >
                 @if ($errors->has('userid'))
                     <span class="alert-danger">
                         <strong>{{ $errors->first('userid') }}</strong>
                     </span>
                 @endif
             </div>
           </div>
           <div class="col-sm-3">
             <div class="form-group {{ $errors->has('realname') ? ' has-error' : '' }}">
                 <label class="">Name</label>
                 <input type="text" name="realname"  value="{{ old('realname') }}" class="form-control" placeholder="John Doe" required>
                 @if ($errors->has('price'))
                     <span class="alert-danger">
                         <strong>{{ $errors->first('realname') }}</strong>
                     </span>
                 @endif
             </div>
           </div>
           <div class="col-sm-3">
             <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                 <label class="">Email</label>
                 <input type="text" name="email"  value="{{ old('email') }}" class="form-control" placeholder="email" required>
                 @if ($errors->has('email'))
                     <span class="alert-danger">
                         <strong>{{ $errors->first('email') }}</strong>
                     </span>
                 @endif
             </div>
           </div>
           <div class="col-sm-3">
             <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                 <label class="">Phone number</label>
                 <input type="text" name="phone"  value="{{ old('phone') }}" class="form-control" placeholder="256704666555" required>
                 @if ($errors->has('phone'))
                     <span class="alert-danger">
                         <strong>{{ $errors->first('phone') }}</strong>
                     </span>
                 @endif
             </div>
           </div>
           <div class="col-sm-3">
             <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                 <label class="">Password</label>
                 <input type="password" name="password"  value="{{ old('password') }}" class="form-control" placeholder="****" required>
                 @if ($errors->has('password'))
                     <span class="alert-danger">
                         <strong>{{ $errors->first('password') }}</strong>
                     </span>
                 @endif
             </div>
           </div>
           <div class="col-sm-3">
             <div class="form-group {{ $errors->has('fullaccess') ? ' has-error' : '' }}">
                <label class="float-label">Role</label>
                 <select  name="fullaccess" class="form-control">
                     @foreach($roles as $role)
                         <option value="{{ $role->secroleid }}"> {{ $role->secrolename }}</option>
                     @endforeach
                 </select>
                  @if ($errors->has('fullaccess'))
                     <span class="alert-danger">
                         <strong>{{ $errors->first('fullaccess') }}</strong>
                     </span>
                 @endif
             </div>
           </div>
         </div>
       </fieldset><br>
       <fieldset>
         <legend><h5>2. User Settings</h5></legend>
           <div class="row">
             <div class="col-sm-3">
               <div class="form-group {{ $errors->has('defaultlocation') ? ' has-error' : '' }}">
                 <label class="float-label">Default Location/Inventory</label>
                  <select  name="defaultlocation" class="form-control">
                      @foreach($company_locations as $location)
                          <option value="{{ $location->loccode }}"> {{ $location->locationname }}</option>
                      @endforeach
                  </select>
                   @if ($errors->has('defaultlocation'))
                       <span class="alert-danger">
                           <strong>{{ $errors->first('defaultlocation') }}</strong>
                       </span>
                   @endif
               </div>
             </div>
             <div class="col-sm-3">
               <div class="form-group {{ $errors->has('theme') ? ' has-error' : '' }}">
                 <label class="float-label">Theme</label>
                  <select  name="theme" class="form-control">
                      <option value="default">Default</option>
                      <option value="black">Black</option>
                      <option value="blue">Blue</option>
                      <option value="blue-light">Blue Light</option>
                      <option value="purple">Purple</option>
                      <option value="purple-light">Purple Light</option>
                      <option value="yellow">Yellow</option>
                      <option value="yellow-light">Yellow Light</option>
                      <option value="green">Green</option>
                      <option value="green-light">Green Light</option>

                  </select>
                   @if ($errors->has('theme'))
                       <span class="alert-danger">
                           <strong>{{ $errors->first('theme') }}</strong>
                       </span>
                   @endif
               </div>
             </div>
             <div class="col-sm-3">
               <div class="form-group {{ $errors->has('activate') ? ' has-error' : '' }}">
                 <label class="float-label">Activate</label>
                  <select  name="activate" class="form-control">
                      <option value="1">Yes</option>
                      <option value="0">No - Send Email verification</option>

                  </select>
                   @if ($errors->has('activate'))
                       <span class="alert-danger">
                           <strong>{{ $errors->first('theme') }}</strong>
                       </span>
                   @endif
               </div>
             </div>
           </div>
         </fieldset><br>
         <button class="btn btn-info">Save</button>
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
