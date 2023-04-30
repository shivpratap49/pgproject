<?php
require_once('config.php');
$table=trim($_GET['q']);
$post=trim($_GET['w']);
$form=trim($_GET['p']);
$sdate;
?>


<?php
 $sql="SELECT*FROM applicatio WHERE form_type='$form' AND able='$table';" ;
 $result=pg_query($conn,$sql);
 echo '<table class="table table-striped mb-5" ><tr><th colspan="13" class="text-center fs-2 "> '.$form.' Application list</th></tr><tr><th scope="col">Gradation sl no.</th><th scope="col">Employee Code</th><th scope="col">Name of the Applicant </th> <th scope="col">Application no. </th><th scope="col">Apply date</th><th scope="col">Approved date</th><th scope="col">Status</th><th scope="col">Application type</th><th scope="col">Present post</th> </tr>' ;
 if (pg_num_rows($result) > 0) {
    $i = 1;
    while ($row = pg_fetch_array($result)) {
    
        $able = $row["able"];
         $emp = $row["employee_code"];
         $result2 = pg_query($conn, "SELECT * FROM $able where employee_code='$emp'; ");
         $row2 = pg_fetch_array($result2);
        $GLOBALS['sdate']=date("d-m-Y",strtotime($row['status_update_date']));
         if($GLOBALS['sdate']=="01-01-1970"){
            $GLOBALS['sdate']="";
         }
     echo"<tr> <td> $row2[sl_no]</td><td>$row[employee_code] </td>  <td> <div id='name$i'>{$row2['name']}</div></td> <td>$row[application_no] </td> <td>".date("d-m-Y",strtotime($row['apply_date']))."</td> <td>".$GLOBALS['sdate']."</td> <td> $row[action] </td> <td> {$row['form_type']}</td><td>$row2[present_post_grade]</td></tr>";
    
      $i++;
      
    } 
    echo"</table>";
  } else {
    ?>
<table class="table table-striped">
<tr>
    <th scope="col" style="text-align:center">Record not found</th>
    <?php
  }
 
 
