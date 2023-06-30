<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
//$data=json_decode(file_get_contents("php://input"),true);
include "config.php";
$sql = "SELECT*FROM person";
$result = pg_query($conn, $sql);
//$row = pg_fetch_array($result);
if (pg_num_rows($result) >0){
    $output=pg_fetch_all($result,PGSQL_ASSOC);
    print_r (json_encode($output)) ;
}else{
    echo json_encode(array('Message'=>'no record founf','Status'=>false));
}
?>