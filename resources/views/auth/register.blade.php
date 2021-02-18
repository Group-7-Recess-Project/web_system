@extends('layouts.app', ['class' => 'register-page', 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
        <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                    <i class="tim-icons icon-wifi"></i>
                </div>
                <div class="description">
                    <h1 class="info-title">{{ __('Spread the Covid-19 Message') }}</h1>
                    <p class="description">
                        {{ __('Observe the SOP\'s') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="tim-icons icon-triangle-right-17"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Fully Accessible From anywhere') }}</h3>
                    <p class="description">
                        {{ __('This system is at your service 24/7. Access it from anywhere around the world.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Approved by WHO') }}</h3>
                    <p class="description">
                        {{ __('Analyze everthing professionally') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-5 mr-auto">
            <div class="card card-register card-transparent">
                <h1 class="card-title text-center">Register</h1>
                {{-- <div class="card-header">
                       <h4 class="card-title text-center text-primary m-5 p-3">{{ __('Register') }}</h4>
                </div> --}}
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body">
                        <h4 class="card-title text-center text-white">Full Name</h4>
                        <div class="input-group mt-1{{ $errors->has('name') ? ' has-danger' : '' }}">
                            {{-- <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div> --}}
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <h4 class="card-title text-center mt-4">Email</h4>
                        <div class="input-group mt-0{{ $errors->has('email') ? ' has-danger' : '' }}">
                            {{-- <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div> --}}
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <h4 class="card-title text-center mt-4">Choose Role</h4>
                        <div class="input-group mt-0">
                          
                            <select name="role" class="form-control" style="background-color: #525f7f;">
                                <option value="admin">Administrator</option>
                                <option value="director">Director</option>
                            </select>
                        </div>
                        <h4 class="card-title text-center mt-4">Password</h4>
                        <div class="input-group mt-0{{ $errors->has('password') ? ' has-danger' : '' }}">
                          
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <h4 class="card-title text-center mt-4">Confirm Password</h4>
                        <div class="input-group mt-0">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}">
                        </d>
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                {{ __('I agree to the') }}
                                <a href="#">{{ __('terms and conditions') }}</a>.
                            </label>
                        </div>
                    </div>
                    <div class="card-footer flex-column">
                        <button type="submit" class="btn btn-text-center">{{ __('Register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
