<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin gradation Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: "yy",
                changeMonth: true,
                changeYear: true,
                yearRange: "-65:+65",
                showButtonPanel: true,
                onClose: function(dateText, inst) {
      var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
      $(this).datepicker('setDate', new Date(year, 1));
    }


            });
            $("#datepicker").focus(function() {
    $(".ui-datepicker-month").hide();
    $(".ui-datepicker-calendar").hide();
  });
        });
     
        </script>
    <style>
        #data {
            overflow-x: scroll;
            font-size: 12px;
        }

        #selection {
            display: flex;
        }

        @media print {

            header,
            footer,
            aside,
            form,
            nav {
                display: none;
            }

            #data {
                font-size: 8px;
            }

            #selection {
                display: none;
            }
        }
    </style>
</head>

<body>

    <?php
    require_once('config.php');
    require_once('admin_session.php');
    include('header.php');
    if (isset($_GET["yes"])) {
    ?>

        <div class="alert alert-success" role="alert">
            Employee Record Updated Successfully.
        </div>
    <?php
    }
    ?>
    <div id="cont" class="flex-column">
        <div class=" flex-row w-100 justify-content-center mb-auto position-sticky" id="selection">
            <div class="d-flex p-2 flex-column mt-5 align-items-center bg-dark w-25 border border-4 mb-auto">

                <div> <label class="form-label text-white" for="specificSizeSelect">PLEASE CHOOSE CATEGORY</label>
                </div>
                <select class="form-select" id="specificSizeSelectn" name="table">
                    <option selected disabled>Choose...</option>
                    <option value="driver">DRIVER STAFF</option>
                    <option value="revenue">REVENUE STAFF</option>
                    <option value="ministry">MINISTRY STAFF</option>
                </select>
            </div>
            <div class="d-flex p-2 flex-column mt-5 align-items-center bg-dark w-25 border border-4 mb-auto">
                <div> <label class="form-label text-white" for="specificSizeSelect">PLEASE CHOOSE POST</label></div>
                <select class="form-select" id="specificSizeSelecta" name="present_post_grade">
                    <option selected disabled>Choose...</option>

                </select>
            </div>
            <div class="d-flex p-2 flex-column mt-5 align-items-center bg-dark w-25 border border-4 mb-auto">
                <div class="container-fluid">
                    
                    <div> <label class="form-label text-white d-block" for="specificSizeSelect">YEAR</label></div>
                        <input class="form-control d-inline me-2 w-75" type="text" id="datepicker" placeholder="--/--/----" aria-label="Search">
                        
                    
                </div>

            </div>
        </div>
        <div id="data" class="mb-auto w-100 mt-3"> </div>
        
    </div>
    <div class="d-flex flex-row justify-content-center">
                    <button class="btn btn-success m-3" onclick="window.print()">Print</button>
                </div>
    <script src="js/view_employee.js"></script>
    <script>
        document.getElementById("specificSizeSelectn").addEventListener("change", showUser);

        document.getElementById("specificSizeSelecta").addEventListener("change", showUser);
        document.getElementById("find").addEventListener("click", search);
        let quer=document.getElementById("findemployee");

        function showUser(str) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("data").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", `admin_gradationfatch.php?q=+${s1.value}&w=+${s2.value}`, true);
            xmlhttp.send();
        }

        function search(str) {
             var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("data").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", `delete.php?table=+${s1.value}&employee=+${quer.value}`, true);
            xmlhttp.send();
        }
    </script>
    <?php
    include('footer.php');
    ?>