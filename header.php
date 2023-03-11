<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg text-light bg-primary m-0">
    <div class="  ms-1">
      <a class="navbar-brand m-0" href="#">
        <img src="images/EmblemN.png" alt="Bootstrap" width="60" height="50">
      </a>
    </div>
    
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="Bootstrap" width="75%" hieght="50%">
      </a></div>
      <?php
      if(isset($_SESSION['loggedin'])){
      ?>
        <button type="button" class="btn btn-danger me-1 btn-sm " onclick="logout()">Logout</button>
     <?php
     }
     ?>
        <div class="  ms-1">
            <a class="navbar-brand m-0" href="#">
            <img src="images/flag.png" alt="Bootstrap" width="80" height="50">
          </a>
        </div>
      </a>
  </nav>
  <script>
    function logout(){
      window.location="logout.php"
    }
  </script>