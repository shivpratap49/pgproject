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
require_once('config.php');

?>

<?php 
$table=($_POST['table']);
$present_post_grade=$_POST['present_post_grade'];
if($present_post_grade==""){
  if($table=='driver'){
    $result = pg_query($conn,"SELECT * FROM $table");

?>
<table class="table table-striped">
<tr>
<th scope="col">Index</th>
<th scope="col">Name of the Driver </th>
<th scope="col">Date of Birth </th>
<th scope="col">Caste/ Category</th>
<th scope="col">Home Address with name of the Assembly Constituency</th>
<th scope="col">Date of Entry into Govt. Service</th>
<th scope="col">Date of Joining to post of Sr. Driver </th>
<th scope="col">Date of Joining to post of Head Driver </th>
<th scope="col">Driving Licence No. </th>
<th scope="col">Date of Superannuation</th>
<th scope="col">Present place of posting</th>
<th scope="col">Post of the Driver</th>

</tr>

<?php

if(pg_num_rows($result)>0){
$i=1;
while($row = pg_fetch_array($result)) {
?>




<tr>
<td><?php echo "$i"; ?></td>
<td><?php echo $row["name_of_the_driver"]; ?></td>
<td><?php echo $row["date_of_birth"]; ?></td>
<td><?php echo $row["category"]; ?></td>
<td><?php echo $row["home_address_with_name_of_the_assembly_constituency"]; ?></td>
<td><?php echo $row["date_of_entry_into_govt_service"]; ?></td>
<td><?php echo $row["date_of_joining_to_post_of_sr_driver"]; ?></td>
<td><?php echo $row["date_of_joining_to_post_of_head_driver"]; ?></td>
<td><?php echo $row["driving_licence_no"]; ?></td>
<td><?php echo $row["date_of_superannuation"]; ?></td>
<td><?php echo $row["present_place_of_posting"]; ?></td>
<td><?php echo $row["present_post_grade"]; ?></td>


</tr>
<?php
$i++;
}
}
else{
?>
<table class="table table-striped">
<tr>
<th scope="col" style="text-align:center">Record not found</th>
<?php
}
}

elseif($table=='revenue'){

  $result = pg_query($conn,"SELECT * FROM $table");

  ?>
  <table class="table table-striped">
  <tr>
  <th scope="col">SL NO.</th>
  <th scope="col">Name  </th>
  <th scope="col">Date of Birth </th>
  <th scope="col">Caste/ Category</th>
  <th scope="col">HOME BLOCK</th>
  <th scope="col">EDN QULAFICATION</th>
  <th scope="col">Date of Entry into Govt. Service</th>
  
  <th scope="col">POST NAME (intial grade)</th>
  <th scope="col">JOI. DATE (present grade)</th>
  <th scope="col">THEORY</th>
  <th scope="col">PRACTICAL</th>
  <th scope="col">DEPRTMENT EXAM </th>
  <th scope="col">S_DATE </th>
  <th scope="col">Present place of posting</th>
  <th scope="col">PERSENT POST</th>
  
  </tr>
  
  <?php
  
  if(pg_num_rows($result)>0){
  $i=1;
  while($row = pg_fetch_array($result)) {
  ?>
  
  
  
  
  <tr>
  
  <td><?php echo $row["sl_no"]; ?></td>
  <td><?php echo $row["name"]; ?></td>
  <td><?php echo $row["category"]; ?></td>
  <td><?php echo $row["dob"]; ?></td>
  <td><?php echo $row["home_block"]; ?></td>
  
  <td><?php echo $row["edn_qual"]; ?></td>
  <td><?php echo $row["j_date_govt_service"]; ?></td>
  <td><?php echo $row["post_name_intial_grade"]; ?></td>
  <td><?php echo $row["j_date_present_grade"]; ?></td>
  <td><?php echo $row["theory"]; ?></td>
  <td><?php echo $row["practical"]; ?></td>
  <td><?php echo $row["deptt_exam"]; ?></td>
  <td><?php echo $row["s_date"]; ?></td>
  <td><?php echo $row["present_place_of_posting"]; ?></td>
  <td><?php echo $row["present_post_grade"]; ?></td>

  
  </tr>
  <?php
  $i++;
  }
  }
  else{
  ?>
  <table class="table table-striped">
  <tr>
  <th scope="col" style="text-align:center">Record not found</th>
  <?php
  }
  }
}
if($table=='driver'){
if($present_post_grade=='driver'){
$result = pg_query($conn,"SELECT * FROM $table where present_post_grade='$present_post_grade' ");

?>
<table class="table table-striped">
<tr>
<th scope="col">Index</th>
<th scope="col">Name of the Driver </th>
<th scope="col">Date of Birth </th>
<th scope="col">Caste/ Category</th>
<th scope="col">Home Address with name of the Assembly Constituency</th>
<th scope="col">Date of Entry into Govt. Service</th>

<th scope="col">Driving Licence No. </th>
<th scope="col">Date of Superannuation</th>
<th scope="col">Present place of posting</th>
<th scope="col">Post of the Driver</th>

</tr>

<?php

if(pg_num_rows($result)>0){
$i=1;
while($row = pg_fetch_array($result)) {
?>




<tr>
<td><?php echo "$i"; ?></td>
<td><?php echo $row["name_of_the_driver"]; ?></td>
<td><?php echo $row["date_of_birth"]; ?></td>
<td><?php echo $row["category"]; ?></td>
<td><?php echo $row["home_address_with_name_of_the_assembly_constituency"]; ?></td>
<td><?php echo $row["date_of_entry_into_govt_service"]; ?></td>

<td><?php echo $row["driving_licence_no"]; ?></td>
<td><?php echo $row["date_of_superannuation"]; ?></td>
<td><?php echo $row["present_place_of_posting"]; ?></td>
<td><?php echo $row["present_post_grade"]; ?></td>


</tr>
<?php
$i++;
}
}
else{
?>
<table class="table table-striped">
<tr>
<th scope="col" style="text-align:center">Record not found</th>
<?php
}
}
elseif($present_post_grade=='senior driver'){
  $result = pg_query($conn,"SELECT * FROM $table where present_post_grade='$present_post_grade' ");

?>
<table class="table table-striped">
<tr>
<th scope="col">Index</th>
<th scope="col">Name of the Driver </th>
<th scope="col">Date of Birth </th>
<th scope="col">Caste/ Category</th>
<th scope="col">Home Address with name of the Assembly Constituency</th>
<th scope="col">Date of Entry into Govt. Service</th>
<th scope="col">Date of Joining to post of Sr. Driver </th>

<th scope="col">Driving Licence No. </th>
<th scope="col">Date of Superannuation</th>
<th scope="col">Present place of posting</th>
<th scope="col">Post of the Driver</th>

</tr>

<?php

if(pg_num_rows($result)>0){
$i=1;
while($row = pg_fetch_array($result)) {
?>




<tr>
<td><?php echo "$i"; ?></td>
<td><?php echo $row["name_of_the_driver"]; ?></td>
<td><?php echo $row["date_of_birth"]; ?></td>
<td><?php echo $row["category"]; ?></td>
<td><?php echo $row["home_address_with_name_of_the_assembly_constituency"]; ?></td>
<td><?php echo $row["date_of_entry_into_govt_service"]; ?></td>
<td><?php echo $row["date_of_joining_to_post_of_sr_driver"]; ?></td>

<td><?php echo $row["driving_licence_no"]; ?></td>
<td><?php echo $row["date_of_superannuation"]; ?></td>
<td><?php echo $row["present_place_of_posting"]; ?></td>
<td><?php echo $row["present_post_grade"]; ?></td>


</tr>
<?php
$i++;
}
}
else{
?>
<table class="table table-striped">
<tr>
<th scope="col" style="text-align:center">Record not found</th>
<?php
}
}
elseif($present_post_grade=='Head driver'){
  $result = pg_query($conn,"SELECT * FROM $table where present_post_grade='$present_post_grade' ");

?>
<table class="table table-striped">
<tr>
<th scope="col">Index</th>
<th scope="col">Name of the Driver </th>
<th scope="col">Date of Birth </th>
<th scope="col">Caste/ Category</th>
<th scope="col">Home Address with name of the Assembly Constituency</th>
<th scope="col">Date of Entry into Govt. Service</th>
<th scope="col">Date of Joining to post of Sr. Driver </th>
<th scope="col">Date of Joining to post of Head Driver </th>
<th scope="col">Driving Licence No. </th>
<th scope="col">Date of Superannuation</th>
<th scope="col">Present place of posting</th>
<th scope="col">Post of the Driver</th>

</tr>

<?php

if(pg_num_rows($result)>0){
$i=1;
while($row = pg_fetch_array($result)) {
?>




<tr>
<td><?php echo "$i"; ?></td>
<td><?php echo $row["name_of_the_driver"]; ?></td>
<td><?php echo $row["date_of_birth"]; ?></td>
<td><?php echo $row["category"]; ?></td>
<td><?php echo $row["home_address_with_name_of_the_assembly_constituency"]; ?></td>
<td><?php echo $row["date_of_entry_into_govt_service"]; ?></td>
<td><?php echo $row["date_of_joining_to_post_of_sr_driver"]; ?></td>
<td><?php echo $row["date_of_joining_to_post_of_head_driver"]; ?></td>
<td><?php echo $row["driving_licence_no"]; ?></td>
<td><?php echo $row["date_of_superannuation"]; ?></td>
<td><?php echo $row["present_place_of_posting"]; ?></td>
<td><?php echo $row["present_post_grade"]; ?></td>


</tr>
<?php
$i++;
}
}
else{
?>
<table class="table table-striped">
<tr>
<th scope="col" style="text-align:center">Record not found</th>
<?php
}
}
}
elseif($table=='revenue' && $present_post_grade!=""){

  $result = pg_query($conn,"SELECT * FROM $table where present_post_grade='$present_post_grade' ");

  ?>
  <table class="table table-striped">
  <tr>
  <th scope="col">SL NO.</th>
  <th scope="col">Name  </th>
  <th scope="col">Date of Birth </th>
  <th scope="col">Caste/ Category</th>
  <th scope="col">HOME BLOCK</th>
  <th scope="col">EDN QULAFICATION</th>
  <th scope="col">Date of Entry into Govt. Service</th>
  
  <th scope="col">POST NAME (intial grade)</th>
  <th scope="col">JOI. DATE (present grade)</th>
  <th scope="col">THEORY</th>
  <th scope="col">PRACTICAL</th>
  <th scope="col">DEPRTMENT EXAM </th>
  <th scope="col">S_DATE </th>
  <th scope="col">Present place of posting</th>
  <th scope="col">PERSENT POST</th>
  
  </tr>
  
  <?php
  
  if(pg_num_rows($result)>0){
  $i=1;
  while($row = pg_fetch_array($result)) {
  ?>
  
  
  
  
  <tr>
  
  <td><?php echo $row["sl_no"]; ?></td>
  <td><?php echo $row["name"]; ?></td>
  <td><?php echo $row["category"]; ?></td>
  <td><?php echo $row["dob"]; ?></td>
  <td><?php echo $row["home_block"]; ?></td>
  
  <td><?php echo $row["edn_qual"]; ?></td>
  <td><?php echo $row["j_date_govt_service"]; ?></td>
  <td><?php echo $row["post_name_intial_grade"]; ?></td>
  <td><?php echo $row["j_date_present_grade"]; ?></td>
  <td><?php echo $row["theory"]; ?></td>
  <td><?php echo $row["practical"]; ?></td>
  <td><?php echo $row["deptt_exam"]; ?></td>
  <td><?php echo $row["s_date"]; ?></td>
  <td><?php echo $row["present_place_of_posting"]; ?></td>
  <td><?php echo $row["present_post_grade"]; ?></td>

  
  </tr>
  <?php
  $i++;
  }
  }
  else{
  ?>
  <table class="table table-striped">
  <tr>
  <th scope="col" style="text-align:center">Record not found</th>
  <?php
  }
  }
?>



</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>
</html>