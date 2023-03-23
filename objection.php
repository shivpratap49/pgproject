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


<body style="background-color: #eee;">

    <?php
require_once('config.php');
require_once('session.php');
  include('header.php');
  date_default_timezone_set("Asia/Kolkata");
$date=date("d/m/y");
$user=$_SESSION['employee_code'];
$table=$_SESSION['table'];
$pass=$_SESSION['dob'];
$result = pg_query($conn,"SELECT * FROM $table where employee_code='$user' ");
$row = pg_fetch_array($result);
$result1 = pg_query($conn,"SELECT * FROM applicatio where employee_code='$user'AND form_type='OBJECTION' ORDER BY apply_date DESC; ");


?>
    <?php
$send=true;

if(isset($_POST["submit"])){
$exam=($_POST['exam_name']);
$advt=($_POST['advt_no']);
$form_type=($_POST['form_type']);
date_default_timezone_set("Asia/Kolkata");
  $time=date("h:i:s");
  $application_no="O-".str_replace("/","","$date").str_replace(":","","$time");
  if(($exam!="" && $advt!="")){
  $sql = "INSERT INTO applicatio (application_no,employee_code,exam_name,advt_no,form_type,action,apply_date) VALUES ('$application_no', '$user', '$exam', '$advt','$form_type','Pending','$date');";
if(pg_query($conn,$sql))
{?>
    <div class="alert alert-success" role="alert">
        Your Application send Successfully.
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
  ?>
    <div id="cont" class="flex-column">
        <div class="d-flex bg-dark p-2  justify-content-evenly mb-auto w-100">
            <button type="button" class="btn btn-warning" onclick="preapp()"
                style="--bs-btn-padding-y: .025rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                Status of Apllication
            </button>
            <button type="button" class="btn btn-warning" onclick="newapp()"
                style="--bs-btn-padding-y: .025rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                New Application
            </button>
        </div>
        <div class=" justify-content-center mb-auto border boreder-5 w-75 align-item-start" id="preapp"
            style="display:none">
            <div class="w-75 p-3 border boreder-1 shadow-lg p-3 mb-5 bg-body rounded rounded-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Application No.</th>
                            <th scope="col">Apply Date</th>
                            <th scope="col">Approved Date</th>
                            <th scope="col">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

if (pg_num_rows($result1) > 0) {
  $i = 1;
  while ($row1 = pg_fetch_array($result1)) {
    ?>

                        <tr>
                            <th scope="row"><?php echo $row1['application_no']?></th>
                            <td><?php $newDate = date("d-m-Y", strtotime($row1['apply_date']));  
    echo $newDate;   ?></td>

                            <td><?php $stDate = date("d-m-Y", strtotime($row1['status_update_date']));  
    if($stDate=='01-01-1970'){
        echo "";
    }else{
        echo $stDate;
    }   ?></td>
                            <td><?php echo $row1['action'];?></td>
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
        <div class="container flex-fill " id=application style="display:none;">
            <form action="objection.php" method="post" onsubmit="return valid()" name="form">
                <div class="container-sm border bg-white border-dark mt-5 ">

                    <h2 class="text-center mt-3"> APPLICATION </h2>
                    <hr>
                    <div class="mt-5 p-5">
                        <label for="formGroupExampleInput " class=" d-inline">SUBJECT   :  </label>
                        <input type="text" name="advt_no"class="form-control shadow bg-body rounded d-inline w-75" id="formGroupExampleInput"
                            placeholder="Enter Subject here !">
                    </div>
                    <div class="form w-80 mt-5 p-5">
                        <label for="floatingTextarea2" class="  d-inline">Describe your reason </label>
                        <textarea class="form-control shadow bg-body rounded d-inline mb-5 ms-5 me-5" placeholder="Enter Your Reason here !" name="exam_name"
                            id="floatingTextarea2" style="height: 100px"></textarea>
                            <input type="hidden" id="custId" name="form_type" value="OBJECTION">
                    </div>
                    <div class="row p-2">
                        <div class="col-8">
                            <p class="mb-0 ms-5">Date :<b><?php echo $date?></b></p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0">Yours faithfully </p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-8">
                            <p class="mb-0"> </p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0"> <b><?php echo $row["name"];?></b></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-8">
                            <p class="mb-0"> </p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0"> <b><?php echo $row["present_post_grade"];?></b></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-8">
                            <p class="mb-0"> </p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0"> Employee code: <b><?php echo $row["employee_code"];?></b></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-8">
                            <p class="mb-0"> </p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0">Collectorate, Cuttack</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" value="submit" class="btn btn-success mb-3">Send
                            Application</button></div>
                </div>
        </div>
    </div>

  
    <Script>
      function preapp() {
        let pre = document.getElementById("preapp");
        let newapp = document.getElementById("application");
        newapp.style.display = "none";
        pre.style.display = "flex";
    }

    function newapp() {
        let newapp = document.getElementById("application");
        let pre = document.getElementById("preapp");
        pre.style.display = "none";
        newapp.style.display = "block";
    }
    </Script>
    <script src="js/index1.js"></script>
    <?php
  include('footer.php');
 ?>