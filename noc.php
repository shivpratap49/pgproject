<?php 
include('header.php');
require_once('config.php');
require_once('session.php');
$user=$_SESSION['employee_code'];
$table=$_SESSION['table'];
$pass=$_SESSION['dob'];
$result = pg_query($conn,"SELECT * FROM $table where employee_code='$user' ");
$row = pg_fetch_array($result);
?>
<div class="d-flex justify-content-center">
    <div class="container-sm border border-dark m-5 ">

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
                <input type="text" name="whats_no" class="form-control" id="formGroupExampleInput">
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
                    placeholder="Your examamination ">
            </div>
            <div class="col-auto">
                <p class="mb-0">Published vide</p>
            </div>
            <div class="col-4">
                <input type="text" name="whats_no" class="form-control" id="formGroupExampleInput"
                    placeholder=" i.e. Advt. NO 26 of 2021-2022 ">
            </div>
        </div>
        <div class="row p-2">
            <div class="col-auto">
                <p class="mb-0">of</p>
            </div>
            <div class="col-3">
                <input type="text" name="whats_no" class="form-control" id="formGroupExampleInput"
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
                <p class="mb-0">for the said purpose for which act of your kindness, I shall remain ever greatefull to
                    you.
                </p>
            </div>

        </div>
        <div class="row p-2">
            <div class="col-8">
                <p class="mb-0"></p>
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
                <p class="mb-0"> <img src="<?php echo $row['signature_path'] ?>" alt="avatar" class="border border-dark  img-fluid border border rounded"
                                    style="width: 120px; height: 50px;" > </p>
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
                <p class="mb-0">Collectorate, Cuttack</p>
            </div>
        </div>

    </div>
</div>
<?php
include('footer.php');
?>