
    <?php
require_once('config.php');
require_once('session.php');
include('header.php')

?>
    <?php
$sl_no=($_POST['sl_no']);
$name =($_POST['name']);
$category_caste=($_POST['category_caste']);
$dob=($_POST['dob']);

$h_block=($_POST['h_block']);
$e_qual=($_POST['e_qual']);
$j_date=($_POST['j_date']);
$r_year=($_POST['r_year']);
$pa_month=($_POST['pa_month']);
$pa_year=($_POST['pa_year']);
$fa_month=($_POST['fa_month']);
$fa_year=($_POST['fa_year']);
$j_sc_date=($_POST['j_sc_date']);
$j_hc_date=($_POST['j_hc_date']);
$s_date=($_POST['s_date']);
$present_place_of_posting=($_POST['present_place_of_posting']);
if($enrollment==""||strlen(preg_replace('/\s+/',"",$enrollment))<14||strlen(preg_replace('/\s+/',"",$enrollment))>14) {
  echo "<h2 style=text-align:center;>Failed to insert record Plese insert prper Enrollment<h2>";
  

}
else{



$sql = "INSERT INTO section_officer () VALUES ('$enrollment', '$name', '$total', '$mob', '$addres','$departmant', '$addmision','$centre');";
if(pg_query($conn,$sql))
{
    echo("Record updated succcesfully");
}
else
echo"Error";
?>
    <?php 




$result = pg_query($conn,"SELECT * FROM re ");

?>




    <table class="table table-striped">
        <tr>
            <th scope="col">Index</th>
            <th scope="col">Enrollment no.</th>
            <th scope="col">Name</th>
            <th scope="col">Department</th>
            <th scope="col">Total marks</th>
            <th scope="col">Address</th>
            <th scope="col">Mobile no.</th>
            <th scope="col">center</th>
            <th scope="col">Addimissin date</th>

        </tr>
        <?php
$i=1;
while($row = pg_fetch_array($result)) {
?>
        <tr>
            <td><?php echo "$i"; ?></td>
            <td><?php echo $row["enrollmemnt_no"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["depatment"]; ?></td>
            <td><?php echo $row["total_marks"]; ?></td>

            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["mobile_no"]; ?></td>
            <td><?php echo $row["centre"]; ?></td>
            <td><?php echo $row["addmissiondate"]; ?></td>


        </tr>
        <?php
$i++;
}
}
?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

</body>

</html>