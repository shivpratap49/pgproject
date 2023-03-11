<?php
require_once('config.php');
require_once('session.php');
$user=$_SESSION['employee_code'];
$table=$_SESSION['table'];
$pass=$_SESSION['dob'];
$result = pg_query($conn,"SELECT * FROM $table where employee_code='$user' ");
$row = pg_fetch_array($result);
include('header.php')
?>

    <h1 style="text-align:center;"> Welcome: <?php echo $row["name"];?></h1>
    <div class=" container bg-dark justify-content-center text-light border border-2 border-warning align-item-center  p-0 w" style="width: 768px; vertical-align: middle; margin-top:20vh">
        
        <div class="container justify-content-center border border border-2 border-success  ">
            <div class="d-flex justify-content-center p-0">
              <p>  PROFILE EDIT</p>
            </div>
            <div class=" d-flex justify-content-center  ">
                <div class="d-inline-flex p-2 ">

                    <button type="button" class="btn btn-info " onclick=" myFunction()"> PROFILE VIEW/EDIT</button>
                </div>
                
            </div>
        </div>
        <div class="container justify-content-center border border border-2 border-success  ">
            <div class="d-flex justify-content-center ">
               <p>  VIEW </p>
            </div>
            <div class=" d-flex justify-content-center  ">
               
               
                
                <div class="d-inline-flex p-2 ">
                    <button type="button" class="btn btn-info " onclick=" gradation()"><?php echo strtoupper($_SESSION['table']);?> GRADATION</button>
                </div>
            </div>
        </div>
        <div class="container justify-content-center border border border-2 border-success  ">
            <div class="d-flex justify-content-center">
             <P>   APPLICATION </p>
            </div>
            <div class=" d-flex justify-content-center  ">
                <div class="d-inline-flex p-2 ">

                    <button type="button" class="btn btn-info ">OBJECTION</button>
                </div>
                <div class="d-inline-flex p-2 ">
                    <button type="button" class="btn btn-info ">GRIEVENCE</button>
                </div>
               
                <div class="d-inline-flex p-2 ">
                    <button type="button" class="btn btn-info px-5 " onclick="noc()">NOC</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/home.js">
    
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
<?php
include('footer.php')
?>