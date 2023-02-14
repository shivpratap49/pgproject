
<?php
  $log=true;
require_once('config.php');
if($_SERVER["REQUEST_METHOD"]=="POST"){

$user=($_POST['username']);
$pass=($_POST['password']);
$sql="SELECT*FROM user WHERE username='$user' AND password='$pass'" ;
$result=pg_query($conn,$sql);
$row = pg_fetch_array($result);
if(pg_num_rows($result)==1){
  session_start();
  $_SESSION['loggedin']=true; 
  $_SESSION['username']=$user;
  header("location: search.php");
}  
else{
 $log=false;
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
 if( $log==false){ ?>
  <div class="alert  alert-danger" role="alert">
  Invalid User or Password
</div>
<?php
 }
 ?>
    <div style="height: 1000px display:inline; " >
  <div class="d-flex justify-content-center  d-inline-block border me-auto ms-auto border-warning border-4 bg-dark rounded-4 " style="width:300px; margin-top:9rem">
  

  <form action=index.php method="post">
  <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
    <label for="exampleInputEmail1" class="form-label text-white">Username</label>
    <input type="name" name="username"class="form-control" id="name" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 me-auto ms-auto  col-md-8">
    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary  col-md-8 mb-4  " style="margin-left:33px;">Log in</button>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>