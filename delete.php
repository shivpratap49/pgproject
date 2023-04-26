<?php
require_once('config.php');
$table= trim($_GET['table']);
$employee= trim($_GET['employee']);
echo $table;
echo $employee;
if($table!=""){
if($employee=="") {
    echo "<h3>Please enter Employee code</h3>";
}
else{
$sql = "DELETE FROM $table WHERE employee_code='$employee'";
if (pg_query($conn,$sql)) {
  echo "<h3>Record deleted successfully</h3>";
} else {
  echo "<h3>Error deleting record:</h3>";
}
}
}
else
{
  echo"<h3>please select department</h3>";
}
?>


