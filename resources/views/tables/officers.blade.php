@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
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
               @foreach ($officers as $officer )


              <tr>
                <td>
                  {{  $officer['officer_name'] }}
                </td>
                <td>
                  {{ $officer['job_role']}}
                </td>
                <td>
                    {{$officer['hospital_name']}}
                </td>
                <td class="text-center">
                  {{ number_format($officer['salary'],2,'.')}}
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
