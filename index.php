<?php
  require_once('config.php');
  include('header.php');
  /*$m=1900;
for ($i = 1; $i<= 200; $i++) {
 
$po="UPDATE driver SET present_post_grade='Senior Driver' WHERE present_post_grade='senior driver'";
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
  header("location: home.php");
}  
else{
 $log=false;
}
}
?>

 <?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){ 
 if( $log==false){ ?>
  <div class="alert  alert-danger" role="alert">
  Invalid User or Password
</div>
<?php
 }
}
 ?>
    <div style="height: 1000px display:inline; " >
   
  <div class="d-flex justify-content-center  d-inline-block border me-auto ms-auto border-warning border-4 bg-primary rounded-4 " style="width:600px; margin-top:9rem">
  

  <form action=index.php method="post">
  <div class="col-sm-4  mx-1"  style="  width: 48.333%; display: inline-block; ">
    <label class="form-label text-white" for="specificSizeSelect">DEPARTMENT</label>
    <select class="form-select" id="specificSizeSelectn" name="table" style="width: 200px;" >
      <option selected disabled>Choose...</option>
      <option value="driver">DRIVER STAFF</option>
      <option value="revenue">REVENUE STAFF</option>
      <option value="ministry">MINISTRY STAFF</option>
     
    </select>
  </div>
  <div class="col-sm-4 mt-3" style="  width: 48.333%; display: inline-block;">
    <label class="form-label text-white" for="specificSizeSelect"> POST</label>
    <select class="form-select" id="specificSizeSelecta" name="present_post_grade" style="width: 200px;">
   <option selected disabled>Choose...</option>
     
    </select>
  </div>
  <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
    <label for="exampleInputEmail1" class="form-label text-white">EMPLOYEE CODE</label>
    <input type="name" name="employee_code"class="form-control" id="name" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3 me-auto ms-auto  col-md-8">
  <label for="start" class="form-label text-white">DOB</label>
   <input type="date" id="start" name="dob" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31">

  </div>
  <button type="submit" class="btn btn-warning  col-md-8 mb-4  " style="margin-left:68px;">Log in</button>
</form>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="js/index.js"></script>
<?php include('footer.php');
 ?>