
  <nav class="navbar navbar-expand-lg text-light bg-primary m-0">
    <div class="  ms-1">
      <a class="navbar-brand m-0" href="#">
        <img src="images/EmblemN.png" alt="Bootstrap" width="60" height="50">
      </a>
    </div>
    
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="Bootstrap" width="75%" hieght="50%">
      </a></div>
      <?php
      if(isset($_SESSION['loggedin'])){
      ?>
        <button type="button" class="btn btn-danger me-1 btn-sm " onclick="logout()">Logout</button>
     <?php
     }
     ?>
        <div class="  ms-1">
            <a class="navbar-brand m-0" href="#">
            <img src="images/flag.png" alt="Bootstrap" width="80" height="50">
          </a>
        </div>
      </a>
  </nav>
  <script>
    function logout(){
      window.location="logout.php"
    }
  </script>