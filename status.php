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
  $result_noc = pg_query($conn,"SELECT * FROM applicatio WHERE action='pending' AND form_type='NOC' ");
  $pending=pg_num_rows($result_noc);
  $result_grivence = pg_query($conn,"SELECT * FROM applicatio WHERE action='pending'AND form_type='grivence'");
  $pending_grivence=pg_num_rows($result_grivence);
  $result_obj = pg_query($conn,"SELECT * FROM applicatio WHERE action='pending' AND form_type='objection'");
  $pending_obj=pg_num_rows($result_obj);
  echo $pending;
  ?>
    <div id=cont class="flex-column ">
        <div class="d-flex p-2 border border-1 justify-content-evenly  w-100 mb-auto" style="top:100">
            <button type="button" class="btn btn-success px-4" onclick="nocf()"
                style="--bs-btn-padding-y: .025rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                NOC
            </button>
            <button type="button" class="btn btn-success" onclick="grievencef()"
                style="--bs-btn-padding-y: .025rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                GRIEVIENCE
            </button>
            <button type="button" class="btn btn-success" onclick="objectionf()"
                style="--bs-btn-padding-y: .025rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                OBJECTION
            </button>
        </div>
        <div class="  justify-content-center w-75 border border-4 mb-auto" id="noc" style="display:none">
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
                            <th scope="row"><?php echo $row_noc['application_no']?></th>
                            <td><?php $newDate = date("d-m-Y", strtotime($row_noc['apply_date']));  
    echo $newDate;   ?></td>

                            <td></td>
                            <td><?php echo $row_noc['action'];?></td>
                            <td><button type="button" class="btn btn-success">Approved</button></td>
                            <td><button type="button" class="btn btn-danger px-4">Reject</button></td>
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
        <div class="  justify-content-center w-75 border border-4 mb-auto" id="grievence" style="display:none">
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
                            <th scope="row"><?php echo $row_gri['application_no']?></th>
                            <td><?php $newDate = date("d-m-Y", strtotime($row_gri['apply_date']));  
    echo $newDate;   ?></td>

                            <td></td>
                            <td><?php echo $row_gri['action'];?></td>
                            <td><button type="button" class="btn btn-success">Approved</button></td>
                            <td><button type="button" class="btn btn-danger px-4">Reject</button></td>
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
        <div class="  justify-content-center w-75 border border-4 mb-auto" id="objection" style="display:none">
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
                            <th scope="row"><?php echo $row_obj['application_no']?></th>
                            <td><?php $newDate = date("d-m-Y", strtotime($row_obj['apply_date']));  
    echo $newDate;   ?></td>

                            <td></td>
                            <td><?php echo $row_obj['action'];?></td>
                            <td><button type="button" class="btn btn-success">Approved</button></td>
                            <td><button type="button" class="btn btn-danger px-4">Reject</button></td>
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
    function nocf(){
        grievence.style.display = "none";
        objection.style.display = "none";
        noc.style.display = "flex";
    }
    function grievencef(){
        objection.style.display = "none";
        noc.style.display = "none";
        grievence.style.display = "flex";
    }
    function objectionf(){
        grievence.style.display = "none";
        noc.style.display = "none";
        objection.style.display = "flex";
    }
  
    </script>

    <?php
  include('footer.php');
 ?>