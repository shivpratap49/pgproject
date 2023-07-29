<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');

$data=json_decode(file_get_contents("php://input"),true);
$table=$data['table'];
$employee_code=$data['username'];
$token=$data['token'];
include "config.php";
if($token){
$sql = "SELECT*FROM login WHERE token='$token'";
$result = pg_query($conn, $sql);
if(pg_num_rows($result) >0){
$sql1 = "SELECT*FROM $table WHERE employee_code='$employee_code'";
$result1 = pg_query($conn, $sql1);
//$row = pg_fetch_array($result1);
if (pg_num_rows($result1) >0){
    $output=pg_fetch_all($result1,PGSQL_ASSOC);
    print_r (json_encode($output)) ;
}else{
    echo json_encode(array('Message'=>'no record founf','Status'=>false));
}
}else
{
echo json_encode(array('Message'=>'invalid token','Status'=>false));
}
}
else{
echo json_encode(array('Message'=>'invalid token','Status'=>false));
}

?>
