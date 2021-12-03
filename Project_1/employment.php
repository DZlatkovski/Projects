<?php
include 'database_project_01.php';
$resultEmp = mysqli_query($conn, "SELECT DISTINCT `academy` FROM `cards`");
?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7ab2b0f5ad.js" crossorigin="anonymous"></script>
    <title>Project 01 Filip Manev</title>
  </head>
  <body>
      <!-- NAVBAR START -->
      <nav class="navbar navbar-expand-lg navbar-light bg-warning navShadow">

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

            <a href="index.php"><button type="button" class="btn btn-danger mr-5 employ-button" >Врати се назад</button></a>
            
          </div>
        </nav>
      <!-- NAVBAR END -->


      <!-- MAIN SECTION START -->
      <section class="bg-warning vh-100">
      <form method="POST" action="employeeToDatabase.php" class="needs-validation">   
        <div class="container-fluid py-5">
          <p class="h1 text-center py-5"><b>Вработи студенти</b></p>
          <div class="form-row py-5">
            <div class="col-lg-8 offset-lg-2 col-12 pb-5 px-lg-0 px-md-5 px-3">
              <div class="form-row pb-5">
                <div class="col-lg-6 col-12">
                  <div class="form-group">
                    <label for="name_surname"><b>Име и презиме</b></label>
                    <input id="name_surname" name="name_surname" class="form-control" type="text" placeholder="Внесете име и презиме.." required>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="form-group">
                    <label for="company"><b>Име на компанија</b></label>
                    <input id="company" name="company" class="form-control" type="text" placeholder="Внесете име на компанија.." required>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="form-group">
                    <label for="mail"><b>Контакт имејл</b></label>
                    <input type="email" name="mail" class="form-control" id="mail" placeholder="example@mail.com" aria-describedby="emailHelp" required>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="form-group">
                    <label for="phone"><b>Телефонски број</b></label>
                    <input id="phone" name="phone" class="form-control" type="number" placeholder="Внесете број за контакт.." required>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="form-group">
                    <label for="student_type"><b>Тип на студенти</b></label>
                    <select id="student_type" name="student_type" class="form-control" required>
                      <option selected disabled value=""><b>Изберете тип на студент</b></option>
                      <option value="datascience"><b>Студенти од datascience</b></option>
                        <?php
                        //povik na razlicni tipovi na studenti
                        while($row = mysqli_fetch_array($resultEmp)){

                          $studentAcademy = $row['academy'];
                          echo "<option value= ".$studentAcademy." >";
                          if ($row['academy'] == 'programing') {
                            echo "Студенти од програмирање";
                          } else if ($row['academy'] == 'marketing') {
                            echo "Студенти од маркетинг";
                          } else if ($row['academy'] == 'design') {
                            echo "Студенти од дизајн";
                          }
                          echo "</option>";   
                        }
                        ?>
                      
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-12 d-flex align-items-center">
                  <button id="save" name="save" type="submit" class="btn btn-danger btn-block mt-2"><b>ИСПРАТИ</b></button>
                </div>

              </div>

            </div>
          </div>
        </div>
        </form>      
      </section>
      <!-- MAIN SECTION END -->


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

  </body>
</html>