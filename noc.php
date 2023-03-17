<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
    <?php 
include('header.php');
require_once('config.php');
require_once('session.php');
date_default_timezone_set("Asia/Kolkata");
$date=date("d/m/y");
$user=$_SESSION['employee_code'];
$table=$_SESSION['table'];
$pass=$_SESSION['dob'];
$result = pg_query($conn,"SELECT * FROM $table where employee_code='$user' ");
$row = pg_fetch_array($result);
?>
<?php
$log=true;

if($_SERVER["REQUEST_METHOD"]=="POST"){
$exam=($_POST['exam_name']);
$board=($_POST['board']);
$advt=($_POST['advt_no']);
$form_type=($_POST['form_type']);
date_default_timezone_set("Asia/Kolkata");
  $time=date("h:i:s");
  $application_no="N-".str_replace("/","","$date").str_replace(":","","$time");
  $sql = "INSERT INTO applicatio (application_no,employee_code,exam_name,advt_no,board_name,form_type) VALUES ('$application_no', '$user', '$exam', '$advt', '$board','$form_type');";
if(pg_query($conn,$sql))
{
    echo("Application Submited successfully");
}
else
echo"Error";

}
?>  <div>
    <div class="container" id=application>
        <div class="container-sm border border-dark mt-5 ">
            <form action=noc.php method="post">
                <h2 class="text-center"> APPLICATION </h2>
                <hr>
                <div class="row p-2">
                    <div class="col-2">
                        <p class="mb-0">To,</p>
                    </div>
                    <div class="col-sm-9">

                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <p class="mb-0"></p>
                    </div>
                    <div class="col-10">
                        <p class="mb-0">The Collector, Cuttack.</p>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <p class="mb-0">Sub:</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Regarding issuance of N.O.C to appear </p>
                    </div>
                    <div class="col-5">
                        <input type="text" name="exam_name" class="form-control" id="formGroupExampleInput"
                        placeholder="i.e. Assistant Section Officer Examination 2022 ">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <p class="mb-0"></p>
                    </div>
                    <div class="col-sm-10">
                        <p class="mb-0">(Through Deputy Collector,Establishment ) </p>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <p class="mb-0">Sir,</p>
                    </div>
                    <div class="col-sm-10">
                        <p class="mb-0"></p>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-2">
                        <p class="mb-0"></p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">With humble respect and reverence, I </p>
                    </div>
                    <div class="col-auto">
                        <b><?php echo $row["name"];?></b>,
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-auto">
                        <b> <?php echo $row["present_post_grade"];?></b>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">of Establishment Section, collactorate,</p>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-12">
                        <p class="mb-0">Cuttack beg to state here that, I want to apply/appear for the post of </p>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-4">
                        <input type="text" name="whats_no" class="form-control" id="formGroupExampleInput"
                            placeholder="i.e. Assistant Section Officer Examination 2022">
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Published vide</p>
                    </div>
                    <div class="col-4">
                        <input type="text" name="advt_no" class="form-control" id="formGroupExampleInput"
                            placeholder=" i.e. Advt. NO 26 of 2021-2022 ">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-auto">
                        <p class="mb-0">of</p>
                    </div>
                    <div class="col-3">
                        <input type="text" name="board" class="form-control" id="formGroupExampleInput"
                            placeholder="OPSC/OSSC/OSSSC. ">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-1">
                        <p class="mb-0"></p>
                    </div>
                    <div class="col-sm-10">
                        <p class="mb-0">Therefore, I would request you to kindly issue NOC in my favour</p>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-12">
                        <p class="mb-0">for the said purpose for which act of your kindness, I shall remain ever
                            greatefull to
                            you.
                        </p>
                    </div>

                </div>
                <div class="row p-2">
                    <div class="col-8">
                        <p class="mb-0">Date :<b><?php echo $date?></b></p>
                    </div>
                    <div class="col-4">
                        <p class="mb-0">Yours faithfully </p>
                    </div>
                </div>

                <div class="row p-2 ">
                    <div class="col-8">
                        <p class="mb-0"></p>
                    </div>
                    <div class="col-4">
                        <p class="mb-0"> <img src="<?php echo $row['signature_path'] ?>" alt="avatar"
                                class="border border-dark  img-fluid border border rounded"
                                style="width: 120px; height: 50px;"> </p>
                    </div>
                </div>

                <div class="row p-2 ">
                    <div class="col-9">
                        <p class="mb-0"> </p>
                    </div>
                    <div class="col-3">
                        <p class="mb-0"> </p>
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
                <input type="hidden" id="custId" name="form_type" value="NOC">

        </div>
        <div class="row p-2 mt-5">
            <div class="col-10">
                <p class="mb-0"> </p>
            </div>
            <div class="col-auto ms-3">
                <button type="submit" class="btn btn-success">Send Application</button>
            </div>
        </div>
        </form>
    </div>
    <?php
include('footer.php');
?>