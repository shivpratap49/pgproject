

<?php 
include('header.php')
?>
  <div class="alert alert-success" role="alert">
 
</div>

<div class="container d-flex justify-content-center align-middle " style="width: 28% ; margin-top: 10rem " >
  <form class="form-control bg-dark   border border-4 border-warning" method="post" action="GHOST.php">
   
    <div class="col-sm-4"  style="  width: 48.333%; display: inline-block;">
    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
    <select class="form-select" id="specificSizeSelect" name="table">
      <option selected>Choose...</option>
      <option value="driver">DRIVER</option>
      <option value="revenue">REVENUE</option>
      <option value="ministry">MINISTRY STAFF</option>
     
    </select>
  </div>
  <div class="col-sm-4" style="  width: 48.333%; display: inline-block;">
    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
    <select class="form-select" id="specificSizeSelect" name="present_post_grade">
      <option selected value="">Choose...</option>
      <option value="driver">Junior Driver</option>
      <option value="senior driver">Senior Driver</option>
      <option value="Head driver">Head Driver</option>
      <option value="AMIN">AMIN</option>
      <option value="ARI">ARI</option>
      <option value="RI">RI</option>
      <option value="RS">RS</option>
      <option value="JRA">JRA</option>
      <option value="SO">SO</option>
      <option value="SRA">SRA</option>
    </select>
  </div>
    <button type="submit" name="save" class="btn btn-primary btn-sm m-1">Search</button>
    <a href="http://localhost/projectphp/pgproject/rok.html">  <button type="button" class="btn btn-success btn-sm">Add Student</button></a>
    <a href="http://localhost/projectphp/all.php">  <button type="button" class="btn btn-secondary m-1 btn-sm">All Driver</button></a>
    <a href="http://localhost/dashboard/projectphp/delete.html">  <button type="button" class="btn btn-danger btn-sm ">Delete</button></a>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>
</html>


