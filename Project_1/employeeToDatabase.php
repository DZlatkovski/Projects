<?php
include 'database_project_01.php';
error_reporting(0);
if(isset($_POST['save'])){  
      $name_surname= $_POST['name_surname'];
      $company= $_POST['company'];
      $mail= $_POST['mail'];
      $phone= $_POST['phone'];
      $student_type= $_POST['student_type'];

      $sql= "INSERT INTO employees (`name_surname`,`company`,`mail`,`phone`,`student_type`)
      VALUES ('$name_surname','$company','$mail','$phone','$student_type')";
      if (mysqli_query($conn, $sql)){
            $sql="";
            // echo "<a href='employment.php'>vratime</a>";
        }
        else{
            echo "Error: " . $sql . "
            " . mysqli_error($conn);
        }
        mysqli_close($conn);
    

}
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

    <section class="wrapper">
		<!-- MAIN START -->
			<div class="container-fluid bg-warning d-flex flex-column justify-content-center h-100 pb-5">
				<div class="registeredBackground pb-5 mb-5"></div>
				<p class="h1 text-dark m-0 text-center">Успешна регистрација !</p>
				<a href="index.php" class="btn btn-danger btn-lg active align-self-center mt-5" role="button" aria-pressed="true">Врати се назад кон главната страна</a>
			</div>
    <!-- MAIN END -->

    <!-- FOOTER START -->
			<footer class="foot bg-dark">
				<p class="text-light text-center m-0 py-3">Изработено со	&#10084; од студентите на Brainster</p>
			</footer>
    <!-- FOOTER END -->
		</section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>