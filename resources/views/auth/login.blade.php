@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login-box card">
                <div class="login-header card-header mx-auto">{{ __('messages.Login') }}</div>
                
                <div class="login-body card-body">
                    <from method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="from-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{__('messages.E-Mail Address') }}</label>
                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                
                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="from-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{__('messages.Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="from-control{{$errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="from-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type='checkbox' name="remember" {{ old('remember')? 'checked' : ' '}}> {{__('messages.Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="from-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-purimary">
                                    {{ __('messages.Login') }}
                                </button>
                            </div>
                        </div>
                    </from>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
