@extends('frontend.layouts.app')

@section('content')
<div class="container">
  @php
    $countries = \App\Country::all();
    $service_categories = \App\ServiceCategory::all();
  @endphp
    <div class="row justify-content-center">

        <div class="col-md-12">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Professional Registration</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Vendor(Shop) Registration</a>

            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="card">
              <div class="card-header">All Professionals use this form</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <input type="hidden" name="user_type" value="student">
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">Surname</label>

                          <div class="col-md-6">
                              <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="middle_name" class="col-md-4 col-form-label text-md-right">Middle Name</label>

                          <div class="col-md-6">
                              <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" autocomplete="middle_name" >

                              @error('middle_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                          <div class="col-md-6">
                              <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">

                              @error('last_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="nationality" class="col-md-4 col-form-label text-md-right">Nationality</label>

                          <div class="col-md-6">
                              <select id="nationality" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required >
                                @foreach ($countries as $country)
                                  <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                              </select>

                              @error('nationality')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="national id" class="col-md-4 col-form-label text-md-right">National Id</label>

                          <div class="col-md-6">
                              <input id="national_id" type="text" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" >

                              @error('national_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="school_id" class="col-md-4 col-form-label text-md-right">category</label>

                          <div class="col-md-6">
                              <select id="school_id" class="form-control @error('school_id') is-invalid @enderror" name="school_id" value="{{ old('school_id') }}" required >
                                @foreach ($service_categories as $service_category)
                                  <option value="{{$service_category->id}}">{{$service_category->name}}</option>
                                @endforeach
                              </select>

                              @error('school_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="student_school_id" class="col-md-4 col-form-label text-md-right">Professional ID</label>

                          <div class="col-md-6">
                              <input id="student_school_id" type="text" class="form-control @error('student_school_id') is-invalid @enderror" name="student_school_id" value="{{ old('student_school_id') }}" required >

                              @error('student_school_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="school_id" class="col-md-4 col-form-label text-md-right">Gender</label>

                          <div class="col-md-6">
                              <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required >
                                  <option value="male" selected>Male</option>
                                  <option value="female">Female</option>
                              </select>

                              @error('gender')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Date Of Birth</label>

                          <div class="col-md-6">
                              <input id="date_of_birth" type="text" class="datepicker form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" >

                              @error('date_of_birth')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register as a Professional
                              </button>
                          </div>
                      </div>
                  </form>
            </div>
          </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="card">
              <div class="card-header">Vendors this Form</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <input type="hidden" name="user_type" value="parent">
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">Surname</label>

                          <div class="col-md-6">
                              <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="middle_name" class="col-md-4 col-form-label text-md-right">Middle Name</label>

                          <div class="col-md-6">
                              <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" autocomplete="middle_name" >

                              @error('middle_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>

                          <div class="col-md-6">
                              <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">

                              @error('last_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="nationality" class="col-md-4 col-form-label text-md-right">Nationality</label>

                          <div class="col-md-6">
                              <select id="nationality" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required >
                                @foreach ($countries as $country)
                                  <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                              </select>

                              @error('nationality')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="national id" class="col-md-4 col-form-label text-md-right">National Id</label>

                          <div class="col-md-6">
                              <input id="national_id" type="text" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" >

                              @error('national_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="school_id" class="col-md-4 col-form-label text-md-right">Gender</label>

                          <div class="col-md-6">
                              <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required >
                                  <option value="male" selected>Male</option>
                                  <option value="female">Female</option>
                              </select>

                              @error('gender')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                          <div class="col-md-6">
                              <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required>

                              @error('phone_number')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register as  a Vendor
                              </button>
                          </div>
                      </div>
                  </form>
            </div>
          </div>

            </div>

          </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
  $( document ).ready(function() {
    $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
});
  });
</script>
@endsection
