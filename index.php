<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gradation Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
</head>

<body>

    <?php
require_once('config.php');
  include('header.php');
  ?>
    <div id="cont">
        <h2 style="position:absolute; top: 100px;">Welcome to Gradation Portal
        </h2>
        <div id="login" class="bg-primary  p-0 bg-light">
            <div class="container justify-content-center border border border-2 border-dark bg-primary   ">
                <div class="d-flex justify-content-center p-0 text-white">
                    <p> ADMIN LOGIN PORTAL</p>
                </div>
                <div class=" d-flex justify-content-center  ">
                    <div class="d-inline-flex p-2 ">

                        <button type="button" class="btn btn-warning " onclick="adminlogin()"> ADMIN LOGIN</button>
                    </div>

                </div>
            </div>
            <div class="container justify-content-center border border border-2 border-dark bg-primary mt-5">
            <div class="d-flex justify-content-center p-0 text-white">
              <p>  EMPLOYEE LOGIN PORTAL</p>
            </div>
            <div class=" d-flex justify-content-center  ">
                <div class="d-inline-flex p-2 ">

                    <button type="button" class="btn btn-warning " onclick=" myFunction()"> EMPLOYEE LOGIN</button>
                </div>
                
            </div>
        </div>
        </div>
    </div>
    <Script>
     
    </Script>
    <script src="js/index1.js"></script>
    <?php
  include('footer.php');
 ?>