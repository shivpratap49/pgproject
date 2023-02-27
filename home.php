<?php
require_once('config.php');
require_once('session.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    p{
    
    }
</style>

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
            </a>
        </div>

        <div class="  ms-1">
            <a class="navbar-brand m-0" href="#">
                <img src="flag.png" alt="Bootstrap" width="80" height="50">
            </a>
        </div>
        </a>
    </nav>
    
    <div class=" container bg-dark justify-content-center text-light border border-2 border-warning align-item-center  p-0 w" style="width: 768px; vertical-align: middle; margin-top:20vh">
        
        <div class="container justify-content-center border border border-2 border-success  ">
            <div class="d-flex justify-content-center p-0">
              <p>  PROFILE EDIT</p>
            </div>
            <div class=" d-flex justify-content-center  ">
                <div class="d-inline-flex p-2 ">

                    <button type="button" class="btn btn-info " onclick=" myFunction()"> PHOTO</button>
                </div>
                <div class="d-inline-flex p-2 ">
                    <button type="button" class="btn btn-info ">SIGNATURE</button>
                </div>
                <div class="d-inline-flex p-2 ">
                    <button type="button" class="btn btn-info ">ADDRESS</button>
                </div>
                <div class="d-inline-flex p-2 ">
                    <button type="button" class="btn btn-info ">MOBILE NO.</button>
                </div>
                <div class="d-inline-flex p-2 ">
                    <button type="button" class="btn btn-info ">WHATSAPP NO.</button>
                </div>
            </div>
        </div>
        <div class="container justify-content-center border border border-2 border-success  ">
            <div class="d-flex justify-content-center ">
               <p>  VIEW </p>
            </div>
            <div class=" d-flex justify-content-center  ">
                <div class="d-inline-flex p-2 ">

                    <button type="button" class="btn btn-info  px-5">SELF GRADATION</button>
                </div>
               
                
                <div class="d-inline-flex p-2 ">
                    <button type="button" class="btn btn-info ">EMLOYEE DEPARTMENT GRADATION</button>
                </div>
            </div>
        </div>
        <div class="container justify-content-center border border border-2 border-success  ">
            <div class="d-flex justify-content-center">
             <P>   APPLICATION </p>
            </div>
            <div class=" d-flex justify-content-center  ">
                <div class="d-inline-flex p-2 ">

                    <button type="button" class="btn btn-info ">OBJECTION</button>
                </div>
                <div class="d-inline-flex p-2 ">
                    <button type="button" class="btn btn-info ">GRIEVENCE</button>
                </div>
               
                <div class="d-inline-flex p-2 ">
                    <button type="button" class="btn btn-info px-5 ">NOC</button>
                </div>
            </div>
        </div>
    </div>
    <script>
    function myFunction(){
        window.location = "dashboard.php";
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>