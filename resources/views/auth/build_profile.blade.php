@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="middleName" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="middleName" type="text" class="form-control{{ $errors->has('middleName') ? ' is-invalid' : '' }}" name="middleName" value="{{ old('middleName') }}" autofocus>

                                @if ($errors->has('middleName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('middleName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus>

                                @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthDate" class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                            <div class="col-md-6">
                                <input id="birthDate" type="text" class="datepicker form-control{{ $errors->has('birthDate') ? ' is-invalid' : '' }}" name="birthDate" value="{{ old('birthDate') }}" autofocus>

                                @if ($errors->has('birthDate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthPlace" class="col-md-4 col-form-label text-md-right">{{ __('Birth Place') }}</label>

                            <div class="col-md-6">
                                <input id="birthPlace" type="text" class="form-control{{ $errors->has('birthPlace') ? ' is-invalid' : '' }}" name="birthPlace" value="{{ old('birthPlace') }}" autofocus>

                                @if ($errors->has('birthPlace'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthPlace') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="genderMale" type="radio" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" autofocus>

                                <input id="genderFemale" type="radio" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" autofocus>

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="streetAddress" class="col-md-4 col-form-label text-md-right">{{ __('House Number, Street Name') }}</label>

                            <div class="col-md-6">
                                <input id="streetAddress" type="text" class="form-control{{ $errors->has('streetAddress') ? ' is-invalid' : '' }}" name="streetAddress" value="{{ old('streetAddress') }}" autofocus>

                                @if ($errors->has('streetAddress'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('streetAddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="barangay" class="col-md-4 col-form-label text-md-right">{{ __('Barangay') }}</label>

                            <div class="col-md-6">
                                <input id="barangay" type="text" class="form-control{{ $errors->has('barangay') ? ' is-invalid' : '' }}" name="barangay" value="{{ old('barangay') }}" autofocus>

                                @if ($errors->has('barangay'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('barangay') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" autofocus>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postalCode" class="col-md-4 col-form-label text-md-right">{{ __('Postal Code') }}</label>

                            <div class="col-md-6">
                                <input id="postalCode" type="text" class="form-control{{ $errors->has('postalCode') ? ' is-invalid' : '' }}" name="postalCode" value="{{ old('postalCode') }}" autofocus>

                                @if ($errors->has('postalCode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postalCode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
