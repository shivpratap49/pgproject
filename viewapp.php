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
    $app=($_GET["application_no"]);
    $form=($_GET['form']);
    $result1 = pg_query($conn,"SELECT * FROM applicatio where application_no='$app'; ");
$row = pg_fetch_array($result1);
$table= $row["able"];
$emp= $row["employee_code"];
$result2 = pg_query($conn,"SELECT * FROM $table where employee_code='$emp'; ");
$row2 = pg_fetch_array($result2);
  }

  ?>
  <?php if($form=='noc'){?>
    <div id=cont>
        <div class="container" id=application style="">

            <div class="container-sm border border-dark mt-5 ">

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
                    <div class="col-5"><b>
                  <?php echo $row['exam_name'];?></b>
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
                        <b><?php echo $row2["name"];?></b>,
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-auto">
                        <b> <?php echo $row2["present_post_grade"];?></b>
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
                    <div class="col-4"><b>
                   <?php echo $row['exam_name'];?></b>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Published vide</p>
                    </div>
                    <div class="col-4"><b><?php echo $row['advt_no'];?></b>
                        
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-auto">
                        <p class="mb-0">of</p>
                    </div>
                    <div class="col-3"><b><?php echo $row['board_name'];?></b>
                        
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
                        <p class="mb-0">Date :<b><?php $newDate = date("d-m-Y", strtotime($row['apply_date'])); 
                        echo $newDate;?></b></p>
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
                        <p class="mb-0"> <img src="<?php echo $row2['signature_path'] ?>" alt="avatar"
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
                        <p class="mb-0"> <b><?php echo $row2["name"];?></b></p>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-8">
                        <p class="mb-0"> </p>
                    </div>
                    <div class="col-4">
                        <p class="mb-0"> <b><?php echo $row2["present_post_grade"];?></b></p>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-8">
                        <p class="mb-0"> </p>
                    </div>
                    <div class="col-4">
                        <p class="mb-0"> Employee code: <b><?php echo $row2["employee_code"];?></b></p>
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
                <div class="row p-2 mt-5">
                    <div class="col-5">
                        <p class="mb-0"> </p>
                    </div>
                    <div class="col-auto ms-3">
                    <a
                                    href="status.php?application_no=<?php echo $row['application_no']?>& status=Approved"><button
                                        type="button" class="btn btn-success">Approved</button></a>
                                        <a
                                    href="status.php?application_no=<?php echo $row['application_no']?>& status=Rejected"><button
                                        type="button" class="btn btn-danger px-4">Reject</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }
    if($form=='obj'){?>
    <!--objection application-->
    <div class="container flex-fill " id=application style="">
        <form action="objection.php" method="post" onsubmit="return valid()" name="form">
            <div class="container-sm border bg-white border-dark mt-5 ">

                <h2 class="text-center mt-3"> APPLICATION </h2>
                <hr>
                <div class="mt-5 p-5">
                    <label for="formGroupExampleInput " class=" d-inline">SUBJECT : </label>
                    <div class="  bg-body  d-inline w-75"><b><?php echo $row['advt_no'];?></b>
                        </div>
                </div>
                <div class="form w-80 mt-5 p-5">
                    <label for="floatingTextarea2" class="  d-inline">Describe your reason </label>
                    <div class="  bg-body  d-inline mb-5 ms-5 me-5 " style="height: 100px"><p><?php echo $row['exam_name'];?></p></div>
                </div>
                <div class="row p-2">
                    <div class="col-8">
                        <p class="mb-0 ms-5">Date :<b><?php $newDate = date("d-m-Y", strtotime($row['apply_date'])); 
                        echo $newDate;?></b></p>
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
                        <p class="mb-0"> <b><?php echo $row2["name"];?></b></p>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-8">
                        <p class="mb-0"> </p>
                    </div>
                    <div class="col-4">
                        <p class="mb-0"> <b><?php echo $row2["present_post_grade"];?></b></p>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-8">
                        <p class="mb-0"> </p>
                    </div>
                    <div class="col-4">
                        <p class="mb-0"> Employee code: <b><?php echo $row2["employee_code"];?></b></p>
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
                <a
                                    href="status.php?application_no=<?php echo $row['application_no']?>& status=Approved"><button
                                        type="button" class="btn btn-success m-3">Approved</button></a>
                                        <a
                                    href="status.php?application_no=<?php echo $row['application_no']?>& status=Rejected"><button
                                        type="button" class="btn btn-danger m-3 px-4">Reject</button></a>
                </div>
            </div>
    </div>
    <?php
    }
    if($form=='gri'){?>
    <div class="container flex-fill " id=application style="">
            <form action="grevience.php" method="post" onsubmit="return valid()" name="form">
                <div class="container-sm border bg-white border-dark mt-5 ">

                    <h2 class="text-center mt-3"> APPLICATION </h2>
                    <hr>
                    <div class="mt-5 p-5">
                        <label for=" " class=" d-inline">SUBJECT   :  </label>
                        <div class="  bg-body  d-inline w-75"><b><?php echo $row['advt_no'];?></b>
                        </div>
                    </div>
                    <div class="form w-80 mt-5 p-5">
                        <label for="floatingTextarea2" class="  d-inline">Describe your reason :-</label>
                        <div class="  bg-body  d-inline mb-5 ms-5 me-5 " style="height: 100px"><p><?php echo $row['exam_name'];?></p></div>
                        
                    </div>
                    <div class="row p-2">
                        <div class="col-8">
                            <p class="mb-0 ms-5">Date :<b><?php $newDate = date("d-m-Y", strtotime($row['apply_date'])); 
                        echo $newDate;?></b></p>
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
                            <p class="mb-0"> <b><?php echo $row2["name"];?></b></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-8">
                            <p class="mb-0"> </p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0"> <b><?php echo $row2["present_post_grade"];?></b></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-8">
                            <p class="mb-0"> </p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0"> Employee code: <b><?php echo $row2["employee_code"];?></b></p>
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
                    <a
                                    href="status.php?application_no=<?php echo $row['application_no']?>& status=Approved"><button
                                        type="button" class="btn btn-success m-3 ">Approved</button></a>
                                        <a
                                    href="status.php?application_no=<?php echo $row['application_no']?>& status=Rejected"><button
                                        type="button" class="btn btn-danger m-3 px-4">Reject</button></a></div>
                </div>
        </div>
    <?php
    }
  include('footer.php');
 ?>