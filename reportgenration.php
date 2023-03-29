<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <style>
  @media print {
  header, footer, aside, form,nav {
    display: none;
  }
  body {
    font-size: 8px;
  }
}
    </style>
</head>
<?php
  
  require_once('config.php');
  require_once('admin_session.php');
  include('header.php');
  $result1 = pg_query($conn,"SELECT * FROM applicatio WHERE form_type='NOC' AND able='driver'");
  $result2 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='NOC' AND able='driver'");
  $result3 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Approved' AND form_type='NOC' AND able='driver'");
  $result4 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Rejected' AND form_type='NOC' AND able='driver'");
 $noc_driver_all=pg_num_rows($result1);
 $noc_driver_pending=pg_num_rows($result2);
  $noc_driver_accepted=pg_num_rows($result3);
  $noc_driver_rejected=pg_num_rows($result4);
  // APPLICATION PENDING WISE QUERY
  $result5 = pg_query($conn,"SELECT * FROM applicatio WHERE form_type='GRIEVENCE' AND able='driver'");
  $result6 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='GRIEVENCE' AND able='driver'");
  $result7 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Approved' AND form_type='GRIEVENCE' AND able='driver'");
  $result8 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Rejected' AND form_type='GRIEVENCE' AND able='driver'");
 $gri_driver_all=pg_num_rows($result5);
 $gri_driver_pending=pg_num_rows($result6);
  $gri_driver_accepted=pg_num_rows($result7);
  $gri_driver_rejected=pg_num_rows($result8);
  //
  $result9 = pg_query($conn,"SELECT * FROM applicatio WHERE form_type='OBJECTION' AND able='driver'");
  $result10 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='OBJECTION' AND able='driver'");
  $result11= pg_query($conn,"SELECT * FROM applicatio WHERE action='Approved' AND form_type='OBJECTION' AND able='driver'");
  $result12= pg_query($conn,"SELECT * FROM applicatio WHERE action='Rejected' AND form_type='OBJECTION' AND able='driver'");
 $obj_driver_all=pg_num_rows($result9);
 $obj_driver_pending=pg_num_rows($result10);
  $obj_driver_accepted=pg_num_rows($result11);
  $obj_driver_rejected=pg_num_rows($result12);
  //
  //
  $result13 = pg_query($conn,"SELECT * FROM applicatio WHERE form_type='NOC' AND able='ministry'");
  $result14= pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='NOC' AND able='ministry'");
  $result15= pg_query($conn,"SELECT * FROM applicatio WHERE action='Approved' AND form_type='NOC' AND able='ministry'");
  $result16= pg_query($conn,"SELECT * FROM applicatio WHERE action='Rejected' AND form_type='NOC' AND able='ministry'");
 $noc_ministry_all=pg_num_rows($result13);
 $noc_ministry_pending=pg_num_rows($result14);
  $noc_ministry_accepted=pg_num_rows($result15);
  $noc_ministry_rejected=pg_num_rows($result16);
  // APPLICATION PENDING WISE QUERY
  $result17 = pg_query($conn,"SELECT * FROM applicatio WHERE form_type='GRIEVENCE' AND able='ministry'");
  $result18= pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='GRIEVENCE' AND able='ministry'");
  $result19 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Approved' AND form_type='GRIEVENCE' AND able='ministry'");
  $result20 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Rejected' AND form_type='GRIEVENCE' AND able='ministry'");
 $gri_ministry_all=pg_num_rows($result17);
 $gri_ministry_pending=pg_num_rows($result18);
  $gri_ministry_accepted=pg_num_rows($result19);
  $gri_ministry_rejected=pg_num_rows($result20);
  //
  $result21 = pg_query($conn,"SELECT * FROM applicatio WHERE form_type='OBJECTION' AND able='ministry'");
  $result22 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='OBJECTION' AND able='ministry'");
  $result23= pg_query($conn,"SELECT * FROM applicatio WHERE action='Approved' AND form_type='OBJECTION' AND able='ministry'");
  $result24= pg_query($conn,"SELECT * FROM applicatio WHERE action='Rejected' AND form_type='OBJECTION' AND able='ministry'");
 $obj_ministry_all=pg_num_rows($result21);
 $obj_ministry_pending=pg_num_rows($result22);
  $obj_ministry_accepted=pg_num_rows($result23);
  $obj_ministry_rejected=pg_num_rows($result24);
  //
  //
  $result25 = pg_query($conn,"SELECT * FROM applicatio WHERE form_type='NOC' AND able='revenue'");
  $result26= pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='NOC' AND able='revenue'");
  $result27= pg_query($conn,"SELECT * FROM applicatio WHERE action='Approved' AND form_type='NOC' AND able='revenue'");
  $result28= pg_query($conn,"SELECT * FROM applicatio WHERE action='Rejected' AND form_type='NOC' AND able='revenue'");
 $noc_revenue_all=pg_num_rows($result25);
 $noc_revenue_pending=pg_num_rows($result26);
  $noc_revenue_accepted=pg_num_rows($result27);
  $noc_revenue_rejected=pg_num_rows($result28);
  // APPLICATION PENDING WISE QUERY
  $result29 = pg_query($conn,"SELECT * FROM applicatio WHERE form_type='GRIEVENCE' AND able='revenue'");
  $result30= pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='GRIEVENCE' AND able='revenue'");
  $result31 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Approved' AND form_type='GRIEVENCE' AND able='revenue'");
  $result32 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Rejected' AND form_type='GRIEVENCE' AND able='revenue'");
 $gri_revenue_all=pg_num_rows($result29);
 $gri_revenue_pending=pg_num_rows($result30);
  $gri_revenue_accepted=pg_num_rows($result31);
  $gri_revenue_rejected=pg_num_rows($result32);
  //
  $result33 = pg_query($conn,"SELECT * FROM applicatio WHERE form_type='OBJECTION' AND able='revenue'");
  $result34 = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='OBJECTION' AND able='revenue'");
  $result35= pg_query($conn,"SELECT * FROM applicatio WHERE action='Approved' AND form_type='OBJECTION' AND able='revenue'");
  $result36= pg_query($conn,"SELECT * FROM applicatio WHERE action='Rejected' AND form_type='OBJECTION' AND able='revenue'");
 $obj_revenue_all=pg_num_rows($result33);
 $obj_revenue_pending=pg_num_rows($result34);
  $obj_revenue_accepted=pg_num_rows($result35);
  $obj_revenue_rejected=pg_num_rows($result36);
  
 ?>

