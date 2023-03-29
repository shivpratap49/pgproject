<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="css/index.css" rel="stylesheet">
</head>

<body>

    <?php
require_once('config.php');
require_once('admin_session.php');
  include('header.php');
  $result1 = pg_query($conn,"SELECT * FROM applicatio");
  $result2 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending'");
  $result3 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Approved'");
  $result4 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Rejected'");
 $all_application=pg_num_rows($result1);
 $pending=pg_num_rows($result2);
  $accepted=pg_num_rows($result3);
  $rejected=pg_num_rows($result4);
  // APPLICATION PENDING WISE QUERY
  $result5 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='NOC' ;");
 $noc_pending=pg_num_rows($result5);
 $result6 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='GRIEVENCE' ;");
 $gri_pending=pg_num_rows($result6);
 $result7 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='OBJECTION' ;");
 $obj_pending=pg_num_rows($result7);
 // ALL TYPE WISE QUERY
 $result8 = pg_query($conn,"SELECT * FROM applicatio WHERE form_type='NOC' ;");
 $noc_all=pg_num_rows($result8);
 $result9 = pg_query($conn,"SELECT * FROM applicatio WHERE  form_type='GRIEVENCE' ;");
 $gri_all=pg_num_rows($result9);
 $result10 = pg_query($conn,"SELECT * FROM applicatio WHERE   form_type='OBJECTION' ;");
 $obj_all=pg_num_rows($result10);
  ?>
    <div id="cont">
        
        <div class="row w-75 justify-content-between">
            <div class="col-4">
                <a href="reportgenration.php" style="text-decoration:none">
                    <div class="card h-100 link-dark">

                        <div class="card-body">
                            <h5 class="card-title text-center">ALL APPLICATION</h5>
                            <hr>
                            <p class="">NOC All Application : <?php  echo $noc_all ;?></p>
                            <p class="">GRIEVENCE All Application : <?php echo $gri_all ;?></p>
                            <p class="">OBJECTION All Application : <?php echo $obj_all;?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="status.php" style="text-decoration:none">
                    <div class="card h-100 link-dark">
                        <div class="card-body">
                            <h5 class="card-title text-center">ALL PENDING</h5>
                            <hr>
                            <p class="">NOC Pendig Application : <?php  echo $noc_pending ;?></p>
                            <p class="">GRIEVENCE Pendig Application : <?php echo $gri_pending ;?></p>
                            <p class="">OBJECTION Pending Application : <?php echo $obj_pending;?></p>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <div class="card h-100">

                    <div class="card-body">
                        <h5 class="card-title text-center">ALL APPLICATION STATUS</h5>
                        <hr>
                        <p class="">Total Application : <?php echo $all_application;?></p>
                        <p class="">Total Pendig Application : <?php  echo $pending ;?></p>
                        <p class="">Total Approved Application : <?php echo $accepted ;?></p>
                        <p class="">Total Rejected Application : <?php echo $rejected;?></p>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
  include('footer.php');
 ?>