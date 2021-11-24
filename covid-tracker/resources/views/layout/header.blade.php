<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <style>

      body{
        background-color: rgb(250, 255, 253);
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      }

      img{
        width: 15%;
      }

      .flag{
        width: 60px;
        height: 40px;
      }

      .safety{
        width: 140px;
        height: 120px;
      }

    </style>
    <title>COVID-Tracker_by_D_Z</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e3f2fd;">

          <div class="col container-fluid">
            <ul class="navbar-nav">
              <li class="nav-item get-global-button">
                <form action="{{ route('back-to-global') }}" method="POST">
                  @csrf
                  <button class="btn btn-info m-2"> Get global data </button>
              </form>
              </li>
              <li class="nav-item get-by-country-button">
                <form action="{{ route('country-data') }}" method="POST">
                  @csrf
                    <button class="btn btn-primary m-2"> Get by country </button>
                </form>
              </li>
              <li class="nav-item sync">
                <form action="{{ route('sync-all-data') }}" method="POST">
                  @csrf
                    <button  id="" class="btn btn btn-outline-primary m-2"> Sync </button>
                </form>
              </li>
            </ul>
          </div>

        </nav>
      </div>
    </div>