<body style="background-color: #eee;">
    <div id="cont">
        <div class="container" id=application style="">

            <div class="d-flex flex-column align-items-center border border-dark mt-5 ">

                <h2 class="text-center p-2"> DASHBOARD OF COLLECTOR FOR GRADATION LISTING
                    <hr>
                </h2>
                <hr>

                <div class=" row w-100 justify-content-evenly  ">
                    <div class="col-4">

                        <div class="card h-100 link-dark">

                            <div class="card-body">
                                <h5 class="card-title text-center">Driver</h5>
                                <hr>
                                <table style="width:85%">
                                    <tr><th><p class=""><b>NOC</b></p></th><th></th></tr>
                                    <tr><td><p class="">Total Noc Recieved : </p></td><td class="text-center"><p class="text-center"><?php echo$noc_driver_all?></p></td></tr>
                                    <tr><td><p class="">Total Noc Approved : </p></td><td><p><?php echo$noc_driver_accepted?></p></td></tr>
                                    <tr><td><p class="">Total Noc Rejected : </p></td><td><p><?php echo$noc_driver_rejected?></p></td></tr>
                                    <tr><td><p class="">Total Noc Pending : </p></td><td><p><?php echo$noc_driver_pending?></p></td></tr>
                                    <tr><td><p class=""><b>GRIEVENCE</b></p></td><td><p></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Recieved :</p></td><td><p><?php echo$gri_driver_all?></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Approved : </p></td><td><p><?php echo$gri_driver_accepted?></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Rejected : </p></td><td><p><?php echo$gri_driver_rejected?></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Pending : </p></td><td><p><?php echo$gri_driver_pending?></p></td></tr>
                                    <tr><td><p class=""><b>OBJECTION</b></p></td><td><p></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Recieved : </p></td><td><p><?php echo$obj_driver_all?></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Approved : </p></td><td><p><?php echo$obj_driver_accepted?></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Rejected : </p></td><td><p><?php echo$obj_driver_rejected?></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Pending : </p></td><td><p><?php echo$obj_driver_pending?></p></td></tr>
                                </table>
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
                                    <h5 class="card-title text-center">Ministry</h5>
                                    <hr>
                                    <table style="width:85%">
                                    <tr><th><p class=""><b>NOC</b></p></th><th></th></tr>
                                    <tr><td><p class="">Total Noc Recieved : </p></td><td class="text-center"><p class="text-center"><?php echo$noc_ministry_all?></p></td></tr>
                                    <tr><td><p class="">Total Noc Approved : </p></td><td><p><?php echo$noc_ministry_accepted?></p></td></tr>
                                    <tr><td><p class="">Total Noc Rejected : </p></td><td><p><?php echo$noc_ministry_rejected?></p></td></tr>
                                    <tr><td><p class="">Total Noc Pending : </p></td><td><p><?php echo$noc_ministry_pending?></p></td></tr>
                                    <tr><td><p class=""><b>GRIEVENCE</b></p></td><td><p></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Recieved :</p></td><td><p><?php echo$gri_ministry_all?></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Approved : </p></td><td><p><?php echo$gri_ministry_accepted?></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Rejected : </p></td><td><p><?php echo$gri_ministry_rejected?></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Pending : </p></td><td><p><?php echo$gri_ministry_pending?></p></td></tr>
                                    <tr><td><p class=""><b>OBJECTION</b></p></td><td><p></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Recieved : </p></td><td><p><?php echo$obj_ministry_all?></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Approved : </p></td><td><p><?php echo$obj_ministry_accepted?></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Rejected : </p></td><td><p><?php echo$obj_ministry_rejected?></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Pending : </p></td><td><p><?php echo$obj_ministry_pending?></p></td></tr>
                                </table>
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
                                <h5 class="card-title text-center">Revenue</h5>
                                <hr>
                                <table style="width:85%">
                                    <tr><th><p class=""><b>NOC</b></p></th><th></th></tr>
                                    <tr><td><p class="">Total Noc Recieved : </p></td><td class="text-center"><p class="text-center"><?php echo$noc_revenue_all?></p></td></tr>
                                    <tr><td><p class="">Total Noc Approved : </p></td><td><p><?php echo$noc_revenue_accepted?></p></td></tr>
                                    <tr><td><p class="">Total Noc Rejected : </p></td><td><p><?php echo$noc_revenue_rejected?></p></td></tr>
                                    <tr><td><p class="">Total Noc Pending : </p></td><td><p><?php echo$noc_revenue_pending?></p></td></tr>
                                    <tr><td><p class=""><b>GRIEVENCE</b></p></td><td><p></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Recieved :</p></td><td><p><?php echo$gri_revenue_all?></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Approved : </p></td><td><p><?php echo$gri_revenue_accepted?></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Rejected : </p></td><td><p><?php echo$gri_revenue_rejected?></p></td></tr>
                                    <tr><td><p class="">Total GRIEVENCE Pending : </p></td><td><p><?php echo$gri_revenue_pending?></p></td></tr>
                                    <tr><td><p class=""><b>OBJECTION</b></p></td><td><p></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Recieved : </p></td><td><p><?php echo$obj_revenue_all?></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Approved : </p></td><td><p><?php echo$obj_revenue_accepted?></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Rejected : </p></td><td><p><?php echo$obj_revenue_rejected?></p></td></tr>
                                    <tr><td><p class="">Total OBJECTION Pending : </p></td><td><p><?php echo$obj_revenue_pending?></p></td></tr>
                                </table>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success m-5" onclick="window.print()">Print</button>
            </div>
        </div>
    </div>
    <?php
  
  
  include('footer.php');
 ?>