/*
if($table=='driver'&& $post!="all"){
    $sql="SELECT*FROM $table WHERE present_post_grade='$post' ORDER BY sl_no ASC;" ;
$result=pg_query($conn,$sql);

 
      echo '<table class="table table-striped mb-5" ><tr><th colspan="13" class="text-center fs-2 "> '.$post.' Driver Gradation list</th></tr><tr><th scope="col">Sl no.</th><th scope="col">Employee Code</th><th scope="col">Name of the Driver </th> <th scope="col">Date of Birth </th><th scope="col">Caste/ Category</th><th scope="col">Home Address with name of the Assembly Constituency</th><th scope="col">Date of Entry into Govt. Service</th><th scope="col">Date of Joining to post of Sr. Driver </th><th scope="col">Date of Joining to post of Head Driver </th> <th scope="col">Driving Licence No. </th> <th scope="col">Date of Superannuation</th> <th scope="col">Present place of posting</th><th scope="col">Post of the Driver</th></tr>' ;
     if (pg_num_rows($result) > 0) {
        $i = 1;
        while ($row = pg_fetch_array($result)) {
          

         echo"<tr> <td> $i  </td><td><a href='edit_employee.php?employee=$row[employee_code]&table=$table'>$row[employee_code]</a> </td>  <td> <div id='name$i'>{$row['name']}</div></td> <td>$row[dob] </td> <td>$row[category] </td> <td>$row[h_block] </td> <td> $row[date_of_entry_into_govt_service] </td> <td> {$row['date_of_joining_to_post_of_sr_driver']}</td><td>$row[date_of_joining_to_post_of_head_driver]</td><td>$row[driving_licence_no]</td><td>$row[date_of_superannuation]</td><td>$row[present_place_of_posting]</td> <td>$row[present_post_grade]</td></tr>";
        
          $i++;
          
        } 
        echo"</table>";
      } else {
        ?>
<table class="table table-striped">
    <tr>
        <th scope="col" style="text-align:center">Record not found</th>
        <?php
      }
?>
        <?php

    }

    if($table=='driver'&& $post=="all"){
    $result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='Junior Driver' ORDER BY sl_no ASC;");
    

    
     echo '<table class="table table-striped mb-5" ><tr><th colspan="13" class="text-center fs-2 "> Junior Driver Gradation list</th></tr><tr><th scope="col">Sl no.</th><th scope="col">Employee Code</th><th scope="col">Name of the Driver </th><th scope="col">Date of Birth </th><th scope="col">Caste/ Category</th><th scope="col">Home Address with name of the Assembly Constituency</th><th scope="col">Date of Entry into Govt. Service</th><th scope="col">Date of Joining to post of Sr. Driver </th><th scope="col">Date of Joining to post of Head Driver </th><th scope="col">Driving Licence No. </th><th scope="col">Date of Superannuation</th><th scope="col">Present place of posting</th><th scope="col">Post of the Driver</th> </tr>';
          

      if (pg_num_rows($result) > 0) {
        $i = 1;
        while ($row = pg_fetch_array($result)) {
          




    echo"<tr><td>$i</td><td><a href='edit_employee.php?employee=$row[employee_code]&table=$table'>$row[employee_code]</a></td><td>$row[name]</td><td>$row[dob]></td><td>$row[category]</td><td>$row[h_block]</td><td>$row[date_of_entry_into_govt_service]</td><td>$row[date_of_joining_to_post_of_sr_driver]</td><td>$row[date_of_joining_to_post_of_head_driver]</td><td>$row[driving_licence_no]</td><td>$row[date_of_superannuation]</td><td>$row[present_place_of_posting]</td><td>$row[present_post_grade]</td></tr>";
    
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
                <table class="table table-striped mb-5" ><tr>
                        <th colspan="13" class="text-center fs-2 "> Senior Driver Gradation list</th></tr><tr><th scope="col">Gradation Sl no.</th><th scope="col">Employee Code</th><th scope="col">Name of the Driver </th><th scope="col">Date of Birth </th><th scope="col">Caste/ Category</th><th scope="col">Home Address with name of the Assembly Constituency</th><th scope="col">Date of Entry into Govt. Service</th><th scope="col">Date of Joining to post of Sr. Driver </th><th scope="col">Date of Joining to post of Head Driver </th><th scope="col">Driving Licence No. </th><th scope="col">Date of Superannuation</th><th scope="col">Present place of posting</th><th scope="col">Post of the Driver</th></tr>

                    <?php

        if (pg_num_rows($result) > 0) {
          $i = 1;
          while ($row = pg_fetch_array($result)) {
            ?>




                    <tr>
                        <td>
                            <?php echo "$i"; ?>
                        </td>
                        <td><a href='edit_employee.php?employee=<?php echo$row['employee_code'];?>&table=<?php echo$table?>;'><?php echo$row['employee_code']; ?></a></td>
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
                    <table class="table table-striped" >
                        <tr>
                            <th scope="col" style="text-align:center">Record not found</th>
                            <?php
        }
        $result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='Head Driver' ORDER BY sl_no ASC;");
    

        ?>
                            <table class="table table-striped mb-5" >
                                <tr>
                                    <th colspan="13" class="text-center fs-2 "> Head Driver Gradation list</th>
                                </tr>
                                <tr>
                                    <th scope="col">Gradation Sl no.</th>
                                    <th scope="col">Employee Code</th>
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
                                    <td><a href='edit_employee.php?employee=<?php echo$row['employee_code']; ?>&table=<?php echo$table ;?>'><?php echo$row['employee_code']; ?></a></td>
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
  } 
  if ($table == 'revenue' && $post=='all') {

    
    $result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='Revenue Inspector' ORDER BY sl_no ASC;");
    ?>
                                        <table class="table table-striped" >
                                            <tr>
                                                <th colspan="16" class="text-center fs-2 ">Revenue Inspector Gredation List</th>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <th scope="col">Gradation SL NO.</th>
                                                <th scope="col">Employee Code</th>
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
                                                <td><a href="edit_employee.php?employee=<?php echo$row['employee_code']; ?>&table=<?php  echo$table;?>"><?php echo$row['employee_code']; ?></a></td>
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
                                                    <table class="table table-striped" >
                                                        <tr>
                                                            <th colspan="16" class="text-center fs-2 "> Assistant
                                                                Revenue
                                                                Inspector Gradation list</th>
                                                        </tr>
                                                        <tr>
                                                        <tr>
                                                            <th scope="col">Gradation SL NO.</th>
                                                            <th scope="col">Employee Code</th>
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
                                                            <td><a href="edit_employee.php?employee=<?php echo$row['employee_code']?>&table=<?php echo$table;?>"><?php echo$row['employee_code']; ?></a></td>
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
            $result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='AMIN' ORDER BY sl_no ASC;");
            

    ?>
                                                                <table class="table table-striped"
                                                                    >
                                                                    <tr>
                                                                        <th colspan="16" class="text-center fs-2 ">
                                                                            AMIN
                                                                         Gradation list</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="col">Gradation SL NO.</th>
                                                                        <th scope="col">Employee Code</th>
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
                                                                        <td><a href="edit_employee.php?employee=<?php echo$row['employee_code'];?>&table=<?php echo$table;?>"><?php echo$row['employee_code']; ?></a></td>
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
                                                                            <th scope="col" style="text-align:center">
                                                                                Record not found</th>
                                                                            <?php
            }$result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='Revenue Supervisor' ORDER BY sl_no ASC;");

            ?>
                                                                            <table class="table table-striped"
                                                                                >
                                                                                <tr>
                                                                                    <th colspan="16"
                                                                                        class="text-center fs-2 ">
                                                                                        Revenue
                                                                                        Supervisor Gradation list
                                                                                    </th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col">Gradation SL NO.
                                                                                    </th>
                                                                                    <th scope="col">Employee Code</th>
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
                                                                                    <td><a href="edit_employee.php?employee=<?php echo$row['employee_code'];?>&table=<?php echo$table;?>"><?php echo$row['employee_code']; ?></a></td>
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
   if($table=='revenue'&& $post!='all'){
  $result = pg_query($conn, "SELECT * FROM $table WHERE present_post_grade='$post' ORDER BY sl_no ASC;");

  ?>
                                                  <table class="table table-striped" >
                                                      <tr>
                                                          <th colspan="16" class="text-center fs-2 "> 
                                                              <?php echo "$post";?> Gradation list</th>
                                                      </tr>
                                                      <tr>
                                                      <tr>
                                                          <th scope="col">Gradation SL NO.</th>
                                                          <th scope="col">Employee Code</th>
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
                                                          <td><a href="edit_employee.php?employee=<?php echo$row['employee_code'];?>&table=<?php echo$table;?>"><?php echo$row['employee_code']; ?></a></td>
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
          }}


if($table =='ministry'&& $post=='all') {

  $result = pg_query($conn, "SELECT * FROM $table where present_post_grade='Junior Revenue Assistant' ORDER BY sl_no ASC ");

  ?>
                                                                                        <table
                                                                                            class="table table-striped"
                                                                                            >
                                                                                            <tr>
                                                                                                <th colspan="18"
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
                                                                                                <th scope="col">Employee Code</th>
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
                                                                                                <td><a href="edit_employee.php?employee=<?php echo$row['employee_code'];?>&table=<?php echo$table;?>"><?php echo$row['employee_code']; ?></a></td>
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
                                                                                                        >
                                                                                                        <tr>
                                                                                                            <th colspan="18"
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
                                                                                                            <th scope="col">Employee Code</th>
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
                                                                                                            <td><a href="edit_employee.php?employee=<?php echo$row['employee_code'];?>&table=<?php echo$table;?>"><?php echo$row['employee_code']; ?></a></td>
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
                                                                  
  $result = pg_query($conn, "SELECT * FROM $table where present_post_grade='Section Officer'ORDER BY sl_no ASC;");

  ?>
                                                                                                    <table
                                                                                                        class="table table-striped"
                                                                                                        >
                                                                                                        <tr>
                                                                                                            <th colspan="18"
                                                                                                                class="text-center fs-2 ">
                                                                                                                Section Officer
                                                                                                            </th>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <th
                                                                                                                scope="col">
                                                                                                                Gradation
                                                                                                                SL
                                                                                                                NO.
                                                                                                            </th>
                                                                                                            <th scope="col">Employee Code</th>
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
                                                                                                            <td><a href="edit_employee.php?employee=<?php echo$row['employee_code'];?>&table=<?php echo$table;?>"><?php echo$row['employee_code']; ?></a></td>
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
if($table=='ministry'&& $post!="all"){
$result = pg_query($conn, "SELECT * FROM $table where present_post_grade='$post'ORDER BY sl_no ASC;");

?>
                                                                                                  <table
                                                                                                      class="table table-striped"
                                                                                                      >
                                                                                                      <tr>
                                                                                                          <th colspan="18"
                                                                                                              class="text-center fs-2 ">
                                                                                                              <?php echo"$post"?>
                                                                                                          </th>
                                                                                                      </tr>
                                                                                                      <tr>
                                                                                                          <th
                                                                                                              scope="col">
                                                                                                              Gradation
                                                                                                              SL
                                                                                                              NO.
                                                                                                          </th>
                                                                                                          <th scope="col">Employee Code</th>
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
                                                                                                          <td><a href="edit_employee.php?employee=<?php echo$row['employee_code'];?>&table=<?php echo$table;?>"><?php echo$row['employee_code']; ?></a></td>
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
                                                                                                        <script
                                                                                                            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                                                                                                            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                                                                                                            crossorigin="anonymous">
                                                                                                        </script>
                                                                                                        <?php
*/
?>