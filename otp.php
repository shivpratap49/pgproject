<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reset Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
  <style>
     .icon {
            padding: 10px;
            background: white;
            color: black;
            min-width: 30px;
            text-align: center;

        }
  </style>
</head>
<?php
require_once('config.php');
require_once('admin_session.php');
include('header.php');
?>
<body>
<div id=cont>
<?php

if(isset($_POST["submit"])) {
    $employee=$_POST['employee_code'];
    $password=md5($_POST['password']);
    $cpassword=md5($_POST['cpassword']);
    $table=$_POST['table'];
    if($table!=''){

    if($password==$cpassword){
        $sql="SELECT*FROM login WHERE employee_code='$employee' " ;
        $result=pg_query($conn,$sql);
$row = pg_fetch_array($result);
if(pg_num_rows($result)>0){
  $query="UPDATE login SET password='$password' WHERE employee_code='$employee';";
   if(pg_query($conn,$query))
   {
  ?>
    <div class="alert alert-success" role="alert">
        Password Reset successfully
    </div>
    <?php  
}else{  
echo "Sorry Your Request not Process";    
}
}else{
    echo'<div class="alert alert-danger" role="alert">Record not found</div>';
}
}else{
    
    echo'<div class="alert alert-danger" role="alert">Password Not Match </div>';
}
    }else{
        echo'<div class="alert alert-danger" role="alert">Plese Choose Employee Catogory</div>';
    }
}else{
    echo'<div class="alert alert-danger" role="alert">Bad Request</div>';
}
?>
</div>
<?php
  include('footer.php');
  ?>