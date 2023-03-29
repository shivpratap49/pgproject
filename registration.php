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
  if(isset($_POST["driver"])){
    $sl_no=($_POST['sl_no'] ) ;
    $employee_code=($_POST['employee_code'] );
    $employee_name=($_POST['employee_name'] ) ;
    $dob=($_POST['dob'] );
    $category=($_POST['category'] );
    $join_date=($_POST['joining_date']);
    $h_block=($_POST['h_block'] );
    $senior_date=($_POST['senior_date'] );
    $head_date=($_POST['head_date'] );
    $s_date=($_POST['s_date'] );
    $present_place=($_POST['present_posting']);
    $present_post=($_POST['present_grade'] ) ;
    /*$exam=($_POST['exam_name']);
    $board=($_POST['board']);
    $advt=($_POST['advt_no']);
    $form_type=($_POST['form_type']);
    
      $time=date("h:i:s");
      $application_no="N-".str_replace("/","","$date").str_replace(":","","$time");
      if(($exam!="" && $advt!="" && $board!="")){
      $sql = "INSERT INTO applicatio (application_no,employee_code,exam_name,advt_no,board_name,form_type,action,apply_date,able) VALUES ('$application_no', '$user', '$exam', '$advt', '$board','$form_type','Pending','$date','$table');";
    if(pg_query($conn,$sql))
    { ?>
        <div class="alert alert-success" role="alert">
            Your Application send Successfully.
        </div>
        <?php 
        header("location: noc.php");
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
    }*/}
    if(isset($_POST["ministry"])){
        echo"<pre>";
        print_r($_POST);
        $sl_no=($_POST['sl_no'] ) ;
        $employee_code=($_POST['employee_code'] );
        $employee_name=($_POST['employee_name'] ) ;
        $dob=($_POST['dob'] );
        $category=($_POST['catogory'] );
        $join_date=($_POST['joining_date']);
        $h_block=($_POST['h_block'] );
        $e_qual=($_POST['e_qual'] );
        $senior_date=($_POST['senior_date'] );
        $head_date=($_POST['head_date'] );
        $r_year=($_POST['r_year'] );
        $present_place=($_POST['present_place']);
        $present_post=($_POST['present_post'] ) ;
        $pa_paper_i=($_POST['pa_paper_i'] );
        $pa_paper_ii=($_POST['pa_paper_ii'] );
        $fa_paper_iii=($_POST['fa_paper_iii'] );
        $fa_paper_iv=($_POST['fa_paper_iv'] );
        $j_sc_date=($_POST['j_sc_date'] );
        $j_hc_date=($_POST['j_hc_date'] );
        /*$exam=($_POST['exam_name']);
        $board=($_POST['board']);
        $advt=($_POST['advt_no']);
        $form_type=($_POST['form_type']);
        
          $time=date("h:i:s");
          $application_no="N-".str_replace("/","","$date").str_replace(":","","$time");
          if(($exam!="" && $advt!="" && $board!="")){
          $sql = "INSERT INTO applicatio (application_no,employee_code,exam_name,advt_no,board_name,form_type,action,apply_date,able) VALUES ('$application_no', '$user', '$exam', '$advt', '$board','$form_type','Pending','$date','$table');";
        if(pg_query($conn,$sql))
        { ?>
            <div class="alert alert-success" role="alert">
                Your Application send Successfully.
            </div>
            <?php 
            header("location: noc.php");
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
        }*/}
        if(isset($_POST["revenue"])){
            echo"<pre>";
        print_r($_POST);
        echo"<pre>";
        
            $sl_no=($_POST['sl_no'] ) ;
            $employee_code=($_POST['employee_code'] );
            $employee_name=($_POST['employee_name'] ) ;
            $dob=($_POST['dob'] );
            $category=($_POST['category'] );
            $join_date=($_POST['join_date']);
            $h_block=($_POST['h_block'] );
            $join_date_present_post=($_POST['jonin_date_present_grade'] );
            $edn=($_POST['edn_qua'] );
            $s_date=($_POST['s_date'] );
            $post_name_intial_grade($_POST['post_name_intial_grade']);
            $theory=($_POST['theory'] );
            $practical=($_POST['practical'] );
            $dept_exam=($_POST['dept_exam]'] );
            $present_place=($_POST['present_place']);
            $present_post=($_POST['present_post'] ) ;
            /*$exam=($_POST['exam_name']);
            $board=($_POST['board']);
            $advt=($_POST['advt_no']);
            $form_type=($_POST['form_type']);
            
              $time=date("h:i:s");
              $application_no="N-".str_replace("/","","$date").str_replace(":","","$time");
              if(($exam!="" && $advt!="" && $board!="")){
              $sql = "INSERT INTO applicatio (application_no,employee_code,exam_name,advt_no,board_name,form_type,action,apply_date,able) VALUES ('$application_no', '$user', '$exam', '$advt', '$board','$form_type','Pending','$date','$table');";
            if(pg_query($conn,$sql))
            { ?>
                <div class="alert alert-success" role="alert">
                    Your Application send Successfully.
                </div>
                <?php 
                header("location: noc.php");
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
            }*/}
  ?>
    <div id="cont" class="flex-column">
        <div class="d-flex p-2 flex-column mt-5 align-items-center bg-dark w-25 border border-4 mb-auto">
            <div> <label class="form-label text-white" for="specificSizeSelect">PLEASE CHOOSE DEPARTMENT</label></div>
            <div> <select class="form-select" id="specificSizeSelectn" name="table" style="width: 200px;">
                    <option selected disabled>Choose...</option>
                    <option value="driver">DRIVER STAFF</option>
                    <option value="revenue">REVENUE STAFF</option>
                    <option value="ministry">MINISTRY STAFF</option>

                </select>
            </div>
        </div>
        <div class="container" id=application>
            <form action="registration.php" method="post" onsubmit="return valid()" name="form">
                <div class="container-sm border border-dark mt-5 ">

                    <h2 class="text-center"><span>Driver Registration form </span>
                        <hr>
                    </h2>

                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Gradation Sl. no. :</p>
                        </div>
                        <div class="col-sm-3">

                            <input type="text" name="sl_no" class="form-control" id="name"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Employee Code :</p>
                        </div>
                        <div class="col-3">

                            <input type="text" name="employee_code" class="form-control" id="name"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Employee Name :</p>
                        </div>
                        <div class="col-sm-3">
                            <p> <input type="name" name="employee_name" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">DOB :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="dob" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>

                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Category :</p>
                        </div>
                        <div class="col-sm-3">
                            <p> <input type="name" name="category" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Date of Entry Govt. Service :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="joining_date" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Home Block Address :</p>
                        </div>
                        <div class="col-9">
                            <p class="mb-0"><input type="name" name="h_block" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>

                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Date of joining as Senior Driver :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="date" id="start" name="senior_date" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Date of joining as Head Driver :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="head_date" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Driving license-no :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="name" name="employee_code" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Date of Superanuation :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="s_date" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Present Place of Posting :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="name" name="present_posting" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Present Post-Grade :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="name" name="present_grade" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                    </div>

                    

                </div>
                <div class="row p-2 mt-5">
                    <div class="col-10">
                        <p class="mb-0"> </p>
                    </div>
                    <div class="col-auto ms-3">
                        <button type="submit" name="driver" value="submit" class="btn btn-success">Send
                            Application</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container" id=application>
            <form action="registration.php" method="post" onsubmit="return valid()" name="form">
                <div class="container-sm border border-dark mt-5 ">

                    <h2 class="text-center"><span>Ministry Registration form </span>
                        <hr>
                    </h2>

                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Gradation Sl. no. :</p>
                        </div>
                        <div class="col-sm-3">

                            <input type="name" name="sl_no" class="form-control" id="name"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Employee Code :</p>
                        </div>
                        <div class="col-3">

                            <input type="name" name="employee_code" class="form-control" id="name"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Employee Name :</p>
                        </div>
                        <div class="col-sm-3">
                            <p> <input type="name" name="employee_name" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">DOB :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="dob" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>

                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Category :</p>
                        </div>
                        <div class="col-sm-3">
                            <p> <input type="name" name="catogory" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Date of Entry Govt. Service :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="joining_date" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Home Block Address :</p>
                        </div>
                        <div class="col-9">
                            <p class="mb-0"><input type="name" name="h_block" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>

                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Qualification(e_qual) :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="name" name="e_qual" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">r_year :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="r_year" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Pa_paper I :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="name" name="pa_paper_i" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Pa_paper II :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="pa_paper_ii" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Fa_paper_III :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="name" name="fa_paper_iii" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Fa_paper_IV :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="name" name="fa_paper_iv" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Present Place of Posting :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="name" name="present_place" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Present Post Grade :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="name" name="present_post" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">J_sc Date :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="date" id="start" name="j_sc_date" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">J_hc Date :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="j_hc_date" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                    </div>
                </div>
                <div class="row p-2 mt-5">
                    <div class="col-10">
                        <p class="mb-0"> </p>
                    </div>
                    <div class="col-auto ms-3">
                        <button type="submit" name="ministry" value="submit" class="btn btn-success">Send
                            Application</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container" id=application>
            <form action="registration.php" method="post" onsubmit="return valid()" name="form">
                <div class="container-sm border border-dark mt-5 ">

                    <h2 class="text-center"><span>Revenue Registration form </span>
                        <hr>
                    </h2>

                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Gradation Sl. no. :</p>
                        </div>
                        <div class="col-sm-3">

                            <input type="name" name="sl_no" class="form-control" id="name"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Employee Code :</p>
                        </div>
                        <div class="col-3">

                            <input type="name" name="employee_code" class="form-control" id="name"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Employee Name :</p>
                        </div>
                        <div class="col-sm-3">
                            <p> <input type="name" name="employee_name" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">DOB :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="dob" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>

                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Category :</p>
                        </div>
                        <div class="col-sm-3">
                            <p> <input type="name" name="category" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Date of Entry Govt. Service :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="join_date" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Home Block Address :</p>
                        </div>
                        <div class="col-9">
                            <p class="mb-0"><input type="name" name="h_block" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>

                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">J_Date Present Grade :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="date" id="start" name="jonin_date_present_grade" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">S Date :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="date" id="start" name="s_date" class="form-control"
       value="2023-01-01"
       min="1900-01-01" max="2050-12-31"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Qualification(edn-qual) :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="name" name="edn_qual" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Post Name  Intial grade  :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="name" name="post_name_intial_grade" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Theory :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="name" name="theory" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Practical  :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="name" name="practical" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Deprtment exam :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="name" name="dept_exam" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        
                        
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Present Place of Posting :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="name" name="present_place" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Present Post-Grade :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="name" name="present_post" class="form-control" id="name"
                                aria-describedby="emailHelp"></p>
                        </div>
                    </div>


                </div>
                <div class="row p-2 mt-5">
                    <div class="col-10">
                        <p class="mb-0"> </p>
                    </div>
                    <div class="col-auto ms-3">
                        <button type="submit" name="revenue" value="submit" class="btn btn-success">Send
                            Application</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script></script>
    <?php
  include('footer.php');
 ?>