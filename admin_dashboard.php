<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
</head>

<body>

    <?php
require_once('config.php');
require_once('admin_session.php');
  include('header.php');
  ?>
    <div id="cont" class="flex-column align-items-center" >

        <div class=" d-flex w-75 justify-content-evenly    ">

            <div class="m-3 p-3 d-flex flex-column align-items-center border border-2  bg-primary rounded-2 border-dark w-25 "><p class="text-white">New Registraion of Employee</p>

            <a href="registration.php"><button type="button" class="btn btn-warning mx-5" >Click here</button></a>
            </div>
            
            <div class="m-3 p-3 d-flex flex-column rounded-2  align-items-center bg-primary border border-2 border-dark w-25"><p class="text-white">Application Manager</p>
              
            <a href="app_manager.php"><button type="button" class="btn btn-warning mx-5" onclick="">Click here</button></a>
            </div>

        </div>
        <div class=" d-flex w-75 justify-content-evenly    ">
        <div class="m-3 p-3 d-flex flex-column rounded-2  align-items-center bg-primary border border-2 border-dark w-25"><p class="text-white">View/Edit Employee details</p>
              
              <a href="view_employee.php"><button type="button" class="btn btn-warning mx-5" onclick="">Click here</button></a>
              </div>
              <div class="m-3 p-3 d-flex flex-column align-items-center border rounded-2 border-2 bg-primary border-dark w-25"><p class="text-white">Reset Password of Employee</p>
            <a href="re_pass.php"> <button type="button" class="btn btn-warning mx-5" onclick="">Click here</button></a>
                
            </div>
        </div>
        
    </div>
    <Script>

    </Script>
    <script src="js/index1.js"></script>
    <?php
  include('footer.php');
 ?>