<?php
date_default_timezone_set("Asia/Kolkata");
  $date=date("d/m/y");
  $time=date("h:i:s");
  echo "$date ";
  echo "$application_no ";
  $application_no="N-".str_replace("/","","$date").str_replace(":","","$time");
  echo "$application_no ";
?>
