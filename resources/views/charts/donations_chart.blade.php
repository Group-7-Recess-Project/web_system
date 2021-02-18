@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">


          <div class="col-md-12">
          <form class="form" method="post" action="{{ route('charts') }}">
            @csrf
            @method('put')
            <button type="submit" class="btn">{{ __('Load Graph') }}</button>
            <select name="month" class="form-control" style="background-color: #525f7f;">
            @foreach ($availableMonths as $month )
            <option value="{{$month->month}}">{{$month->month}}</option>

            @endforeach
          </select>

        </form>
      </div>
      <h1 class="card-title">
        Donations in @php
        if(isset($donations[0]['month'])){
        echo $donations[0]['month'];}
        @endphp
</h1>
      </div>
      <div class="card-body">
        {{-- <div class="table-responsive">
        </div> --}}

        <div id="barchart_material" ></div>
        {{$donations}}
    </div>
  </div>
</div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Donor', 'Amount']
          @php
          foreach ($donations as $donation){
            echo ",['".$donation['donor_name']."',".$donation['amount']."]";
          }
          @endphp
          
        ]);
        // var options = { width: 1100, height: 600, titlePosition: 'none', legend: { position: "​none" } }
        var options = {
          chart: {
            title: @php
            if(isset($donations[0]['month'])){
            echo "'Graph for Donations Made in ".$donations[0]['month']."'";}
            @endphp,
            // subtitle: '',
          },
          bars: 'vertical' ,// Required for Material Bar Charts. 
          titlePosition: 'center', 
          // legend: {position: 'none'}
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
@endsection
