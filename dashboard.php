<?php
require_once('config.php');
require_once('session.php');
$user=$_SESSION['employee_code'];
$table=$_SESSION['table'];
$pass=$_SESSION['dob'];
?>
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link href="css/main.css" rel="stylesheet">
  </head>
  <body>
 
  <?php
include('header.php');

    
  if(isset($_POST["submit"])) {
    $address=$_POST['h_block'];
    $whats_no=$_POST['whats_no'];
    $mob_no=$_POST['mob_no'];
  $query="UPDATE $table SET h_block='$address', whats_no='$whats_no', mob_no='$mob_no' WHERE employee_code='$user';";
   if(pg_query($conn,$query))
   {
  ?>
    <div class="alert alert-success" role="alert">
        Record update successfully
    </div>
    <?php  
}else{  
echo "Sorry!";    
}
}
?>
    <?php
    $result = pg_query($conn,"SELECT * FROM $table where employee_code='$user' ");
    $row = pg_fetch_array($result);
   
  ?>

    <section style="background-color: #eee;">
        <div class="container py-5">


            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h5 class="my-3">Photo</h5>
                            <div id="img-preview">
                            <img src="<?php echo $row['image_path'] ?>" id=fi alt="" class="rounded-circle img-fluid"
                                style="width: 150px;">
                                
                            </div>
                            <div class="d-flex justify-content-center mb-2">
                                <form action="upload.php" method="post" enctype="multipart/form-data">

                                    <input type="file" accept="image/*" name="image" class="btn btn-primary my-4" id="fileToUpload"
                                        style="display:none;" onchange="document.getElementById('fi').src = window.URL.createObjectURL(this.files[0])">
                                    <input type="hidden" name="oldphoto" value="<?php echo $row['image_path'] ?>">
                                    <input type="hidden" name="destination" value="photos/">
                                    <button type="submit" class="btn btn-outline-primary my-1 ms-1" id="btphotoupload"
                                        name="submit" style="display:none;">Upload Photo</button>
                                    <button type="button" class="btn btn-info my-4 ms-1" id="btphoto" onclick="show()"
                                        style="display:block;">Edit Photo</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <div class="card-body text-center">
                                <h5 class="my-3">Signature</h5>
                                <img src="<?php echo $row['signature_path'] ?>" alt="avatar" id=si
                                    class="rounded-circle img-fluid" style="width: 150px;">

                                <div class="d-flex justify-content-center mb-2">
                                    <form action="upload.php" method="post" enctype="multipart/form-data">

                                        <input type="file" name="image" style="display:none;"  onchange="document.getElementById('si').src = window.URL.createObjectURL(this.files[0])"
                                            class="btn btn-primary my-4" id="fileToUploadsi">

                                        <input type="hidden" name="destination" value="signature/">
                                        <input type="hidden" name="oldphoto"
                                            value="<?php echo $row['signature_path'] ?>">
                                        <button type="submit" style="display:none;" id="signchoose"
                                            class="btn btn-outline-primary my-1 ms-1" name="submit">Upload
                                            Signature</button>
                                        <button type="button" class="btn btn-info my-4 ms-1" style="display:block; "
                                            onclick="showsig()" id="btnsign" name="submit">Edit Signature</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row p-2">
                                <div class="col-sm-3">
                                    <p class="mb-0">Employee Code</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo$row['employee_code'];?></p>
                                    <div ><img src="<?php echo $row['image_path'] ?>" alt="avatar" class="rounded-top img-fluid border border-dark border border-bottom-0"
                                style="width: 120px; height: 120px; position:absolute; right: 40px; top:5px">

                                    <img src="<?php echo $row['signature_path'] ?>" alt="avatar" class="border border-dark  img-fluid border border-top-0 rounded-bottom"
                                    style="width: 120px; height: 30px; position:absolute; right: 40px; top: 125px;" >
                                    </div>

                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row p-2">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo$row['name'];?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row p-2">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo$row['h_block'];?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row p-2">
                                <div class="col-sm-3">
                                    <p class="mb-0">Whatsapp no.</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo$row['whats_no'];?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row p-2">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile no.</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo$row['mob_no'];?></p>
                                </div>
                            </div>
                            <hr>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Edit info
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Your Info</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="dashboard.php" method="post" onsubmit="return validate()"
                                            name="form">
                                            <div class="modal-body">
                                                <div class="col-xg-9">
                                                    <div class="card mb-4">
                                                        <div class="card-body">

                                                            <div class="row ">
                                                                <div class="col-sm-3 ">
                                                                    <p class="mb-0">Full Name</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0"><?php echo$row['name'];?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Address</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="h_block"
                                                                        class="form-control" id="formGroupExampleInput"
                                                                        value="<?php echo$row['h_block'];?>">
                                                                    <span class="text-danger "
                                                                        style="font:size 8px; display:none"
                                                                        id="address">* Address can not be empty</span>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Whatsapp no.</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="whats_no"
                                                                        class="form-control" id="formGroupExampleInput"
                                                                        value="<?php echo$row['whats_no'];?>">
                                                                    <span class="text-danger "
                                                                        style="font:size 8px; display:none" id="whats">*
                                                                        Whatsapp no. must contain 10 Digits</span>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Mobile no.</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="mob_no"
                                                                        class="form-control" id="formGroupExampleInput"
                                                                        value="<?php echo$row['mob_no'];?>">
                                                                    <span class="text-danger "
                                                                        style="font:size 8px; display:none;" id="mob">*
                                                                        mobile no. must contain 10 Digits</span>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" name="submit"
                                                                class="btn btn-primary">Save</button>
                                                            <button type="button" class="btn btn-dark"
                                                                data-bs-dismiss="modal">Close</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <script src="js/dashboard.js">
   
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
<?php
include('footer.php');
?>