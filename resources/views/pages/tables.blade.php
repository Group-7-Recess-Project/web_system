@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
    <div class="col-md-6">
      <div class="card ">
        <div class="card-header">
          <h1 class="card-title"> Patients</h1>
        </div>
        <div class="card-body">
          <div class="table">
            <table class="table tablesorter table-stripped" id="">
              <thead class=" text-primary">
                <tr>
                  <th>
                    Name
                  </th>
                  <th>
                    Category
                  </th>
                  <th>
                    Hospital
                  </th>
                  <th class="text-center">
                    Salary
                  </th>
                </tr>
              </thead>
              <tbody>
                 {{-- @foreach ($officers as $officer ) --}}


                <tr>
                  <td>
                    {{-- {{  $officer['office_name'] }} --}}
                  </td>
                  <td>
                    {{-- {{ $officer['job_role']}} --}}
                  </td>
                  <td>
                      {{-- {{$officer['hospital_name']}} --}}
                  </td>
                  <td class="text-center">
                    {{-- {{ $officer['salary']}} --}}
                  </td>
                </tr>
                {{-- @endforeach --}}
              </tbody>
            </table>
          </div>
          <a href="{{ route('patients')  }}">
            <i class="tim-icons icon-link-72"></i>
            {{ __('See More...') }}
        </a>
        </div>


      </div>

    </div>

    <div class="col-md-6">
        <div class="card ">
          <div class="card-header">
            <h1 class="card-title"> Donations</h1>
          </div>
          <div class="card-body">
            <div class="table">
              <table class="table tablesorter table-stripped" id="">
                <thead class=" text-primary">
                  <tr>
                    <th>
                      Name
                    </th>
                    <th>
                      Category
                    </th>
                    <th>
                      Hospital
                    </th>
                    <th class="text-center">
                      Salary
                    </th>
                  </tr>
                </thead>
                <tbody>
                   {{-- @foreach ($officers as $officer ) --}}


                  <tr>
                    <td>
                      {{-- {{  $officer['office_name'] }} --}}
                    </td>
                    <td>
                      {{-- {{ $officer['job_role']}} --}}
                    </td>
                    <td>
                        {{-- {{$officer['hospital_name']}} --}}
                    </td>
                    <td class="text-center">
                      {{-- {{ $officer['salary']}} --}}
                    </td>
                  </tr>
                  {{-- @endforeach --}}
                </tbody>
              </table>
            </div>
            {{-- <a href="{{ route('donations')  }}"> --}}
              <i class="tim-icons icon-link-72"></i>
              {{ __('See More...') }}
          </a>
          </div>


        </div>

      </div>


  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="card ">
        <div class="card-header">
          <h1 class="card-title">Hospitals</h1>
        </div>
        <div class="card-body">
          <div class="table">
            <table class="table tablesorter table-stripped" id="">
              <thead class=" text-primary">
                <tr>
                  <th>
                    Name
                  </th>
                  <th>
                    Category
                  </th>
                  <th>
                    Hospital
                  </th>
                  <th class="text-center">
                    Salary
                  </th>
                </tr>
              </thead>
              <tbody>
                 {{-- @foreach ($officers as $officer ) --}}


                <tr>
                  <td>
                    {{-- {{  $officer['office_name'] }} --}}
                  </td>
                  <td>
                    {{-- {{ $officer['job_role']}} --}}
                  </td>
                  <td>
                      {{-- {{$officer['hospital_name']}} --}}
                  </td>
                  <td class="text-center">
                    {{-- {{ $officer['salary']}} --}}
                  </td>
                </tr>
                {{-- @endforeach --}}
              </tbody>
            </table>
          </div>
          <a href="{{ route('hospitals')  }}">
            <i class="tim-icons icon-link-72"></i>
            {{ __('See More...') }}
        </a>
        </div>


      </div>

    </div>

    <div class="col-md-6">
        <div class="card ">
          <div class="card-header">
            <h1 class="card-title"> Officers</h1>
          </div>
          <div class="card-body">
            <div class="table">
              <table class="table tablesorter table-stripped" id="">
                <thead class=" text-primary">
                  <tr>
                    <th>
                      Name
                    </th>
                    <th>
                      Category
                    </th>
                    <th>
                      Hospital
                    </th>
                    <th class="text-center">
                      Salary
                    </th>
                  </tr>
                </thead>
                <tbody>
                   {{-- @foreach ($officers as $officer ) --}}


                  <tr>
                    <td>
                      {{-- {{  $officer['office_name'] }} --}}
                    </td>
                    <td>
                      {{-- {{ $officer['job_role']}} --}}
                    </td>
                    <td>
                        {{-- {{$officer['hospital_name']}} --}}
                    </td>
                    <td class="text-center">
                      {{-- {{ $officer['salary']}} --}}
                    </td>
                  </tr>
                  {{-- @endforeach --}}
                </tbody>
              </table>
            </div>
            <a href="{{ route('officers')  }}">
              <i class="tim-icons icon-link-72"></i>
              {{ __('See More...') }}
          </a>
          </div>


        </div>

      </div>


  </div>

  <div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h1 class="card-title"> Payments</h1>
      </div>
      <div class="card-body">
        <div class="table">
          <table class="table tablesorter table-stripped" id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Name
                </th>
                <th>
                  Category
                </th>
                <th>
                  Hospital
                </th>
                <th class="text-center">
                  Salary
                </th>
              </tr>
            </thead>
            <tbody>
               {{-- @foreach ($officers as $officer ) --}}


              <tr>
                <td>
                  {{-- {{  $officer['office_name'] }} --}}
                </td>
                <td>
                  {{-- {{ $officer['job_role']}} --}}
                </td>
                <td>
                    {{-- {{$officer['hospital_name']}} --}}
                </td>
                <td class="text-center">
                  {{-- {{ $officer['salary']}} --}}
                </td>
              </tr>
              {{-- @endforeach --}}
            </tbody>
          </table>
        </div>
        <a href="{{ route('payments')  }}">
          <i class="tim-icons icon-link-72"></i>
          {{ __('See More...') }}
      </a>
      </div>


    </div>

  </div>


</div>



</div>


@endsection
