
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Login</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet">
    <style>
        .icon {
  padding: 10px;
  background: white;
  color: black;
  min-width: 30px;
  text-align: center;
  
        }
    .new {
        width: 40%;

    }

    @media screen and (max-width: 600px) {
        .new {
            width: 100%;

            background-color: green;
        }

        .input {
            width: 80%;
        }

    }
    </style>
</head>


<body>

    <?php
  require_once('config.php');
  include('header.php');
 /* $m=1;
for ($i = 1097; $i<= 1099; $i++) {
 
$po="UPDATE driver SET sl_no='$m' WHERE present_post_grade='Head Driver'AND employee_code='$i'";
$tr=pg_query($conn,$po);
echo '$tr';
$m++;
}*/
?>
    <?php
  $log=true;

if($_SERVER["REQUEST_METHOD"]=="POST"){
$table=($_POST['table']);
$present_post_grade=$_POST['present_post_grade'];
$user=($_POST['employee_code']);
$pass=($_POST['dob']);

$sql="SELECT*FROM $table WHERE employee_code='$user' " ;
$result=pg_query($conn,$sql);
$row = pg_fetch_array($result);
if(pg_num_rows($result)==1){
  session_start();
  $_SESSION['loggedin']=true; 
  $_SESSION['employee_code']=$user;
  $_SESSION['table']=$table;
  $_SESSION['dob']=$pass;
  header("location: home.php");
}  
else{
 $log=false;
}
}
?>

    <?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){ 
 if( $log==false){ ?>
    <div class="alert  alert-danger" role="alert">
        Invalid User or Password
    </div>
    <?php
 }
}
 ?>
    <div style="min-height:80vh; display:flex; " id="gol">

        <div class="d-flex justify-content-center border me-auto ms-auto border-warning border-4 bg-dark bg-opacity-25  rounded-4 new"
            style=" margin-top:9rem" id="boxlog">


            <form action=emp_login.php method="post">
                <div class="d-flex justify-content-center me-auto ms-auto mt-2 w-100 input">
                    <div class="input me-2" style="  width: 48.333%; display: inline-block; ">
                        <label class="form-label text-dark" for="specificSizeSelect">Employee Category</label>
                        <select class="form-select" id="specificSizeSelectn" name="table">
                            <option selected disabled>Choose...</option>
                            <option value="driver">DRIVER STAFF</option>
                            <option value="revenue">REVENUE STAFF</option>
                            <option value="ministry">MINISTRY STAFF</option>

                        </select>
                    </div>
                    <div class="input" style="  width: 48.333%; display: inline-block;">
                        <label class="form-label text-dark" for="specificSizeSelect"> POST</label>
                        <select class="form-select" id="specificSizeSelecta" name="present_post_grade">
                            <option selected disabled>Choose...</option>

                        </select>
                    </div>
                </div>
                <div class="mb-3 mt-3 me-auto ms-auto input col-md-8">
                    <label for="exampleInputEmail1" class="form-label text-dark">EMPLOYEE CODE</label>
                    <div class="d-flex bg-white"> 
                        <i class="fa fa-user icon border  border-end-0 border-4"></i>
                    <input type="name" name="employee_code" class="form-control  border-start-0 rounded-0" id="name" placeholder="Employee Code"
                        aria-describedby="emailHelp">
                      </div>
                </div>
                <div class="mb-3 me-auto ms-auto input col-md-8">
                    <label for="start" class="form-label text-dark">DOB</label>
                    <input type="date" id="start" name="dob" class="form-control" value="2023-01-01" min="1900-01-01"
                        max="2050-12-31">

                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn input btn-warning  mb-4 ">Log in</button>
                </div>
            </form>
        </div>
    </div>


    <script src="js/index.js"></script>
    <?php include('footer.php');
 ?>
 <!--This Project is Developed by Shiv Pratap Singh Rajawat under the guidence of Mrs. Itee Shree Nanda (DIO, Cuttak) -->