
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
  background: gray;
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


<body class="bg-dark bg-opacity-25">

    <?php
  require_once('config.php');
  include('header.php');
 
// $rin=md5("12345");
//   $sql1="SELECT*FROM ministry" ;
//   $result1=pg_query($conn,$sql1);
  
// $m=1;
// while($row1 = pg_fetch_array($result1)){
// $EM=$row1['employee_code'];
 
//$po="INSERT INTO login(employee_code,password) VALUES('1076','$rin')";
//$tr=pg_query($conn,$po);


// }

?>
    <?php
  $log=true;

if($_SERVER["REQUEST_METHOD"]=="POST"){
$table=($_POST['table']);
$present_post_grade=$_POST['present_post_grade'];
$user=($_POST['employee_code']);
$pass=md5($_POST['password']);

$sql="SELECT*FROM login WHERE employee_code='$user' AND password='$pass'" ;
$result=pg_query($conn,$sql);
$row = pg_fetch_array($result);
if(pg_num_rows($result)>0){
    $sql1="SELECT employee_code FROM $table WHERE employee_code='$user' " ;
    $result1=pg_query($conn,$sql1);
    if(pg_num_rows($result1)>0){
  session_start();
  $_SESSION['loggedin']=true; 
  $_SESSION['employee_code']=$user;
  $_SESSION['table']=$table;
  $_SESSION['dob']=$pass;
  header("location: home.php");
    }else{
echo' <div class="alert  alert-danger" role="alert">Wrong Employee Category </div>';
    }
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
    <div style="min-height:80vh; display:flex; " class="align-items-center"id="gol">

        <div class="d-flex justify-content-center border me-auto ms-auto bg-opacity-50 bg-info shadow-lg  rounded-4 new"
             id="boxlog">


            <form action=emp_login.php method="post" class="w-75">
                <div class="d-flex  mt-2 w-100 input">
                    <div class="input me-1" style=" width: 49.333%; display: inline-block; ">
                        <label class="form-label text-dark" for="specificSizeSelect">Employee Category</label>
                        <select class="form-select w-100 " id="specificSizeSelectn" name="table" required="">
                            <option selected disabled value="">Choose...</option>
                            <option value="driver">DRIVER STAFF</option>
                            <option value="revenue">REVENUE STAFF</option>
                            <option value="ministry">MINISTRY STAFF</option>

                        </select>
                    </div>
                    <div class="input" style="  width: 48.333%; display: inline-block;">
                        <label class="form-label text-dark" for="specificSizeSelect"> POST</label>
                        <select class="form-select w-100 " id="specificSizeSelecta" name="present_post_grade" required="" >
                            <option selected disabled>Choose...</option>

                        </select>
                    </div>
                </div>
                <div class="mb-3 mt-3 me-auto ms-auto input col-md-8">
                    <label for="exampleInputEmail1" class="form-label text-dark ">EMPLOYEE CODE</label>
                    <div class="d-flex bg-white"> 
                        <i class="fa fa-user icon "></i>
                    <input type="name" name="employee_code" class="form-control  border-0 rounded-0" id="name" placeholder="Employee Code"
                        aria-describedby="emailHelp" required="">
                      </div>
                </div>
                <div class="mb-3 me-auto ms-auto input col-md-8">
                <label for="exampleInputPassword1" class="form-label  ">Password</label>
                        <div class="d-flex">
                            <i class="fa fa-key icon"></i>
                            <input type="password" name="password" class="form-control border-0 rounded-0" id="exampleInputPassword1" required="">
                        </div>
                        <input type="checkbox" onclick="showpass()">Show Password
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn input btn-warning  mb-4 ">Log in</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function showpass() {
            var x = document.getElementById("exampleInputPassword1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script src="js/index.js"></script>
    <?php include('footer.php');
 ?>
 <!--This Project is Developed by Shiv Pratap Singh Rajawat under the guidence of Mrs. Itee Shree Nanda (DIO, Cuttak) -->