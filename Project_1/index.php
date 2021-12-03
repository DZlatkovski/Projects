<?php
include 'database_project_01.php';
$result = mysqli_query($conn, "SELECT * FROM `cards`");
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7ab2b0f5ad.js" crossorigin="anonymous"></script>
    <title>Project-1_D_Z</title>
  </head>

  <body>

    <!-- NAVBAR START -->
      <nav class="navbar navbar-expand-lg navbar-light bg-warning">

        <a class="navbar-brand" href="#"><div class="imgLogo text-center ml-5 pt-3"><img src="assets/images/Logo.png" width="50"><p class="brandname pt-2"><b>BRAINSTER</b></p></div></a>

        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i id="nav-button-switch" class="fas fa-bars fa-2x"></i>
        </button>

        <div id="nav-dropdown" class="navbar-collapse animate slideIn collapse">

          <ul id="content-list" class="navbar-nav m-auto text-center">

            <li class="nav-item active px-3">
              <a class="nav-link navButton menu-txt1" href="https://marketpreneurs.brainster.co" target="_blank"><b>Академија за маркетинг</b><span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active px-3">
              <a class="nav-link navButton menu-txt2" href="https://codepreneurs.brainster.co" target="_blank"><b>Академија за програмирање</b></a>
            </li>

            <li class="nav-item active px-3">
              <a class="nav-link navButton menu-txt3" href="https://datascience.brainster.co" target="_blank"><b>Академија за data science</b></a>
            </li>

            <li class="nav-item active px-3">
              <a class="nav-link navButton menu-txt4" href="https://design.brainster.co" target="_blank"><b>Академија за дизајн</b></a>
            </li>

          </ul>

          <a href="employment.php"><button type="button" class="btn btn-danger mr-5 employ-button" >Вработи наш студент</button></a>

        </div>
      </nav>
    <!-- NAVBAR END -->


    <!-- BANNER START -->
    <section class="sec2 py-5 text-white text-center">
      <p class="h1 my-5 py-5">Brainster Labs</p>
    </section>
    <!-- BANNER END -->


    <!-- CARD CATALOGUE START -->
    <section class="sec3 bg-warning">

      <div class="container-fluid">

        <div class="row bg-dark">

          <label for="marketing-selector" class="w-100">
            <div id="marketing-filter" class="col-lg-4 col-12 d-flex align-items-center justify-content-around">
              <p class="m-0 p-4 text-light"><b>Проекти на студентите по академијата
              <br>
              за маркетинг</b></p>
              <input type="checkbox" id="marketing-selector" class="d-none"/>
              <i class="fas fa-check-circle m-0 h3 text-dark" aria-hidden="true"></i>

            </div>
          </label>

          <label for="programing-selector" class="w-100">
            <div id="programing-filter" class="col-lg-4 col-12 d-flex align-items-center justify-content-around customBorder">

              <p class="m-0 p-4 text-light"><b>Проекти на студентите по академијата
              <br>
              за програмирање</b></p>
              <input type="checkbox" id="programing-selector" class="d-none"/>
              <i class="fas fa-check-circle m-0 h3 text-dark" aria-hidden="true"></i>

            </div>
          </label>

          <label for="design-selector" class="w-100">
            <div id="design-filter" class="col-lg-4 col-12 d-flex align-items-center justify-content-around">

              <p class="m-0 p-4 text-light"><b>Проекти на студентите по академијата
              <br>
              за дизајн</b></p>
              <input type="checkbox" id="design-selector" class="d-none"/>
              <i class="fas fa-check-circle m-0 h3 text-dark" aria-hidden="true"></i>

            </div>
          </label>

        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-10 offset-1">
            <div class="row">

              <!-- CARDS -->

              <?php
while ($row = mysqli_fetch_array($result)) {
    ?>

              <div class="col-lg-4 col-md-6 col-12 justify-content-center cards my-5 cardPadding <?php
if ($row['academy'] == 'programing') {
        echo "programing";
    } else if ($row['academy'] == 'marketing') {
        echo "marketing";
    } else {
        echo "design";
    }
    ?>">

                <div class="card border-0 cardShadow custBorderRadius zoom">
                  <img class="card-img-top custBorderRadiusImg" src="<?=$row['image'];?>" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-title bg-warning d-inline-block p-1 custFont1 ml-2 mb-0">
                      <?php
if ($row['academy'] == 'programing') {
        echo "Академија за програмирање";
    } else if ($row['academy'] == 'marketing') {
        echo "Академија за маркетинг";
    } else {
        echo "Академија за дизајн";
    }
    ?>
                    </p>
                    <p class="py-2 pr-4 m-0 lineHeight custFont2">
                        <?=$row['project'];?>
                    </p>
                    <p class="card-text custFont3 m-0 pb-1">
                    <?=$row['description'];?>
                    </p>
                    <p class="custFont4 pt-2"><b>Април - Октомври 2019</b></p>
                    <div class="d-flex justify-content-end">
                      <a href="#" class="btn btn-danger mt-3 py-2 px-4">Дознај повеќе</a>
                    </div>
                  </div>
                </div>
              </div>

                <?php
}
mysqli_close($conn);
?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CARD CATALOGUE END -->


    <!-- FOOTER START -->
    <footer class="foot bg-dark">
      <p class="text-light text-center m-0 py-3">Изработено со	&#10084; од студентите на Brainster</p>
    </footer>
    <!-- FOOTER END -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- NAVBAR DROPDOWN RESPONSIVE LOOK -->
    <script type="text/javascript" src="scriptsJS/navbar.js">
    </script>

    <!-- CARD CATALOGUE FILTER FUNCTIONALITY -->
    <script type="text/javascript" src="scriptsJS/card_filter.js">
    </script>

  </body>
</html>