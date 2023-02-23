<?php
require("config.php");
require_once('session.php');
$user=$_SESSION['employee_code'];
$table=$_SESSION['table'];
$pass=$_SESSION['dob'];
$oldphoto=$_POST['oldphoto'];
$folder=$_POST['destination']

?>
<?php
$target_dir = $folder;
$target_file = $target_dir . basename($_FILES["image"]["name"]);
echo"$target_file";
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 2000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
   if($folder=="photos/"){
   $query="UPDATE $table SET image_path='$target_file' WHERE employee_code='$user';";
   }
   elseif($folder=="signature/"){
   $query="UPDATE $table SET signature_path='$target_file' WHERE employee_code='$user';";
   }
   if(pg_query($conn,$query))
{
    echo("Record updated succcesfully");
    $status=unlink($oldphoto);    
if($status){  
echo "File deleted successfully";    
}else{  
echo "Sorry!";    
}  
   header("location: dashboard.php");
   
  
}
else
echo"Error";

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

?>