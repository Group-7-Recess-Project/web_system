@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h1 class="title">At a glance</h1>
        </div>
        <div class="card-body all-icons">
          <div class="row">
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail" style="border: solid #525f7f;">
                {{-- <i class="tim-icons icon-alert-circle-exc">40</i> --}}
                <a href="{{ route('patients') }}">
                  
                  <h3>Cases</h3>
                  <hr>
                <h4>{{($total['patients'])}}</h4>
               
              </a>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail" style="border: solid #525f7f;">
                {{-- <i class="tim-icons icon-align-center"></i> --}}
                <a href="{{ route('officers') }}">
                 
                <h3>Officers</h3>
                <hr>
                <h4>{{ $total['officers'] }}</h4>
                
              </a>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail" style="border: solid #525f7f;">
                {{-- <i class="tim-icons icon-align-left-2"></i> --}}
                <a href ="{{ route('hospitals') }}">
                 
                <h3>Hospitals</h3>
                <hr>
                <h4>{{ $total['hospitals'] }}</h4>
                
              </a>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
              <div class="font-icon-detail" style="border: solid #525f7f; background: black;">
                
               <a href ={{'#'}} style=":hover{color: blue;}">
                <h3 class="mb-0 mt-0">Donations</h3>
                <hr>
                <h4 class="mb-0 mt-0">UGX<br>{{ (number_format($total['donations']->total)) }}</h4>
              </a>
              </div>
            </div>
            <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                <div class="font-icon-detail" style="border: solid #525f7f;">
                  {{-- <i class="tim-icons icon-atom"></i> --}}
                  <a href="{{ route('payments') }}">
                  
                    <h3>Payments</h3>
                    <hr>
                  <h4>{{ $total['payments'] }}</h4>
                
                </a>
                </div>
              </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
          <h1 class="card-title"> Pending Cases</h1>
        </div>
        <div class="card-body">
          <div class="table-responsiv">
            <thead class=" text-primary">
              <tr>
                <th>
                  {{-- Hospital Name --}}
                </th>
                <th>
                  {{-- category --}}
                </th>
              </tr>
            </thead>
            <tbody>
               {{-- @foreach ($hospitals as $hospital ) --}}


              <tr>
                <td>
                  {{-- {{  $hospital['hospital_name'] }} --}}
                </td>
                <td>
                    {{-- {{$hospital['hospital_category']}} --}}
                </td>
              </tr>
              {{-- @endforeach --}}
            </tbody>
        </div>
    </div>
    </div>
@endsection
