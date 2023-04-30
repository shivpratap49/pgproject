<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
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

                <div> <label class="form-label text-white" for="specificSizeSelect">PLEASE CHOOSE DEPARTMENT</label>
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
                    
                    <div> <label class="form-label text-white d-block" for="specificSizeSelect">Search And Delete Employee</label></div>
                        <input class="form-control d-inline me-2 w-75" type="search" id="findemployee" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success btn-sm d-inline" id="find" type="button">Search</button>
                    
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
            xmlhttp.open("GET", `test.php?q=+${s1.value}&w=+${s2.value}`, true);
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