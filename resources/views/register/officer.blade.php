@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('content')
<div class="row">
    <div class="col-md-5 ml-auto">
    </div>
<div class="card col-md-5 mr-auto center">
    <div class="card-header">
        <h1 class="title">{{ __('Register Health Officer') }}</h1>
    </div>
    <form method="post" action="{{ route('registerOfficer') }}" autocomplete="off">
        <div class="card-body">
            @csrf
            @if(strstr(session($key ?? 'status'),'failed'))
            @include('alerts.failure')
            @else
            @include('alerts.success')
            @endif
            
            
            

            <div class="form-group">
                <label>{{ __('Officer Name') }}</label>
                <input type="text" name="officer_name" class="form-control" placeholder="{{ __('Officer Name') }}" value="" required>

            </div>

            <div class="form-group">
                <label>{{ __('Officer Username') }}</label>
                <input type="text" name="username" class="form-control" placeholder="{{ __('username.') }}" value="" required>

            </div>
            <div class="form-group">
                <label>{{ __('Officer Contact') }}</label>
                <input type="text" name="email" class="form-control" placeholder="{{ __('example@here.com') }}" value="" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">{{ __('Register') }}</button>
        </div>
    </form>
</div>
</div>
@endsection
