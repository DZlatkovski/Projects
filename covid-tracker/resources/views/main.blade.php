@extends('layout.master')
@section('main')

<div class="container mb-5 pb-5">

  <div class="row my-5">

    <div class="col-md-4">
      <form action="{{ route('sync') }}" method="POST">
        @csrf
      <h3 class="my-3"> Choose period for global data: </h3>
      <select class="form-select my-2" name="global-period" id="">
          <option value="daily"> Daily </option>
          <option value="monthly"> Monthly </option>
          <option value="quarterly"> Quarterly </option>
      </select>

            <button id="submit-global" class="btn btn btn-outline-primary"> Get data </button>
      </form>
    </div>

    <div class="col-md-5 offset-1 text-center card bg-light">
      <div class="my-4">
        <h3 class="d-inline"> Global data for Coronavirus </h3>
        <img class="flag" src="Images/earth.png" alt="">
      </div>
      <canvas id="global-chart"></canvas>

      @if(isset($globalData))

          <span class="d-none" id="global-confirmed"> {{ $globalData[0] }} </span>
          <span class="d-none" id="global-deaths"> {{ $globalData[1] }} </span>
          <span class="d-none" id="global-recovered"> {{ $globalData[2] }} </span>
          <span class="d-none" id="global-date"> {{ $globalData[3] }} </span>

      @endif

    </div>

  </div>

  </div>

@endsection

@section('script')
<script>

      let globalConfirmed = document.getElementById('global-confirmed').innerHTML;
      let globalDeaths = document.getElementById('global-deaths').innerHTML;
      let globalRecovered = document.getElementById('global-recovered').innerHTML;
      let globalDate = document.getElementById('global-date').innerHTML;

      let globalChart = document.getElementById('global-chart').getContext('2d');
      let chart2 = new Chart(globalChart, {
          // The type of chart we want to create
          type: 'bar',

          // The data for our dataset
          data: {
              labels: [globalDate],
              datasets: [{
                  label: "Confirmed",
                  data: [globalConfirmed],
                  backgroundColor: "tomato"
                },
                {
                  label: "Deaths",
                  data: [globalDeaths],
                  backgroundColor: "paleturquoise"
                },
                {
                  label: "Recovered",
                  data: [globalRecovered],
                  backgroundColor: "palegreen"
                }
              ]
          },

          // Configuration options go here
          options: {}
      });

</script>

@endsection
