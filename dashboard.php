<?php
require_once('config.php');
require_once('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg text-light bg-dark m-0">
    <div class="  ms-1">
      <a class="navbar-brand m-0" href="#">
        <img src="EmblemN.png" alt="Bootstrap" width="60" height="50">
      </a>
    </div>
    
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="Bootstrap" width="150" height="40">
      </a></div>
     
        <div class="  ms-1">
            <a class="navbar-brand m-0" href="#">
            <img src="flag.png" alt="Bootstrap" width="80" height="50">
          </a>
        </div>
      </a>
  </nav>
  <?php

    $user=$_SESSION['employee_code'];
    $table=$_SESSION['table'];
    $pass=$_SESSION['dob'];
   
    $result = pg_query($conn,"SELECT * FROM $table where employee_code='$user' ");
    print_r ($result);
    $row = pg_fetch_array($result);
   print_r($row);
   
  ?>
  <section style="background-color: #eee;">
  <div class="container py-5">
   

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
          <h5 class="my-3">Photo</h5>
            <img src="<?php echo $row['image_path'] ?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
          
           
            <div class="d-flex justify-content-center mb-2">
            <form action="upload.php" method="post" enctype="multipart/form-data">
 
            <input type="file" name="image"  class="btn btn-primary" id="fileToUpload">
            <input type="hidden"  name="oldphoto" value="<?php echo $row['image_path'] ?>">
            <input type="hidden"  name="destination" value="photos/">
             <button type="submit" class="btn btn-outline-primary ms-1" name="submit">Upload Photo</button>
             </form>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
          <div class="card-body text-center">
          <h5 class="my-3">Signature</h5>
            <img src="<?php echo $row['signature_path'] ?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
           
            <div class="d-flex justify-content-center mb-2">
            <form action="upload.php" method="post" enctype="multipart/form-data">
 
             <input type="file" name="image"  class="btn btn-primary" id="fileToUpload">

             <input type="hidden"  name="destination" value="signature/">
             <input type="hidden"  name="oldphoto" value="<?php echo $row['signature_path'] ?>">
              <button type="submit" class="btn btn-outline-primary ms-1" name="submit">Upload Signature</button>
              </form>
            </div>
          </div>
       
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo$row['name'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo$row['h_block'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Whatsapp no.</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile no.</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
