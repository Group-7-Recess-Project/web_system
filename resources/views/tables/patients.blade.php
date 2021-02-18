@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
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
                  Patient Name
                </th>
                <th>
                  Date Registered
                </th>
                <th>
                  Gender
                </th>
                <th class="text-center">
                  Officer
                </th>
              </tr>
            </thead>
            <tbody>
               @foreach ($patients as $patient )


              <tr>
                <td>
                  {{  $patient['name'] }}
                </td>
                <td>
                  {{ $patient['date']}}
                </td>
                <td>
                    {{$patient['gender']}}
                </td>
                <td class="text-center">
                  {{ $patient['officer']}}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="{{ URL::previous() }}">Back</a>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection
