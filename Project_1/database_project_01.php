<?php
    $servername='localhost';
    $username='root';
    $pasword='';
    $dbname="project_01";
    $conn=mysqli_connect($servername,$username,$pasword,$dbname);
    if(!$conn){
        die('could not Connect My Sql:' .mysql_error());
    }
?>