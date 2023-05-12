<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reset Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
  <style>
     .icon {
            padding: 10px;
            background: white;
            color: black;
            min-width: 30px;
            text-align: center;

        }
  </style>
</head>

<body>

  <?php
  require_once('config.php');
  require_once('admin_session.php');
  include('header.php');
  ?>
  <div id=cont>
    <div id="login" class="bg-primary  p-0 bg-light">
    <div class="container justify-content-center border border border-2 border-dark bg-primary rounded-4   ">
                <div class="d-flex justify-content-center p-0">
                    <p> Password Reset </p>
                </div>
                <form action=otp.php method="post" onsubmit ="return verifyPassword()" >
                <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
                <label class="form-label text-white" for="specificSizeSelect">Employee Category</label>
                        <select class="form-select" id="specificSizeSelectn" name="table" required="">
                            <option selected disabled value="">Choose...</option>
                            <option value="driver">DRIVER STAFF</option>
                            <option value="revenue">REVENUE STAFF</option>
                            <option value="ministry">MINISTRY STAFF</option>

                        </select>
                        </div>
                    <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
                        <label for="exampleInputEmail1" class="form-label text-white">Employee Code </label>
                        <div class="d-flex">
                            <i class="fa fa-user icon "></i>
                            <input type="name" name="employee_code" class="form-control border-0 rounded-0" id="validationTooltip01" placeholder="Employee Code" aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
                        <label for="exampleInputPassword1" class="form-label text-white ">New Password</label>
                        <div class="d-flex">
                            <i class="fa fa-key icon"></i>
                            <input type="password" name="password" class="form-control border-0 rounded-0" id="exampleInputPassword1" required>
                        </div>
                        
                    </div>
                    <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
                        <label for="exampleInputPassword1" class="form-label text-white ">Confirm New Password</label>
                        <div class="d-flex">
                            <i class="fa fa-key icon"></i>
                            <input type="password" name="cpassword" class="form-control border-0 rounded-0" id="exampleInputPassword2" required>
                        </div>
                        <input type="checkbox" onclick="showpass()">Show Password
                        <span id="message" class="d-block text-light"></span>
                    </div>
                    <div class=" d-flex justify-content-center ">

                        <div class="d-inline-flex p-2 ">

                            <button type="submit" class="btn btn-warning " name="submit" value="submit"> Reset</button>
                        </div>

                    </div>
                </form>
            </div>
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
            var y = document.getElementById("exampleInputPassword2");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }

        function verifyPassword() {
  var pw = document.getElementById("exampleInputPassword1").value;
  var cpw = document.getElementById("exampleInputPassword2").value;
  //check empty password field
  if(pw != cpw) {
     document.getElementById("message").innerHTML = "*Password not matched";
     return false;
  }
 
 //minimum password length validation
 // if(pw.length < 8) {
   //  document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
     //return false;
 // }

//maximum length of password validation
  // if(pw.length > 15) {
  //    document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
  //    return false;
  // } else {
  //    alert("Password is correct");
  // }
}


    </script>
  <?php
  include('footer.php');
  ?>