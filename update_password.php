<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
     <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
<?php
  require_once('config.php');
  include('header.php');
if(isset($_POST['password']) && $_POST['reset_token'] && $_POST['email'])
{
$username = $_POST['username'];
$newemailId = $_POST['newemail'];
$emailId = $_POST['email'];
$token = $_POST['reset_token'];
$password = md5($_POST['password']);
$query = pg_query($conn,"SELECT * FROM admin WHERE reset_token='".$token."'");
$row = pg_num_rows($query);
if($row){
pg_query($conn,"UPDATE admin set  password='" . $password . "', reset_token='" . NULL . "', username='".$username."', email='".$newemailId."' WHERE email='" . $emailId . "'");
echo'<div id="cont"><p text-center text-success>Congratulations! Your password has been updated successfully </p></div>';
}else{
  echo'<div id="cont"><p text-center text-danger>Congratulations! Your password has been updated successfully </p></div>';
}
}
include('footer.php');
?>
 
    
    