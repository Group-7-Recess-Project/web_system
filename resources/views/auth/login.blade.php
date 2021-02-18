@extends('layouts.app', ['class' => 'login-page', 'contentClass' => 'login-page'])
<style>
    img{

    }
</style>
@section('content')
    <div class="col-md-10 text-center ml-auto mr-auto">
        {{-- <h3 class="">CoCaRS Ug</h3> --}}
    </div>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-tranparent ">
                {{-- <div class="card-header mt-0"> --}}
                    {{-- <img class = "mb-5" src="https://images.benefitspro.com/contrib/content/uploads/sites/412/2020/04/coronavirus-and-cells-and-people-faces.jpg" alt=""> --}}
                    <h1 class="card-title text-center">Log in</h1>
                {{-- </div> --}}
                
                <div class="card-body mt-0 mb-0">
                    {{-- <p class="text-white mt-0">Sign in with <strong>admin@black.com</strong> and the password <strong>secret</strong></p> --}}
                    <div class="text-white text-center"><h4 class="card-title text-center">Email</h4></div>
                    <div class="input-group mt-0{{ $errors->has('email') ? ' has-danger' : '' }}">
                        {{-- <div class="input-group-prepend ">
                            <div class="input-group-text text-white">
                                <i class="tim-icons icon-email-85 text-white"></i>
                            </div>
                        </div> --}}
                        <input type="email" name="email" class="form-control p-4 {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="text-white mt-5 text-center"> <h4 class="card-title text-center">Password</h4></div>
                    <div class="input-group mt-3 mb-0{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <input type="password" placeholder="{{ __('Password') }}" name="password" class="form-control p-4{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    
                    <div class="text-center mt-0">
                        <h1>
                            <button type="submit" class="btn text-center" >{{ __('Log In') }}</button>
                        </h1>
                    </div>
                    {{-- <hr> --}}
                    <div class="pull-left">
                        <h6>
                            <a href="{{ route('register') }}" class="link footer-link">{{ __('Create Account') }}</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a href="{{ route('password.request') }}" class="link footer-link">{{ __('Forgot password?') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
