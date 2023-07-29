<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
 
   
include "config.php";
$data=json_decode(file_get_contents("php://input"),true);
$table=$data['table'];
$user=$data['username'];
$pass=md5($data['password']);


$sql="SELECT*FROM login WHERE employee_code='$user' AND password='$pass'" ;
$result=pg_query($conn,$sql);
$row = pg_fetch_array($result);
if(pg_num_rows($result)>0){
    $sql1="SELECT employee_code FROM $table WHERE employee_code='$user' " ;
    $result1=pg_query($conn,$sql1);
    if(pg_num_rows($result1)>0){
 	$token=md5((rand(1000000,10000000000000)));
 	$sql2="UPDATE login set token='$token' where employee_code='$user'";
 	if(pg_query($conn,$sql2)){
 	  echo json_encode(array('Message'=>'Record Inserted Successfully','Status'=>true,'table'=>"$table",'username'=>"$user",'token'=>"$token"));
 	}else{
 	echo json_encode(array('Message'=>'Token not generated','Status'=>false,));
 	}
  
    }else{
  echo json_encode(array('Message'=>'Please choose user catogery','Status'=>false));
}

}  
else{
 echo json_encode(array('Message'=>'Invalid user','Status'=>false));
}



