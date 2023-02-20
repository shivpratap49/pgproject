<?php
  require_once('config.php');
 /* $m=1900;
for ($i = 1; $i<= 200; $i++) {
 
$po="UPDATE revenue SET employee_code='$m' WHERE present_post_grade='RS' AND sl_no='$i'";
$tr=pg_query($po);
echo '$tr';
$m++;
}*/
?>
<?php
  $log=true;

if($_SERVER["REQUEST_METHOD"]=="POST"){
$table=($_POST['table']);
$present_post_grade=$_POST['present_post_grade'];
$user=($_POST['employee_code']);
$pass=($_POST['dob']);

$sql="SELECT*FROM $table WHERE employee_code='$user' " ;
$result=pg_query($conn,$sql);
$row = pg_fetch_array($result);
if(pg_num_rows($result)==1){
  session_start();
  $_SESSION['loggedin']=true; 
  $_SESSION['employee_code']=$user;
  $_SESSION['table']=$table;
  $_SESSION['dob']=$pass;
  header("location: dashboard.php");
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
   
  <div class="d-flex justify-content-center  d-inline-block border me-auto ms-auto border-warning border-4 bg-dark rounded-4 " style="width:600px; margin-top:9rem">
  

  <form action=index.php method="post">
  <div class="col-sm-4"  style="  width: 48.333%; display: inline-block;">
    <label class="form-label text-white" for="specificSizeSelect">DEPARTMENT</label>
    <select class="form-select" id="specificSizeSelect" name="table">
      <option selected disabled>Choose...</option>
      <option value="driver">DRIVER</option>
      <option value="revenue">REVENUE</option>
      <option value="ministry">MINISTRY STAFF</option>
     
    </select>
  </div>
  <div class="col-sm-4 mt-3" style="  width: 48.333%; display: inline-block;">
    <label class="form-label text-white" for="specificSizeSelect">CURRENT POST</label>
    <select class="form-select" id="specificSizeSelect" name="present_post_grade">
      <option selected value="">Choose...</option>
      <option value="driver">Junior Driver</option>
      <option value="senior driver">Senior Driver</option>
      <option value="Head driver">Head Driver</option>
      <option value="AMIN">AMIN</option>
      <option value="ARI">ARI</option>
      <option value="RI">RI</option>
      <option value="RS">RS</option>
      <option value="JRA">JRA</option>
      <option value="SO">SO</option>
      <option value="SRA">SRA</option>
    </select>
  </div>
  <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
    <label for="exampleInputEmail1" class="form-label text-white">EMPLOYEE CODE</label>
    <input type="name" name="employee_code"class="form-control" id="name" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 me-auto ms-auto  col-md-8">
  <label for="start" class="form-label text-white">DOB</label>
   <input type="date" id="start" name="dob" class="form-control"
       value="2018-07-22"
       min="1900-01-01" max="2018-12-31">

  </div>
  <button type="submit" class="btn btn-primary  col-md-8 mb-4  " style="margin-left:50px;">Log in</button>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>