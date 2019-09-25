@extends('frontend.layouts.app')

@section('content')
<div class="container">
  @php
    $countries = \App\Modules\Shared\Models\Country::all();
    $service_categories = \App\Modules\Shared\Models\ServiceCategory::all();
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
                  <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                      @csrf
                      <input type="hidden" name="user_type" value="professional">
                      <div class="form-group row">
                          <label for="country_id" class="col-md-4 col-form-label text-md-right">Country <span class="required-field">*</span></label>

                          <div class="col-md-6">
                              <select id="country_id" class="form-control @error('country_id') is-invalid @enderror" name="country_id" value="{{ old('country_id') }}" required >
                                @foreach ($countries as $country)
                                  <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                              </select>

                              @error('country_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name <span class="required-field">*</span></label>

                          <div class="col-md-6">
                              <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                              @error('first_name')
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
                          <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name <span class="required-field">*</span></label>

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
                          <label for="service_categories" class="col-md-4 col-form-label text-md-right">Service Categories <span class="required-field">*</span></label>

                          <div class="col-md-6">
                              <select multiple id="service_categories" class="form-control @error('service_categories') is-invalid @enderror" name="service_categories[]" value="{{ old('service_categories') }}" required >
                                @foreach ($service_categories as $service_category)
                                  <optgroup label="{{$service_category->name}}">
                                    @foreach ($service_category->sub_categories as $sub_category)
                                      <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                    @endforeach
                                  </optgroup>
                                @endforeach
                              </select>

                              @error('service_categories')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number <span class="required-field">*</span></label>

                          <div class="col-md-6">
                              <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required >

                              @error('phone_number')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="company_address" class="col-md-4 col-form-label text-md-right">Company Address</label>

                          <div class="col-md-6">
                              <input id="company_address" type="text" class="form-control @error('company_address') is-invalid @enderror" name="company_address" value="{{ old('company_address') }}" >

                              @error('company_address')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="company_name" class="col-md-4 col-form-label text-md-right">Company Name</label>

                          <div class="col-md-6">
                              <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" >

                              @error('company_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="professional_photo" class="col-md-4 col-form-label text-md-right">Company Logo/Profile Pic <span class="required-field">*</span></label>

                          <div class="col-md-6">
                              <input id="professional_photo" type="file" class="form-control @error('professional_photo') is-invalid @enderror" name="professional_photo" value="{{ old('professional_photo') }}" >

                              @error('professional_photo')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="display" class="col-md-4 col-form-label text-md-right">Profile Visible as</label>

                          <div class="col-md-6">
                              <select id="display" class="form-control @error('display') is-invalid @enderror" name="display" value="{{ old('display') }}" required >
                                  <option value="person" selected>Individual</option>
                                  <option value="company">Company</option>
                              </select>

                              @error('display')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>



                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }} <span class="required-field">*</span></label>

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
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }} <span class="required-field">*</span></label>

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
                      <div class="form-group row">
                          <label for="description" class="col-md-4 col-form-label text-md-right">Brief Description of your services <span class="required-field">*</span></label>

                          <div class="col-md-6">
                              <textarea  class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" >{{ old('description') }}</textarea>

                              @error('description')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
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
                  <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                      @csrf
                      <input type="hidden" name="user_type" value="vendor">
                      <div class="form-group row">
                          <label for="nationality" class="col-md-4 col-form-label text-md-right">Country</label>

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
                          <label for="company_name" class="col-md-4 col-form-label text-md-right">Shop Name</label>

                          <div class="col-md-6">
                              <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" >

                              @error('company_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="company_address" class="col-md-4 col-form-label text-md-right">Shop Address</label>

                          <div class="col-md-6">
                              <input id="company_address" type="text" class="form-control @error('company_address') is-invalid @enderror" name="company_address" value="{{ old('company_address') }}" >

                              @error('company_address')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="phone_number" class="col-md-4 col-form-label text-md-right">Primary Phone Number <span class="required-field">*</span></label>

                          <div class="col-md-6">
                              <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required >

                              @error('phone_number')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="phone_number" class="col-md-4 col-form-label text-md-right">Other Phone Number</label>

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
                          <label for="business_reg_no" class="col-md-4 col-form-label text-md-right">Business Reg No</label>

                          <div class="col-md-6">
                              <input id="business_reg_no" type="text" class="form-control @error('business_reg_no') is-invalid @enderror" name="business_reg_no" value="{{ old('business_reg_no') }}" >

                              @error('business_reg_no')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="tax_id" class="col-md-4 col-form-label text-md-right">Tax ID</label>

                          <div class="col-md-6">
                              <input id="tax_id" class="form-control @error('tax_id') is-invalid @enderror" name="tax_id" value="{{ old('tax_id') }}" required >


                              @error('tax_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="professional_photo" class="col-md-4 col-form-label text-md-right">Company Logo/Profile Pic <span class="required-field">*</span></label>

                          <div class="col-md-6">
                              <input id="professional_photo" type="text" class="form-control @error('professional_photo') is-invalid @enderror" name="professional_photo" value="{{ old('professional_photo') }}" >

                              @error('professional_photo')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">Your Surname</label>

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
                          <label for="middle_name" class="col-md-4 col-form-label text-md-right">Your Middle Name</label>

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
                          <label for="last_name" class="col-md-4 col-form-label text-md-right">Your Last Name</label>

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
