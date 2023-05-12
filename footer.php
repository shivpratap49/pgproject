<div class="d-flex-xlg">
  <footer class=" mt-5  ">
      <?php
      if(isset($_SESSION['loggedin'])){
      ?>
    <div class="d-flex w-100 justify-content-center ">
      <button class="btn btn-success m-1" onclick="window.open('index.php');">Home</button>
      <button class="btn btn-danger m-1" onclick="history.back()">Back</button>
    </div>
    <?php
      }
    ?>
    <div class="bg-dark py-3">
      <ul class="text-white d-flex justify-content-center flex-wrap" style="list-style-type: none;">
        <li class="px-2 "><a href="https://cuttack.nic.in/website-policies/" class="link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Website Policies</a></li>
        <li class="px-2">/</li>
        <li class="px-2"><a href="https://cuttack.nic.in/help/"  class="link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Help</a></li>
        <li class="px-2">/</li>
        <li class="px-2"><a href="https://cuttack.nic.in/contact-us/"  class="link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Contact Us</a></li>
        <li class="px-2">/</li>
        <li class="px-2"><a href="https://cuttack.nic.in/feedback/"  class="link-light link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Feedback</a></li>
      </ul>
      <div class="d-flex w-100 justify-content-center ">
        <ul class="text-white d-flex justify-content-center flex-column align-items-center  " style="list-style-type: none; font-size:13px;">
          <li class="my-1">Content Owned by District Administration</li>
          <li class="my-1">© Cuttack , Developed and hosted by National Informatics Centre,
          </li>
          <li class="my-1">Ministry of Electronics & Information Technology, Government of India</li>
        </ul>
      </div>
      <div class="d-flex w-100 justify-content-center">
        <img src="images/sw.png" alt="" class="mx-2">
        <img src="images/niclogo.png" alt="" class="mx-2">
        <img src="images/digitalindia.png" alt="" class="mx-2">
      </div>
    </div>
  </footer>
</div>

<script src="js/bootstrap.bundle.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>