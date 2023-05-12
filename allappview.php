<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Aplication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    
    <style>
        #data {
            overflow-x: scroll;
            font-size: 12px;
        }

        #selection {
            display: flex;
        }

        @media print {

            header,
            footer,
            aside,
            form,
            nav {
                display: none;
            }

            #data {
                font-size: 8px;
            }

            #selection {
                display: none;
            }
        }
    </style>
</head>

<body>

    <?php
    require_once('config.php');
    require_once('admin_session.php');
    include('header.php');
    
    ?>
    <div id="cont" class="flex-column">





        <div id="data" class="mb-auto w-100 mt-3">
            <?php
            $sdate;
            $sql = "SELECT*FROM applicatio  ORDER BY apply_date DESC;";
            $result = pg_query($conn, $sql);
            echo '<table class="table table-striped mb-5" ><tr><th colspan="13" class="text-center fs-2 "> All Query list</th></tr><tr><th scope="col">Sl no.</th><th scope="col">Gradation sl no.</th><th scope="col">Employee Code</th><th scope="col">Name of the Applicant </th> <th scope="col">Application no. </th><th scope="col">Apply date</th><th scope="col">Approved date</th><th scope="col">Status</th><th scope="col">Application type</th><th scope="col">Present post</th> </tr>';
            if (pg_num_rows($result) > 0) {
                $i = 1;
                while ($row = pg_fetch_array($result)) {
                    

                    $able = $row["able"];
                    $emp = $row["employee_code"];
                    $result2 = pg_query($conn, "SELECT * FROM $able WHERE employee_code='$emp'");
                    $row2 = pg_fetch_array($result2);
                    $GLOBALS['sdate']=date("d-m-Y",strtotime($row['status_update_date']));
                    if($GLOBALS['sdate']=="01-01-1970"){
                       $GLOBALS['sdate']="";
                    }

                    echo "<tr> <td> $i</td><td> $row2[sl_no]</td><td>$row[employee_code] </td>  <td> <div id='name$i'>{$row2['name']}</div></td> <td>$row[application_no] </td> <td>" . date("d-m-Y", strtotime($row['apply_date'])) . "</td> <td>" . $GLOBALS['sdate'] . "</td> <td> $row[action] </td> <td> {$row['form_type']}</td><td>$row2[present_post_grade]</td></tr>";
                    
                    $i++;
                }
                echo'</table>';
            } else {
            ?>
                <table class="table table-striped">
                    <tr>
                        <th scope="col" style="text-align:center">Record not found</th>
                    </tr>
                </table>
                <?php
            } ?>
        </div>
    </div>
    </div>
    <div class="d-flex flex-row justify-content-center">
        <button class="btn btn-success m-3" onclick="window.print()">Print</button>
    </div>
    <?php
    include('footer.php');
    ?>