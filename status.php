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
</head>

<body>

    <?php
require_once('config.php');
require_once('admin_session.php');
  include('header.php');
  if(isset($_GET["application_no"])){
    $uaction=($_GET['status']);
    $app=($_GET["application_no"]);
    date_default_timezone_set("Asia/Kolkata");
    $date=date("d/m/y");
    date_default_timezone_set("Asia/Kolkata");
    $time=date("h:i:s");
    if (!$uaction==""&& !$app==""){
    $sql = "UPDATE applicatio SET action='$uaction', status_update_date='$date' WHERE application_no='$app' ";
    if(pg_query($conn,$sql))
    { ?>
    <div class="alert alert-success" role="alert">
        Application Status updated Successfully.
    </div>
    <?php 
        
    }
    else
    echo"Error";
    
    }
    else{
      ?>
    <div class="alert alert-danger" role="alert">
        Please fill all field !
    </div>
    <?php
    }}
  $result_noc = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='NOC' ORDER BY apply_date DESC ;");
  $pending=pg_num_rows($result_noc);
  $result_grivence = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='GRIEVENCE' ORDER BY apply_date DESC ;");
  $pending_grivence=pg_num_rows($result_grivence);
  $result_obj = pg_query($conn,"SELECT * FROM applicatio WHERE action='Pending' AND form_type='OBJECTION' ORDER BY apply_date DESC ;");
  $pending_obj=pg_num_rows($result_obj);

  ?>
    <div id=cont class="flex-column ">
        <div class="d-flex p-2  justify-content-evenly bg-dark w-100 mb-auto" style="top:100">
            <button type="button" class="btn btn-warning px-4" onclick="nocf()"
                style="--bs-btn-padding-y: .025rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                NOC
            </button>
            <button type="button" class="btn btn-warning" onclick="grievencef()"
                style="--bs-btn-padding-y: .025rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                GRIEVIENCE
            </button>
            <button type="button" class="btn btn-warning" onclick="objectionf()"
                style="--bs-btn-padding-y: .025rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                OBJECTION
            </button>
        </div>
        <div class="  justify-content-center w-75  mb-auto" id="noc" style="display:none">
            <div class="w-75 p-3 border boreder-1 shadow-lg p-3 mb-5 bg-body rounded rounded-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Application No.</th>
                            <th scope="col">Apply Date</th>
                            <th scope="col">Approved Date</th>
                            <th scope="col">Status</th>
                            <th scope="col" colspan="2" class=" text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

if (pg_num_rows($result_noc) > 0) {
  $i = 1;
  while ($row_noc = pg_fetch_array($result_noc)) {
    ?>

                        <tr>
                            <th scope="row"><a
                                    href="viewapp.php?application_no=<?php echo $row_noc['application_no']?>& form=noc"><?php echo $row_noc['application_no']?></a></th>
                            <td><?php $newDate = date("d-m-Y", strtotime($row_noc['apply_date'])); 
                             echo $newDate;   ?></td>

                            <td><?php $stDate = date("d-m-Y", strtotime($row_noc['status_update_date']));  
    if($stDate=='01-01-1970'){
        echo "";
    }else{
        echo $stDate;
    }   ?></td>
                            <td><?php echo $row_noc['action'];?></td>
                            <td><a
                                    href="status.php?application_no=<?php echo $row_noc['application_no']?>& status=Approved"><button
                                        type="button" class="btn btn-success">Approved</button></a></td>
                            <td><a
                                    href="status.php?application_no=<?php echo $row_noc['application_no']?>& status=Rejected"><button
                                        type="button" class="btn btn-danger px-4">Reject</button></a></td>
                        </tr>
                        <?php
            $i++;
          }
        } else {
          ?>
                        <table class="table ">
                            <tr>
                                <th scope="col" style="text-align:center">Record not found</th>
                                <?php
        }
        ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="  justify-content-center w-75  mb-auto" id="grievence" style="display:none">
            <div class="w-75 p-3 border boreder-1 shadow-lg p-3 mb-5 bg-body rounded rounded-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Application No.</th>
                            <th scope="col">Apply Date</th>
                            <th scope="col">Approved Date</th>
                            <th scope="col">Status</th>
                            <th scope="col" colspan="2" class=" text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

