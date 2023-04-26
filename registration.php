<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $(function() {
        $(".datepicker").datepicker({
            dateFormat: "dd-mm-yy",
            changeMonth: true,
            changeYear: true,
            yearRange: "-65:+65",



        });
    });
    </script>
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
    $driving_license=($_POST['driving_license']);
    $head_date=($_POST['head_date'] );
    $s_date=($_POST['s_date'] );
    $present_place=($_POST['present_posting']);
    $present_post=($_POST['present_grade'] ) ;
   
     
      $sql = "INSERT INTO driver (name,dob,category,h_block,date_of_entry_into_govt_service,date_of_joining_to_post_of_sr_driver,date_of_joining_to_post_of_head_driver,driving_licence_no,date_of_superannuation,present_place_of_posting,present_post_grade,employee_code) VALUES ('$employee_name','$dob','$category','$h_block','$join_date','$senior_date','$head_date','$driving_license',' $s_date','$present_place','$present_post','$employee_code');";
    if(pg_query($conn,$sql))
    { ?>
    <div class="alert alert-success" role="alert">
    Employee Regstered Successfully.
    </div>
    <?php 
      
    }
    else
    echo"Error";
    
    }
    
    if(isset($_POST["ministry"])){
       
        $sl_no=($_POST['sl_no'] ) ;
        $employee_code=($_POST['employee_code'] );
        $employee_name=($_POST['employee_name'] ) ;
        $dob=($_POST['dob'] );
        $category=($_POST['catogory'] );
        $join_date=($_POST['joining_date']);
        $h_block=($_POST['h_block'] );
        $e_qual=($_POST['e_qual'] );
        $r_year=($_POST['r_year'] );
        $present_place=($_POST['present_place']);
        $present_post=($_POST['present_post'] ) ;
        $pa_paper_i=($_POST['pa_paper_i'] );
        $pa_paper_ii=($_POST['pa_paper_ii'] );
        $fa_paper_iii=($_POST['fa_paper_iii'] );
        $fa_paper_iv=($_POST['fa_paper_iv'] );
        $j_sc_date=($_POST['j_sc_date'] );
        $j_hc_date=($_POST['j_hc_date'] );
        $s_date=($_POST['s_date'] );
     $sql = "INSERT INTO ministry (sl_no,name,dob,category,h_block,e_qual,j_date,r_year,pa_paper_i,pa_paper_ii,fa_paper_iii,fa_paper_iv,s_date_present,place_of_posting,present_post_grade,j_sc_date,j_hc_date,employee_code) VALUES ('$sl_no', '$employee_name', '$dob', '$category', '$h_block','$e_qual','$join_date','$r_year','$pa_paper_i','$pa_paper_ii','$fa_paper_iii','$fa_paper_iv','$s_date','$present_place','$present_post','$j_sc_date','$j_hc_date','$employee_code');";
        if(pg_query($conn,$sql))
        { ?>
    <div class="alert alert-success" role="alert">
     Employee Regstered Successfully.
    </div>
    <?php 
           
        }
        else
        echo"Error";
        
        }
      
        if(isset($_POST["revenue"])){
          
        
            $sl_no=($_POST['sl_no'] ) ;
            $employee_code=($_POST['employee_code'] );
            $employee_name=($_POST['employee_name'] ) ;
            $dob=($_POST['dob'] );
            $category=($_POST['category'] );
            $join_date=($_POST['join_date']);
            $h_block=($_POST['h_block'] );
            $join_date_present_post=($_POST['jonin_date_present_grade'] );
            $edn=($_POST['edn_qual']);
            $s_date=($_POST['s_date'] );
            $post_name_intial_grade=($_POST['post_name_intial_grade']);
            $theory=($_POST['theory'] );
            $practical=($_POST['practical'] );
            $dept_exam=($_POST['dept_exam']);
            $present_place=($_POST['present_place']);
            $present_post=($_POST['present_post'] ) ;
         
            
             $sql = "INSERT INTO revenue (sl_no,name,dob,category,h_block,edn_qual,j_date_govt_service,post_name_intial_grade,j_date_present_grade,theory,practical,deptt_exam,s_date,present_place_of_posting,present_post_grade,employee_code) VALUES ('$sl_no', '$employee_name', '$dob', '$category', '$h_block','$edn','$join_date','$post_name_intial_grade','$join_date_present_post','$theory','$practical','$dept_exam','$s_date','$present_place','$present_post','$employee_code');";
            if(pg_query($conn,$sql))
            { ?>
    <div class="alert alert-success" role="alert">
        Employee Regstered Successfully.
    </div>
    <?php 
            
            }
            else
            echo"Error";
            
            }
           
  ?>
    <div id="cont" class="flex-column">
        <div class="d-flex p-2 flex-column mt-5 align-items-center bg-dark w-25 border border-4 mb-auto">
            <div> <label class="form-label text-white" for="specificSizeSelect">PLEASE CHOOSE DEPARTMENT</label></div>
            <div> <select class="form-select" id="specificSizeSelectn" name="" oninput="myFunction()"
                    style="width: 200px;">
                    <option selected disabled>Choose...</option>
                    <option value="driver">DRIVER STAFF</option>
                    <option value="revenue">REVENUE STAFF</option>
                    <option value="ministry">MINISTRY STAFF</option>

                </select>
            </div>
        </div>
        <div class="container" id=driverapp style="display:none">
            <form action="registration.php" method="post" onsubmit="return drivervalidate()" name="driverform">
                <div class="container-sm border border-dark mt-5 ">

                    <h2 class="text-center"><span>Driver Registration form </span>
                        <hr>
                    </h2>

                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Gradation Sl. no. :</p>
                        </div>
                        <div class="col-sm-3">

                            <input type="text" name="sl_no" class="form-control" id="name" aria-describedby="emailHelp"><span class="text-danger " style="font:size 8px; display:none" id="erslno">*Plese fill this field
                                </span>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Employee Code :</p>
                        </div>
                        <div class="col-3">

                            <input type="text" name="employee_code" class="form-control" id="name"
                                aria-describedby="emailHelp"><span class="text-danger " style="font:size 8px; display:none" id="eremployeecode">*Plese fill this field</span>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Employee Name :</p>
                        </div>
                        <div class="col-sm-3">
                            <p> <input type="name" name="employee_name" class="form-control" id="name"
                                    aria-describedby="emailHelp"><span class="text-danger " style="font:size 8px; display:none" id="eremployeename">*Plese fill this field</span></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">DOB :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="text" id="datepicker" name="dob"
                                    class="form-control datepicker" placeholder="dd-mm-yyyy" min="1900-01-01"
                                    max="2050-12-31"></p>
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
                            <p class="mb-0"><input type="text"  name="joining_date"
                                    class="form-control datepicker" placeholder="dd-mm-yyyy" min="1900-01-01"
                                    max="2050-12-31"></p>
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
                            <p><input type="text" name="senior_date" class="form-control datepicker"
                                    placeholder="dd-mm-yyyy" min="1900-01-01" max="2050-12-31"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Date of joining as Head Driver :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="text" name="head_date"
                                    class="form-control datepicker" placeholder="dd-mm-yyyy" min="1900-01-01"
                                    max="2050-12-31"></p>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Driving license-no :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="name" name="driving_license" class="form-control" id="name"
                                    aria-describedby="emailHelp"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Date of Superanuation :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="text" name="s_date" class="form-control datepicker"
                                    placeholder="dd-mm-yyyy" min="1900-01-01" max="2050-12-31"></p>
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
                            <p class="mb-0"><select class="form-select" id="specificSizeSelectn" name="present_grade"
                                    style="width: 200px;">
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Head Driver">Head Driver</option>
                                    <option value="Senior Driver">Senior Driver </option>
                                    <option value="Junior Driver">Junior Driver</option>

                                </select></p><span class="text-danger " style="font:size 8px; display:none" id="erpresentgrade"> *Plese fill this field</span>
                        </div>
                        <div style="width: 0; margin: auto;">

                            <div>
                                <button type="submit" name="driver" value="submit" class="btn btn-success px-3 my-3">SAVE</button>
                            </div>
                        </div>
                    </div>



                </div>

            </form>
        </div>


        <div class="container" id=ministryapp style="display:none">
            <form action="registration.php" method="post" onsubmit="return ministryvalid()" name="ministryform">
                <div class="container-sm border border-dark mt-5 ">

                    <h2 class="text-center"><span>Ministry Registration form </span>
                        <hr>
                    </h2>

                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Gradation Sl. no. :</p>
                        </div>
                        <div class="col-sm-3">

                            <input type="name" name="sl_no" class="form-control" id="name" aria-describedby="emailHelp"><span class="text-danger " style="font:size 8px; display:none" id="erslnom">*Plese fill this field</span>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Employee Code :</p>
                        </div>
                        <div class="col-3">

                            <input type="name" name="employee_code" class="form-control" id="name"
                                aria-describedby="emailHelp"><span class="text-danger " style="font:size 8px; display:none" id="eremployeecodem">*Plese fill this field</span>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Employee Name :</p>
                        </div>
                        <div class="col-sm-3">
                            <p> <input type="name" name="employee_name" class="form-control" id="name"
                                    aria-describedby="emailHelp"></p><span class="text-danger " style="font:size 8px; display:none" id="eremployeenamem">*Plese fill this field</span>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">DOB :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="text" name="dob" class="form-control datepicker"
                                    placeholder="dd-mm-yyyy" min="1900-01-01" max="2050-12-31"></p>
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
                            <p class="mb-0"><input type="text" name="joining_date"
                                    class="form-control datepicker" placeholder="dd-mm-yyyy" min="1900-01-01"
                                    max="2050-12-31"></p>
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
                            <p class="mb-0"><input type="text" name="r_year" class="form-control datepicker"
                                    placeholder="dd-mm-yyyy" min="1900-01-01" max="2050-12-31"></p>
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
                            <p class="mb-0"><input type="text" name="pa_paper_ii"
                                    class="form-control datepicker" placeholder="dd-mm-yyyy" min="1900-01-01"
                                    max="2050-12-31"></p>
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
                            <p class="mb-0"><select class="form-select" id="specificSizeSelectn" name="present_post"
                                    style="width: 200px;">
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Section Officer">SECTION OFFICERS</option>
                                    <option value="Senior Revenue Assistant">SENIOR REVENUE ASSISTANTS</option>
                                    <option value="Junior Revanue Assistant">JUNIOR REVENUE ASSISTANTS</option>

                                </select></p><span class="text-danger " style="font:size 8px; display:none" id="erpostm">*Plese fill this field</span>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">J_sc Date :</p>
                        </div>
                        <div class="col-sm-3">
                            <p><input type="text" name="j_sc_date" class="form-control datepicker"
                                    placeholder="dd-mm-yyyy" min="1900-01-01" max="2050-12-31"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">J_hc Date :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="text" name="j_hc_date"
                                    class="form-control datepicker" placeholder="dd-mm-yyyy" min="1900-01-01"
                                    max="2050-12-31"></p>
                        </div>

                    </div>
                    <div class="row p-2">
                        
                        <div class="col-3">
                            <p class="mb-0">S_date :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="text" name="s_date" class="form-control datepicker"
                                    placeholder="dd-mm-yyyy" min="1900-01-01" max="2050-12-31"></p>
                        </div>
                    </div>
                    <div>
                        <div style="width: 0; background-color: blue; margin: auto;">
                            <button type="submit" name="ministry" value="submit"
                                class="btn btn-success px-3 my-3">Save</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="container" id=revenueapp style="display:none">
            <form action="registration.php" method="post" onsubmit="return revenuevalid()" name="revenueform">
                <div class="container-sm border border-dark mt-5 ">

                    <h2 class="text-center"><span>Revenue Registration form </span>
                        <hr>
                    </h2>

                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Gradation Sl. no. :</p>
                        </div>
                        <div class="col-sm-3">

                            <input type="name" name="sl_no" class="form-control" id="name" aria-describedby="emailHelp"><span class="text-danger " style="font:size 8px; display:none" id="erslnor">*Plese fill this field</span>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">Employee Code :</p>
                        </div>
                        <div class="col-3">

                            <input type="name" name="employee_code" class="form-control" id="name"
                                aria-describedby="emailHelp"><span class="text-danger " style="font:size 8px; display:none" id="eremployeecoder">*Plese fill this field</span>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-3">
                            <p class="mb-0">Employee Name :</p>
                        </div>
                        <div class="col-sm-3">
                            <p> <input type="name" name="employee_name" class="form-control" id="name"
                                    aria-describedby="emailHelp"><span class="text-danger " style="font:size 8px; display:none" id="eremployeenamer">*Plese fill this field</span></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">DOB :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="text" name="dob" class="form-control datepicker"
                                    placeholder="dd-mm-yyyy" min="1900-01-01" max="2050-12-31"></p>
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
                            <p class="mb-0"><input type="text" name="join_date"
                                    class="form-control datepicker" placeholder="dd-mm-yyyy" min="1900-01-01"
                                    max="2050-12-31"></p>
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
                            <p><input type="text" name="jonin_date_present_grade"
                                    class="form-control datepicker" placeholder="dd-mm-yyyy" min="1900-01-01"
                                    max="2050-12-31"></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0">S Date :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="text" name="s_date" class="form-control datepicker"
                                    placeholder="dd-mm-yyyy" min="1900-01-01" max="2050-12-31"></p>
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
                            <p class="mb-0">Post Name Intial grade :</p>
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><input type="name" name="post_name_intial_grade" class="form-control"
                                    id="name" aria-describedby="emailHelp"></p>
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
                            <p class="mb-0">Practical :</p>
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
                            <p class="mb-0"><select class="form-select" id="specificSizeSelectn" name="present_post"
                                    style="width: 200px;">
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Revenue Inspector">REVENUE INSPECTOR</option>
                                    <option value="Revenue Supervisor">REVENUE SUPERVISOR</option>
                                    <option value="AMIN">AMIN</option>
                                    <option value="Assistant Revenue Inspector">ASSISTANT REVENUE INSPECTOR</option>

                                </select></p><span class="text-danger " style="font:size 8px; display:none" id="erpostr">*Plese fill this field</span>
                        </div>
                        <div>

                            <div style="width: 0; background-color: blue; margin: auto;">
                                <button type="submit" name="revenue" value="submit"
                                    class="btn btn-success px-3 my-3">SAVE</button>
                            </div>
                        </div>
                    </div>


                </div>

            </form>
        </div>

    </div>
    <script>
    function myFunction() {


        let mob_er = document.getElementById("specificSizeSelectn").value;
        let driver = document.getElementById("driverapp");
        let ministry = document.getElementById("ministryapp");
        let revenue = document.getElementById("revenueapp");
        console.log(mob_er);

        if (mob_er == 'driver') {
            ministry.style.display = "none";
            revenue.style.display = "none";
            driver.style.display = "inline";
        }
        if (mob_er == 'ministry') {
            driver.style.display = "none";
            revenue.style.display = "none";
            ministry.style.display = "inline";
        }
        if (mob_er == 'revenue') {
            ministry.style.display = "none";
            driver.style.display = "none";
            revenue.style.display = "inline";
        }
  
    }
    function drivervalidate() {

let sl_no = document.forms["driverform"]["sl_no"].value;
let emp_code = document.forms["driverform"]["employee_code"].value;
let emp_name= document.forms["driverform"]["employee_name"].value;
let present_post = document.forms["driverform"]["present_grade"].value;
let  ersl= document.getElementById("erslno");
let  ername= document.getElementById("eremployeename");
let  ercode= document.getElementById("eremployeecode");
let erpresentgrade = document.getElementById("erpresentgrade");
if (sl_no == "") {
    ersl.style.display = "inline";
    return false;
}else if(isNaN(sl_no)){
    ersl.style.display = "inline";
    return false;
}  
 if ( emp_code==""){
    ercode.style.display = "inline";
    return false;
}else{
    ercode.style.display = "none";
} 
 if (emp_name==""){
    ername.style.display = "inline";
    return false;
}else{
    ername.style.display = "none";
} 
if(present_post ==""){
    erpresentgrade .style.display = "inline";
    return false;
}else{
    erpresentgrade.style.display = "none";
} 
}
function ministryvalid() {

let sl_no = document.forms["ministryform"]["sl_no"].value;
let emp_code = document.forms["ministryform"]["employee_code"].value;
let emp_name= document.forms["ministryform"]["employee_name"].value;
let present_post = document.forms["ministryform"]["present_post"].value;
let  ersl= document.getElementById("erslnom");
let  ername= document.getElementById("eremployeenamem");
let  ercode= document.getElementById("eremployeecodem");
let erpresentgrade = document.getElementById("erpostm");
if (sl_no == "") {
    ersl.style.display = "inline";
    return false;
} else if(isNaN(sl_no)){
    ersl.style.display = "inline";
    return false;
} 
 if ( emp_code=="") {
    ercode.style.display = "inline";
    return false;
}else{
    ercode.style.display = "none";
} 
 if (emp_name=="") {
    ername.style.display = "inline";
    return false;
}else{
    ername.style.display = "none";
} 
if (present_post =="") {
    erpresentgrade .style.display = "inline";
    return false;
}else{
    erpresentgrade .style.display = "none";
} 
}
function revenuevalid() {

let sl_no = document.forms["revenueform"]["sl_no"].value;
let emp_code = document.forms["revenueform"]["employee_code"].value;
let emp_name= document.forms["revenueform"]["employee_name"].value;
let present_post = document.forms["revenueform"]["present_post"].value;
let  ersl= document.getElementById("erslnor");
let  ername= document.getElementById("eremployeenamer");
let  ercode= document.getElementById("eremployeecoder");
let erpresentgrade = document.getElementById("erpostr");
if (sl_no == "") {
    ersl.style.display = "inline";
    return false;
}else if(isNaN(sl_no)){
    ersl.style.display = "inline";
    return false;
}  
 if( emp_code=="") {
    ercode.style.display = "inline";
    return false;
}else{
    ercode.style.display = "none";
} 
 if (emp_name=="") {
    ername.style.display = "inline";
    return false;
}else{
    ername.style.display = "none";
} 
if (present_post =="") {
    erpresentgrade .style.display = "inline";
    return false;
}else{
    erpresentgrade.style.display = "none";
} 
}
    </script>

    <?php
  include('footer.php');
 ?>