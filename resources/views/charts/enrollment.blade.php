@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h1 class="card-title"> variation in Enrollment</h1>
      </div>
      <div class="card-body">
        {{-- <div class="table-responsive">
        </div> --}}
        
        <div id="barchart_material" style="width: 900px; height: 500px;"></div>
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
          foreach ($general_officers as $officer){
            echo ",['".$officer['donor_name']."',".$officer['amount']."]";
          }
          @endphp
          
        ]);
        // var options = { width: 1100, height: 600, titlePosition: 'none', legend: { position: "​none" } }
        var options = {
          chart: {
            title: @php
            if(isset($general_officers[0]['month'])){
            echo "'Graph for Donations Made in ".$general_officers[0]['month']."'";}
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
