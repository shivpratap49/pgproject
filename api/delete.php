<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization');
$data=json_decode(file_get_contents("php://input"),true);
$id=$data['id'];
include "config.php";
$sql = "DELETE FROM person WHERE id='$id'";
//$row = pg_fetch_array($result);
if (pg_query($conn, $sql)){
    echo json_encode(array('Message'=>'Record deleted Successfully','Status'=>true));
}else{
    echo json_encode(array('Message'=>'Error Record not deleted','Status'=>false));
}
?>