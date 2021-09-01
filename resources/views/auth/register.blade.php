@extends('frontend.frontend-layout.master')

@section('frontend-content')
<div class="container py-5">
    <h3 class="text-primary font-bold text-center"><i>Register</i></h3>
    <div class="row justify-content-center my-3">
        <div class="col-md-8">
            <div class="card p-5 border border-dark">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
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

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Company Type</label>

                            <div class="col-md-6">
                                <select class="form-control @error('name') is-invalid @enderror" name="company_type" value="{{ old('company_type') }}" required autocomplete="company_type" autofocus>
                                    <option value=""></option>
                                    <option value="IT/Communication">IT/Communication</option>
                                    <option value="Hospital">Hospital</option>
                                    <option value="Bank">Bank</option>
                                    <option value="Market & Store">Market & Store</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Restaurant">Restaurant</option>
                                    <option value="Sales & Marketing">Sales & Marketing</option>
                                    <option value="Health & Beauty">Health & Beauty</option>
                                    <option value="Travel & Tourism">Travel & Tourism</option>
                                    <option value="Entertainment & Sports">Entertainment & Sports</option>
                                    <option value="Education">Education</option>
                                    <option value="Finance & Insurance">Finance & Insurance</option>
                                    <option value="Architecture & Design">Architecture & Design </option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Government">Government</option>
                                </select>
                                @error('company_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_no" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}" required autocomplete="phone_no" autofocus>

                                @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_of_employee" class="col-md-4 col-form-label text-md-right">Number of Employee</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('no_of_employee') is-invalid @enderror" name="no_of_employee" value="{{ old('no_of_employee') }}" required autocomplete="no_of_employee" autofocus>

                                @error('no_of_employee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9 offset-md-4">
                                Already have an account,
                                <a class="" href="{{route('login')}}">
                                Login Here!
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
