<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reset Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/index.css" rel="stylesheet">
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
          <p> Password Reset</p>
        </div>
        <form action=admin_login.php method="post">
          <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
            <label for="exampleInputEmail1" class="form-label text-white">Enter Employeecode </label>
            <input type="number" name="Employee-code" class="form-control" id="name" placeholder="Enter Employee Code" aria-describedby="emailHelp">

          </div>
          <div class="mb-3 mt-3 me-auto ms-auto  col-md-8">
            <label for="exampleInputPassword1" class="form-label text-white">Enter Mobile number</label>
            <input type="number" name="mob_no" class="form-control" id="exampleInputPassword1">
          </div>
          
          <div class=" d-flex justify-content-center ">

            <div class="d-inline-flex p-2 ">

              <button type="submit" class="btn btn-warning "> Login</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  include('footer.php');
  ?>