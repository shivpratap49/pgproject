<?php
  require_once('config.php');
  require_once('session.php');
  include('header.php');
  ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gradation List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
<style>
#table {
    overflow-x: scroll;
}
</style>

<body>
    <?php
$user=$_SESSION['employee_code'];
$table=$_SESSION['table'];
$pass=$_SESSION['dob'];

  ?>
    <div id=table>
        <?php
  
  

    if ($table == 'driver') {
      $result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='Junior Driver' ORDER BY sl_no ASC;");
      

      ?>
        <table class="table table-striped mb-5" style="font-size: 14px;">
            <tr>
                <th colspan="12" class="text-center fs-2 "> Junior Driver Gradation list</th>
            </tr>
            <tr>
                <th scope="col">Sl no.</th>
                <th scope="col">Name of the Driver </th>
                <th scope="col">Date of Birth </th>
                <th scope="col">Caste/ Category</th>
                <th scope="col">Home Address with name of the Assembly Constituency</th>
                <th scope="col">Date of Entry into Govt. Service</th>
                <th scope="col">Date of Joining to post of Sr. Driver </th>
                <th scope="col">Date of Joining to post of Head Driver </th>
                <th scope="col">Driving Licence No. </th>
                <th scope="col">Date of Superannuation</th>
                <th scope="col">Present place of posting</th>
                <th scope="col">Post of the Driver</th>

            </tr>

            <?php

        if (pg_num_rows($result) > 0) {
          $i = 1;
          while ($row = pg_fetch_array($result)) {
            ?>




            <tr>
                <td>
                    <?php echo "$i"; ?>
                </td>
                <td>
                    <?php echo $row["name"]; ?>
                </td>
                <td>
                    <?php echo $row["dob"]; ?>
                </td>
                <td>
                    <?php echo $row["category"]; ?>
                </td>
                <td>
                    <?php echo $row["h_block"]; ?>
                </td>
                <td>
                    <?php echo $row["date_of_entry_into_govt_service"]; ?>
                </td>
                <td>
                    <?php echo $row["date_of_joining_to_post_of_sr_driver"]; ?>
                </td>
                <td>
                    <?php echo $row["date_of_joining_to_post_of_head_driver"]; ?>
                </td>
                <td>
                    <?php echo $row["driving_licence_no"]; ?>
                </td>
                <td>
                    <?php echo $row["date_of_superannuation"]; ?>
                </td>
                <td>
                    <?php echo $row["present_place_of_posting"]; ?>
                </td>
                <td>
                    <?php echo $row["present_post_grade"]; ?>
                </td>


            </tr>
            <?php
            $i++;
          }
        } else {
          ?>
            <table class="table table-striped">
                <tr>
                    <th scope="col" style="text-align:center">Record not found</th>
                    <?php
        }
        $result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='Senior Driver' ORDER BY sl_no ASC;");
      

        ?>
                    <table class="table table-striped mb-5" style="font-size: 14px;">
                        <tr>
                            <th colspan="12" class="text-center fs-2 "> Senior Driver Gradation list</th>
                        </tr>
                        <tr>
                            <th scope="col">Gradation Sl no.</th>
                            <th scope="col">Name of the Driver </th>
                            <th scope="col">Date of Birth </th>
                            <th scope="col">Caste/ Category</th>
                            <th scope="col">Home Address with name of the Assembly Constituency</th>
                            <th scope="col">Date of Entry into Govt. Service</th>
                            <th scope="col">Date of Joining to post of Sr. Driver </th>
                            <th scope="col">Date of Joining to post of Head Driver </th>
                            <th scope="col">Driving Licence No. </th>
                            <th scope="col">Date of Superannuation</th>
                            <th scope="col">Present place of posting</th>
                            <th scope="col">Post of the Driver</th>

                        </tr>

                        <?php
  
          if (pg_num_rows($result) > 0) {
            $i = 1;
            while ($row = pg_fetch_array($result)) {
              ?>




                        <tr>
                            <td>
                                <?php echo "$i"; ?>
                            </td>
                            <td>
                                <?php echo $row["name"]; ?>
                            </td>
                            <td>
                                <?php echo $row["dob"]; ?>
                            </td>
                            <td>
                                <?php echo $row["category"]; ?>
                            </td>
                            <td>
                                <?php echo $row["h_block"]; ?>
                            </td>
                            <td>
                                <?php echo $row["date_of_entry_into_govt_service"]; ?>
                            </td>
                            <td>
                                <?php echo $row["date_of_joining_to_post_of_sr_driver"]; ?>
                            </td>
                            <td>
                                <?php echo $row["date_of_joining_to_post_of_head_driver"]; ?>
                            </td>
                            <td>
                                <?php echo $row["driving_licence_no"]; ?>
                            </td>
                            <td>
                                <?php echo $row["date_of_superannuation"]; ?>
                            </td>
                            <td>
                                <?php echo $row["present_place_of_posting"]; ?>
                            </td>
                            <td>
                                <?php echo $row["present_post_grade"]; ?>
                            </td>


                        </tr>
                        <?php
              $i++;
            }
          } else {
            ?>
                        <table class="table table-striped" style="font-size: 14px;">
                            <tr>
                                <th scope="col" style="text-align:center">Record not found</th>
                                <?php
          }
          $result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='Head Driver' ORDER BY sl_no ASC;");
      

          ?>
                                <table class="table table-striped mb-5" style="font-size: 14px;">
                                    <tr>
                                        <th colspan="12" class="text-center fs-2 "> Head Driver Gradation list</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Gradation Sl no.</th>
                                        <th scope="col">Name of the Driver </th>
                                        <th scope="col">Date of Birth </th>
                                        <th scope="col">Caste/ Category</th>
                                        <th scope="col">Home Address with name of the Assembly Constituency</th>
                                        <th scope="col">Date of Entry into Govt. Service</th>
                                        <th scope="col">Date of Joining to post of Sr. Driver </th>
                                        <th scope="col">Date of Joining to post of Head Driver </th>
                                        <th scope="col">Driving Licence No. </th>
                                        <th scope="col">Date of Superannuation</th>
                                        <th scope="col">Present place of posting</th>
                                        <th scope="col">Post of the Driver</th>

                                    </tr>

                                    <?php
    
            if (pg_num_rows($result) > 0) {
              $i = 1;
              while ($row = pg_fetch_array($result)) {
                ?>




                                    <tr>
                                        <td>
                                            <?php echo "$i"; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["dob"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["category"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["h_block"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["date_of_entry_into_govt_service"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["date_of_joining_to_post_of_sr_driver"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["date_of_joining_to_post_of_head_driver"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["driving_licence_no"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["date_of_superannuation"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["present_place_of_posting"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["present_post_grade"]; ?>
                                        </td>


                                    </tr>
                                    <?php
                $i++;
              }
            } else {
              ?>
                                    <table class="table table-striped">
                                        <tr>
                                            <th scope="col" style="text-align:center">Record not found</th>
                                            <?php
            }
    } elseif ($table == 'revenue') {

      $result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='AMIN' ORDER BY sl_no ASC;");

      ?>
                                            <table class="table table-striped" style="font-size: 14px;">
                                                <tr>
                                                    <th colspan="15" class="text-center fs-2 ">AMIN</th>
                                                </tr>
                                                <tr>
                                                <tr>
                                                    <th scope="col">Gradation SL NO.</th>
                                                    <th scope="col">Name </th>
                                                    <th scope="col">Date of Birth </th>
                                                    <th scope="col">Caste/ Category</th>
                                                    <th scope="col">HOME BLOCK</th>
                                                    <th scope="col">EDN QULAFICATION</th>
                                                    <th scope="col">Date of Entry into Govt. Service</th>

                                                    <th scope="col">POST NAME (intial grade)</th>
                                                    <th scope="col">JOI. DATE (present grade)</th>
                                                    <th scope="col">THEORY</th>
                                                    <th scope="col">PRACTICAL</th>
                                                    <th scope="col">DEPRTMENT EXAM </th>
                                                    <th scope="col">S_DATE </th>
                                                    <th scope="col">Present place of posting</th>
                                                    <th scope="col">PERSENT POST</th>

                                                </tr>

                                                <?php

              if (pg_num_rows($result) > 0) {
                $i = 1;
                while ($row = pg_fetch_array($result)) {
                  ?>




                                                <tr>

                                                    <td>
                                                        <?php echo $row["sl_no"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["name"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["category"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["dob"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["h_block"]; ?>
                                                    </td>

                                                    <td>
                                                        <?php echo $row["edn_qual"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["j_date_govt_service"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["post_name_intial_grade"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["j_date_present_grade"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["theory"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["practical"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["deptt_exam"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["s_date"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["present_place_of_posting"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["present_post_grade"]; ?>
                                                    </td>


                                                </tr>
                                                <?php
                  $i++;
                }
              } else {
                ?>
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th scope="col" style="text-align:center">Record not found</th>
                                                        <?php
              }
              $result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='Assistant Revenue Inspector' ORDER BY sl_no ASC;");

      ?>
                                                        <table class="table table-striped" style="font-size: 14px;">
                                                            <tr>
                                                                <th colspan="15" class="text-center fs-2 "> Assistant
                                                                    Revenue
                                                                    Inspector Gradation list</th>
                                                            </tr>
                                                            <tr>
                                                            <tr>
                                                                <th scope="col">Gradation SL NO.</th>
                                                                <th scope="col">Name </th>
                                                                <th scope="col">Date of Birth </th>
                                                                <th scope="col">Caste/ Category</th>
                                                                <th scope="col">HOME BLOCK</th>
                                                                <th scope="col">EDN QULAFICATION</th>
                                                                <th scope="col">Date of Entry into Govt. Service</th>

                                                                <th scope="col">POST NAME (intial grade)</th>
                                                                <th scope="col">JOI. DATE (present grade)</th>
                                                                <th scope="col">THEORY</th>
                                                                <th scope="col">PRACTICAL</th>
                                                                <th scope="col">DEPRTMENT EXAM </th>
                                                                <th scope="col">S_DATE </th>
                                                                <th scope="col">Present place of posting</th>
                                                                <th scope="col">PERSENT POST</th>

                                                            </tr>

                                                            <?php

              if (pg_num_rows($result) > 0) {
                $i = 1;
                while ($row = pg_fetch_array($result)) {
                  ?>




                                                            <tr>

                                                                <td>
                                                                    <?php echo $row["sl_no"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["name"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["category"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["dob"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["h_block"]; ?>
                                                                </td>

                                                                <td>
                                                                    <?php echo $row["edn_qual"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["j_date_govt_service"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["post_name_intial_grade"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["j_date_present_grade"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["theory"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["practical"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["deptt_exam"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["s_date"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["present_place_of_posting"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["present_post_grade"]; ?>
                                                                </td>


                                                            </tr>
                                                            <?php
                  $i++;
                }
              } else {
                ?>
                                                            <table class="table table-striped">
                                                                <tr>
                                                                    <th scope="col" style="text-align:center">Record not
                                                                        found</th>
                                                                    <?php
              }
              $result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='Revenue Inspector' ORDER BY sl_no ASC;");

      ?>
                                                                    <table class="table table-striped"
                                                                        style="font-size: 14px;">
                                                                        <tr>
                                                                            <th colspan="15" class="text-center fs-2 ">
                                                                                Revenue
                                                                                Inspector Gradation list</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="col">Gradation SL NO.</th>
                                                                            <th scope="col">Name </th>
                                                                            <th scope="col">Date of Birth </th>
                                                                            <th scope="col">Caste/ Category</th>
                                                                            <th scope="col">HOME BLOCK</th>
                                                                            <th scope="col">EDN QULA.</th>
                                                                            <th scope="col">Date of Entry into Govt.
                                                                                Service
                                                                            </th>
                                                                            <th scope="col">POST NAME (intial grade)
                                                                            </th>
                                                                            <th scope="col">JOI. DATE (present grade)
                                                                            </th>
                                                                            <th scope="col">THEORY</th>
                                                                            <th scope="col">PRACTICAL</th>
                                                                            <th scope="col">DEPRTMENT EXAM </th>
                                                                            <th scope="col">S_DATE </th>
                                                                            <th scope="col">Present place of posting
                                                                            </th>
                                                                            <th scope="col">PERSENT POST</th>

                                                                        </tr>

                                                                        <?php

              if (pg_num_rows($result) > 0) {
                $i = 1;
                while ($row = pg_fetch_array($result)) {
                  ?>




                                                                        <tr>

                                                                            <td>
                                                                                <?php echo $row["sl_no"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["name"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["category"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["dob"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["h_block"]; ?>
                                                                            </td>

                                                                            <td>
                                                                                <?php echo $row["edn_qual"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["j_date_govt_service"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["post_name_intial_grade"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["j_date_present_grade"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["theory"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["practical"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["deptt_exam"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["s_date"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["present_place_of_posting"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $row["present_post_grade"]; ?>
                                                                            </td>


                                                                        </tr>
                                                                        <?php
                  $i++;
                }
              } else {
                ?>
                                                                        <table class="table table-striped">
                                                                            <tr>
                                                                                <th scope="col"
                                                                                    style="text-align:center">
                                                                                    Record not found</th>
                                                                                <?php
              }$result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='Revenue Supervisor' ORDER BY sl_no ASC;");

              ?>
                                                                                <table class="table table-striped"
                                                                                    style="font-size: 14px;">
                                                                                    <tr>
                                                                                        <th colspan="15"
                                                                                            class="text-center fs-2 ">
                                                                                            Revenue
                                                                                            Supervisor Gradation list
                                                                                        </th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="col">Gradation SL NO.
                                                                                        </th>
                                                                                        <th scope="col">Name </th>
                                                                                        <th scope="col">Date of Birth
                                                                                        </th>
                                                                                        <th scope="col">Caste/ Category
                                                                                        </th>
                                                                                        <th scope="col">HOME BLOCK</th>
                                                                                        <th scope="col">EDN QULAFICATION
                                                                                        </th>
                                                                                        <th scope="col">Date of Entry
                                                                                            into
                                                                                            Govt. Service</th>

                                                                                        <th scope="col">POST NAME
                                                                                            (intial
                                                                                            grade)</th>
                                                                                        <th scope="col">JOI. DATE
                                                                                            (present
                                                                                            grade)</th>
                                                                                        <th scope="col">THEORY</th>
                                                                                        <th scope="col">PRACTICAL</th>
                                                                                        <th scope="col">DEPRTMENT EXAM
                                                                                        </th>
                                                                                        <th scope="col">S_DATE </th>
                                                                                        <th scope="col">Present place of
                                                                                            posting</th>
                                                                                        <th scope="col">PERSENT POST
                                                                                        </th>

                                                                                    </tr>

                                                                                    <?php
        
                      if (pg_num_rows($result) > 0) {
                        $i = 1;
                        while ($row = pg_fetch_array($result)) {
                          ?>




                                                                                    <tr>

                                                                                        <td>
                                                                                            <?php echo $row["sl_no"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["name"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["category"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["dob"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["h_block"]; ?>
                                                                                        </td>

                                                                                        <td>
                                                                                            <?php echo $row["edn_qual"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["j_date_govt_service"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["post_name_intial_grade"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["j_date_present_grade"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["theory"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["practical"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["deptt_exam"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["s_date"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["present_place_of_posting"]; ?>
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $row["present_post_grade"]; ?>
                                                                                        </td>


                                                                                    </tr>
                                                                                    <?php
                          $i++;
                        }
                      } else {
                        ?>
                                                                                    <table class="table table-striped">
                                                                                        <tr>
                                                                                            <th scope="col"
                                                                                                style="text-align:center">
                                                                                                Record not found</th>
                                                                                            <?php
                      }
    }
  
  
  elseif ($table =='ministry') {

    $result = pg_query($conn, "SELECT * FROM $table where present_post_grade='Junior Revenue Assistant' ORDER BY sl_no ASC ");

    ?>
                                                                                            <table
                                                                                                class="table table-striped"
                                                                                                style="font-size: 14px;">
                                                                                                <tr>
                                                                                                    <th colspan="17"
                                                                                                        class="text-center fs-2 ">
                                                                                                        Junior Revenue
                                                                                                        Assistant
                                                                                                        Gradation list
                                                                                                    </th>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <th scope="col">
                                                                                                        Gradation SL NO.
                                                                                                    </th>
                                                                                                    <th scope="col">Name
                                                                                                    </th>
                                                                                                    <th scope="col">Date
                                                                                                        of
                                                                                                        Birth </th>
                                                                                                    <th scope="col">
                                                                                                        Caste/
                                                                                                        Category</th>
                                                                                                    <th scope="col">HOME
                                                                                                        BLOCK</th>
                                                                                                    <th scope="col">EDN
                                                                                                        QULAFICATION
                                                                                                    </th>
                                                                                                    <th scope="col">Date
                                                                                                        of
                                                                                                        Entry into Govt.
                                                                                                        Service
                                                                                                    </th>

                                                                                                    <th scope="col">
                                                                                                        R_YEAR
                                                                                                    </th>
                                                                                                    <th scope="col">
                                                                                                        PA_MONTH
                                                                                                    </th>
                                                                                                    <th scope="col">
                                                                                                        PA_YEAR
                                                                                                    </th>
                                                                                                    <th scope="col">
                                                                                                        FA_MONTH
                                                                                                    </th>
                                                                                                    <th scope="col">
                                                                                                        FA_YEAR
                                                                                                    </th>
                                                                                                    <th scope="col">
                                                                                                        J_SC_DATE</th>
                                                                                                    <th scope="col">
                                                                                                        J_HC_DATE</th>
                                                                                                    <th scope="col">
                                                                                                        S_DATE
                                                                                                    </th>
                                                                                                    <th scope="col">
                                                                                                        PRESENT
                                                                                                        PLACE OF POSTING
                                                                                                    </th>
                                                                                                    <th scope="col">
                                                                                                        PRESENT
                                                                                                        POST</th>

                                                                                                </tr>

                                                                                                <?php

                                    if (pg_num_rows($result) > 0) {
                                      $i = 1;
                                      while ($row = pg_fetch_array($result)) {
                                        ?>




                                                                                                <tr>

                                                                                                    <td>
                                                                                                        <?php echo $row["sl_no"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["name"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["category"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["dob"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["h_block"]; ?>
                                                                                                    </td>

                                                                                                    <td>
                                                                                                        <?php echo $row["e_qual"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["j_date"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["r_year"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["pa_paper_i"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["pa_paper_ii"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["fa_paper_iii"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["fa_paper_iv"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["j_sc_date"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["j_hc_date"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["s_date_present"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["place_of_posting"]; ?>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <?php echo $row["present_post_grade"]; ?>
                                                                                                    </td>


                                                                                                </tr>
                                                                                                <?php
                                        $i++;
                                      }
                                    } else {
                                      ?>
                                                                                                <table
                                                                                                    class="table table-striped">
                                                                                                    <tr>
                                                                                                        <th scope="col"
                                                                                                            style="text-align:center">
                                                                                                            Record not
                                                                                                            found
                                                                                                        </th>
                                                                                                        <?php
                                    }
                                    
    $result = pg_query($conn, "SELECT * FROM $table where present_post_grade='Senior Revenue Assistant'ORDER BY sl_no ASC;");

    ?>
                                                                                                        <table
                                                                                                            class="table table-striped"
                                                                                                            style="font-size: 14px;">
                                                                                                            <tr>
                                                                                                                <th colspan="17"
                                                                                                                    class="text-center fs-2 ">
                                                                                                                    Senior
                                                                                                                    Revenue
                                                                                                                    Assistant
                                                                                                                    Gradation
                                                                                                                    list
                                                                                                                </th>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    Gradation
                                                                                                                    SL
                                                                                                                    NO.
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    Name
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    Date
                                                                                                                    of
                                                                                                                    Birth
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    Caste/
                                                                                                                    Category
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    HOME
                                                                                                                    BLOCK
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    EDN
                                                                                                                    QULAFICATION
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    Date
                                                                                                                    of
                                                                                                                    Entry
                                                                                                                    into
                                                                                                                    Govt.
                                                                                                                    Service
                                                                                                                </th>

                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    R_YEAR
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    PA_MONTH
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    PA_YEAR
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    FA_MONTH
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    FA_YEAR
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    J_SC_DATE
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    J_HC_DATE
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    S_DATE
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    PRESENT
                                                                                                                    PLACE
                                                                                                                    OF
                                                                                                                    POSTING
                                                                                                                </th>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    PRESENT
                                                                                                                    POST
                                                                                                                </th>

                                                                                                            </tr>

                                                                                                            <?php

                                    if (pg_num_rows($result) > 0) {
                                      $i = 1;
                                      while ($row = pg_fetch_array($result)) {
                                        ?>




                                                                                                            <tr>

                                                                                                                <td>
                                                                                                                    <?php echo $row["sl_no"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["name"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["category"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["dob"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["h_block"]; ?>
                                                                                                                </td>

                                                                                                                <td>
                                                                                                                    <?php echo $row["e_qual"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["j_date"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["r_year"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["pa_paper_i"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["pa_paper_ii"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["fa_paper_iii"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["fa_paper_iv"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["j_sc_date"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["j_hc_date"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["s_date_present"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["place_of_posting"]; ?>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <?php echo $row["present_post_grade"]; ?>
                                                                                                                </td>


                                                                                                            </tr>

                                                                                                            <?php
                                        $i++;
                                      }
                                    } else {
                                      ?>
                                                                                                            <table
                                                                                                                class="table table-striped">
                                                                                                                <tr>
                                                                                                                    <th scope="col"
                                                                                                                        style="text-align:center">
                                                                                                                        Record
                                                                                                                        not
                                                                                                                        found
                                                                                                                    </th>
                                                                                                                    <?php
                                    }
                                    
  

    
  }
  ?>



                                                                                                            </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <?php
include('footer.php')
?>