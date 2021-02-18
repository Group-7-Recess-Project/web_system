@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('content')
<div class="row">
    <div class="col-md-5 ml-auto">
    </div>
<div class="card col-md-5 mr-auto center">
    <div class="card-header">
        <h1 class="title">{{ __('Register Donnation') }}</h1>
    </div>
    <form method="post" action="{{ route('registerDonation') }}" autocomplete="off">
        <div class="card-body">
            @csrf

            @if(strstr(session($key ?? 'status'),'failed'))
            @include('alerts.failure')
            @else
            @include('alerts.success')
            @endif
            
            <div class="form-group">
                <label>{{ __('Donor Name') }}</label>
                <input type="text" name="donor_name" class="form-control" placeholder="{{ __('Name of Donor') }}" value="" required>

            </div>

            <div class="form-group">
                <label>{{ __('Amount(UGX)') }}</label>
                <input type="number" name="amount" class="form-control" placeholder="{{ __('UGX 1000000') }}" value="" required>

            </div>
            <div class="form-group">
                <label>{{ __('Date') }}</label>
                <input type="date" name="date" class="form-control" placeholder="{{ __('Select') }}" value="" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">{{ __('Register') }}</button>
        </div>
    </form>
</div>
</div>
@endsection
