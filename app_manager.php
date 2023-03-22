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
  $result2 = pg_query($conn,"SELECT * FROM applicatio WHERE action=null");
  $result3 = pg_query($conn,"SELECT * FROM applicatio WHERE action='true'");
  $result4 = pg_query($conn,"SELECT * FROM applicatio WHERE action='false'");
 $all_application=pg_num_rows($result1);
 $pending=pg_num_rows($result2);
  $accepted=pg_num_rows($result3);
  $rejected=pg_num_rows($result4);
  echo $all_application;
  echo $accepted;
  echo $rejected;
  echo $pending;
  ?>
    <div id="cont">
        <div class="row w-75 justify-content-between">
            <div class="col-3">
                <div class="card h-100">

                    <div class="card-body">
                        <h5 class="card-title text-center">ALL APPLICATION</h5>
                        <hr>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <a href="status.php" style="text-decoration:none">
                    <div class="card h-100" >
                        <div class="card-body">
                            <h5 class="card-title text-center">ALL PENDING</h5>
                            <hr>

                        </div>
                        <div class="card-footer">
                            <small class="text-muted">ALL Apllication status</small>
                        </div>
                    </div></a>
            </div>
            <div class="col-3">
                <div class="card h-100">

                    <div class="card-body">
                        <h5 class="card-title text-center">ALL Apllication status</h5>
                        <hr>

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