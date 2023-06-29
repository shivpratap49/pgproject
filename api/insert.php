<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');

$data=json_decode(file_get_contents("php://input"),true);
$id=$data['id'];
$first_name=$data['first_name'];
$last_name=$data['last_name'];
$gender=$data['gender'];
$date_of_birth=$data['date_of_birth'];
$date=$data['date'];
$entry=$data['entry'];
include "config.php";
$sql = "INSERT INTO person(id,first_name,last_name,gender,date_of_birth,date,entry) VALUES ('$id','$first_name','$last_name','$gender','$date_of_birth','$date','$entry') ";
//$row = pg_fetch_array($result);
if (pg_query($conn, $sql)){
    echo json_encode(array('Message'=>'Record Inserted Successfully','Status'=>true));
}else{
    echo json_encode(array('Message'=>'Eroor','Status'=>false));
}
?>