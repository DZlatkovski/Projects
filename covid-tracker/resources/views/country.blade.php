@extends('layout.master')
@section('main')

<div class="container mb-5 pb-5">
    <div class="row my-5">
        <div class="col-md-4">
    
          <form action="{{ route('country-data') }}" method="POST">
            @csrf
          <h3 class="my-3"> Select country: </h3>
          <select class="form-select" name="countries">
            @foreach($countries as $country)
              <option value="{{ $country->country }}"> {{ $country->country }} </option>
            @endforeach
          </select>
          <h3 class="my-3"> Select period: </h3>
          <select class="form-select my-2" name="country-period" id="">
              <option value="daily"> Daily </option>
              <option value="monthly"> Monthly </option>
              <option value="quarterly"> Quarterly </option>
          </select>
    
          <button id="submit-country" class="btn btn-success mt-4"> Get data </button>

        </form>
      
        </div>
    
        <div class="col-md-5 offset-2 text-center card bg-light">
          @if(isset($countryData))
            <div class="mt-4">
              <h2 class="d-inline"> {{ $countryData[4] }} </h2>
              <img class="flag border border-dark" src="Images/{{ $countryData[4] ?? "earth"}}.png" alt="">
            </div>
              
              <canvas class="mb-4" id="country-chart"></canvas>

              <span class="d-none" id="confirmed"> {{ $countryData[0] }} </span>
              <span class="d-none" id="deaths"> {{ $countryData[1] }} </span>
              <span class="d-none" id="recovered"> {{ $countryData[2] }} </span>
              <span class="d-none" id="date"> {{ $countryData[3] }} </span>
          @endif
        </div>

    </div>

      <div class="row bg-light text-center card">
          <div class="col-md-8 offset-2">
            <h1 class="my-5"> All data from day one </h1>        
            <canvas id="all-data-country-chart" class="mb-5"></canvas>
            <span id="all-data" class="d-none"> {{ $countriesData }}</span>
          </div>
      </div>

@endsection

@section('script')

<script>

    let confirmed = document.getElementById('confirmed').innerHTML;
    let deaths = document.getElementById('deaths').innerHTML;
    let recovered = document.getElementById('recovered').innerHTML;
    let date = document.getElementById('date').innerHTML;

    let countryChart = document.getElementById('country-chart').getContext('2d');
    let chart = new Chart(countryChart, {
        type: 'bar',
        data: {
            labels: [date],
            datasets: [{
                label: "Confirmed",
                data: [confirmed],
                backgroundColor: "tomato",
            },
            {
                label: "Deaths",
                data: [deaths],
                backgroundColor: "paleturquoise"
            },
            {
                label: "Recovered",
                data: [recovered],
                backgroundColor: "palegreen"
            }
            ]     
        },
        options: {}
    });

    let AllData = document.getElementById('all-data').innerHTML;

    AllData = JSON.parse(AllData)

    let n = $(AllData).length;

    let dataConfirmed = [];
    let dataRecovered = [];
    let dataDeaths = [];
    let dataActive = [];
    let dataDate = [];

    for(i = 0; i < n; i++)
    {
      allDataConfirmed = AllData[i]['confirmed'];
      allDataRecovered = AllData[i]['recovered'];
      allDataDeaths = AllData[i]['deaths'];
      allDataActive = AllData[i]['active'];
      allDataDate = AllData[i]['date'];

      dataConfirmed += ',' + allDataConfirmed;
      dataRecovered += ',' + allDataRecovered;
      dataDeaths += ',' + allDataDeaths;
      dataActive += ',' + allDataActive;
      dataDate += ',' + allDataDate;

    }

    dataRecovered = dataRecovered.split(',');
    dataConfirmed = dataConfirmed.split(',');
    dataDeaths = dataDeaths.split(',');
    dataActive = dataActive.split(',');
    dataDate = dataDate.split(',');

    let countryChart1 = document.getElementById('all-data-country-chart').getContext('2d');
    let chart1 = new Chart(countryChart1, {
        type: 'line',
        data: {
            labels: dataDate,
            datasets: [{
                label: "Confirmed",
                data: dataConfirmed,
                backgroundColor: "tomato",
                fill : false,
            },
            {
                label: "Recovered",
                data: dataRecovered,
                backgroundColor: "palegreen",
                fill : false,
            },
            {
                label: "Deaths",
                data: dataDeaths,
                backgroundColor: "paleturquoise",
                fill : false,
            },
            {
                label: "Active",
                data: dataActive,
                backgroundColor: "khaki",
                fill : false,
            }
            ]     
        },
        options: {
          
        }
    });

</script>
@endsection
