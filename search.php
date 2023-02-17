

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <a href="http://localhost/dashboard/projectphp/logout.php">  <button type="button" class="btn btn-danger me-1 btn-sm ">Logout</button></a>
        <div class="  ms-1">
          
      
            <a class="navbar-brand m-0" href="#">
            <img src="flag.png" alt="Bootstrap" width="80" height="50">
          </a>
        </div>
        
      </a>
  </nav>
  <div class="alert alert-success" role="alert">
 
</div>

<div class="container d-flex justify-content-center align-middle " style="width: 28% ; margin-top: 10rem " >
  <form class="form-control bg-dark   border border-4 border-warning" method="post" action="GHOST.php">
    <input type="text" name="post_of_driver" class="form-control" placeholder="ENROLMENT NO.">
    <div class="col-sm-4">
    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
    <select class="form-select" id="specificSizeSelect" name="table">
      <option selected>Choose...</option>
      <option value="driver">DRIVER</option>
      <option value="revenue">REVENUE</option>
     
    </select>
  </div>
  <div class="col-sm-4">
    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
    <select class="form-select" id="specificSizeSelect" name="present_post_grade">
      <option selected>Choose...</option>
      <option value="driver">Junior Driver</option>
      <option value="senior driver">Senior Driver</option>
      <option value="Head driver">Head Driver</option>
      <option value="AMIN">AMIN</option>
      <option value="ARI">ARI</option>
      <option value="RI">RI</option>
      <option value="RS">RS</option>
    </select>
  </div>
    <button type="submit" name="save" class="btn btn-primary btn-sm m-1">Search</button>
    <a href="http://localhost/dashboard/projectphp/rok.html">  <button type="button" class="btn btn-success btn-sm">Add Student</button></a>
    <a href="http://localhost/projectphp/all.php">  <button type="button" class="btn btn-secondary m-1 btn-sm">All Driver</button></a>
    <a href="http://localhost/dashboard/projectphp/delete.html">  <button type="button" class="btn btn-danger btn-sm ">Delete</button></a>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>
</html>