if (pg_num_rows($result_grivence) > 0) {
  $i = 1;
  while ($row_gri = pg_fetch_array($result_grivence)) {
    ?>

                        <tr>
                            <th scope="row"><a
                                    href="viewapp.php?application_no=<?php echo $row_gri['application_no']?>& form=gri"><?php echo $row_gri['application_no']?></a></th>
                            <td><?php $newDate = date("d-m-Y", strtotime($row_gri['apply_date']));  
    echo $newDate;   ?></td>

                            <td><?php $stDate = date("d-m-Y", strtotime($row_gri['status_update_date']));  
    if($stDate=='01-01-1970'){
        echo "";
    }else{
        echo $stDate;
    };   ?></td>
                            <td><?php echo $row_gri['action'];?></td>
                            <td><a
                                    href="status.php?application_no=<?php echo $row_gri['application_no']?>& status=Approved"><button
                                        type="button" class="btn btn-success">Approved</button></a></td>
                            <td><a
                                    href="status.php?application_no=<?php echo $row_gri['application_no']?>& status=Rejected"><button
                                        type="button" class="btn btn-danger px-4">Reject</button></a></td>
                        </tr>
                        <?php
            $i++;
          }
        } else {
          ?>
                        <table class="table ">
                            <tr>
                                <th scope="col" style="text-align:center">Record not found</th>
                                <?php
        }
        ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="  justify-content-center w-75 mb-auto" id="objection" style="display:none">
            <div class="w-75 p-3 border boreder-1 shadow-lg p-3 mb-5 bg-body rounded rounded-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Application No.</th>
                            <th scope="col">Apply Date</th>
                            <th scope="col">Approved Date</th>
                            <th scope="col">Status</th>
                            <th scope="col" colspan="2" class=" text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

if (pg_num_rows($result_obj) > 0) {
  $i = 1;
  while ($row_obj = pg_fetch_array($result_obj)) {
    ?>

                        <tr>
                        
                        <th scope="row"><a href="viewapp.php?application_no=<?php echo $row_obj['application_no']?>& form=obj"><?php echo $row_obj['application_no']?></a></th>
                            <td><?php $newDate = date("d-m-Y", strtotime($row_obj['apply_date']));  
    echo $newDate;   ?></td>

                            <td><?php $stDate = date("d-m-Y", strtotime($row_obj['status_update_date']));  
    if($stDate=='01-01-1970'){
        echo "";
    }else{
        echo $stDate;
    }   ?></td>
                            <td><?php echo $row_obj['action'];?></td>
                            <td><a
                                    href="status.php?application_no=<?php echo $row_obj['application_no']?>& status=Approved"><button
                                        type="button" class="btn btn-success">Approved</button></a></td>
                            <td><a
                                    href="status.php?application_no=<?php echo $row_obj['application_no']?>& status=Rejected"><button
                                        type="button" class="btn btn-danger px-4">Reject</button></a></td>
                        </tr>
                        <?php
            $i++;
          }
        } else {
          ?>
                        <table class="table ">
                            <tr>
                                <th scope="col" style="text-align:center">Record not found</th>
                                <?php
        }
        ?>

                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <script>
    let noc = document.getElementById("noc");
    let grievence = document.getElementById("grievence");
    let objection = document.getElementById("objection");
    console.log(noc);
    console.log(grievence);
    console.log(objection);

    function nocf() {
        grievence.style.display = "none";
        objection.style.display = "none";
        noc.style.display = "flex";
    }

    function grievencef() {
        objection.style.display = "none";
        noc.style.display = "none";
        grievence.style.display = "flex";
    }

    function objectionf() {
        grievence.style.display = "none";
        noc.style.display = "none";
        objection.style.display = "flex";
    }
    </script>

    <?php
  include('footer.php');
 ?>