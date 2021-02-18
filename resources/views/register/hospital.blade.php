@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('content')
<div class="row">
    <div class="col-md-5 ml-auto">
    </div>
<div class="card col-md-5 mr-auto center">
    <div class="card-header">
        <h1 class="title">{{ __('Register Hospital') }}</h1>
    </div>
    <form method="post" action="{{ route('registerHospital') }}" autocomplete="off">
        <div class="card-body">
            @csrf
            @if(strstr(session($key ?? 'status'),'failed'))
            @include('alerts.failure')
            @else
            @include('alerts.success')
            @endif

            <div class="form-group">
                <label>{{ __('Hospital Name') }}</label>
                <input type="text" name="hospital_name" class="form-control" placeholder="{{ __('Busesa Hospital') }}" value="" required>

            </div>

            <div class="form-group">
                <label>{{ __('Hospital Category') }}</label>
                {{-- <input type="text" name="hospital_category" class="form-control" placeholder="{{ __('General') }}" value="" required> --}}
            <select name="hospital_category" class="form-control" style="background-color: #525f7f;">
                <option value="General">General Hospital</option>
                <option value="Regional">Regional Referral Hospital</option>
                <option value="National">National Referral Hospital</option>
            </select>
            </div>
            <div class="form-group">
                <label>{{ __('District') }}</label>
                {{-- <input type="text" name="district" class="form-control" placeholder="{{ __('Kampala') }}" value="" required> --}}
                <Select name="district" class="form-control" style="background-color: #525f7f;">
                    <option value="Kampala">Kampala</option>
                    <option value="Iganga">Iganga</option>
                    <option value="Mbarara">Mbarara</option>
                    <option value="Lyantonde">Lyantonde</option>
                    <option value="Masaka">Masaka</option>
                    <option value="Rakai">Rakai</option>
                    <option value="Kyotera">Kyotera</option>
                    <option value="Jinja">Jinja</option>
                    <option value="Kiruhura">Kiruhura</option>
                    <option value="Fortportal">Fortportal</option>
                    <option value="Hoima">Hoima</option>
                    <option value="OTHER">OTHER(SPECIFY)</option>
                </Select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">{{ __('Register') }}</button>
        </div>
    </form>
</div>
</div>
@endsection
