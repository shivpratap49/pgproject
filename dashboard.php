<?php
require_once('config.php');
require_once('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg text-light bg-dark m-0">
    <div class="  ms-1">
      <a class="navbar-brand m-0" href="#">
        <img src="EmblemN.png" alt="Bootstrap" width="60" height="50">
      </a>
    </div>
    
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="Bootstrap" width="150" height="40">
      </a></div>
     
        <div class="  ms-1">
            <a class="navbar-brand m-0" href="#">
            <img src="flag.png" alt="Bootstrap" width="80" height="50">
          </a>
        </div>
      </a>
  </nav>
  <?php

    $user=$_SESSION['employee_code'];
    $table=$_SESSION['table'];
    echo $user;
    echo $table;
    $result = pg_query($conn,"SELECT * FROM $table where employee_code='$user' ");
    print_r ($result);
    $row = pg_fetch_array($result);
   echo"<pre>";
    print_r ($row);
    echo "<pre>";
  ?>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
