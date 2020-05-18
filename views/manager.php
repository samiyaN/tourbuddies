<html>

<head>

    <title>Create Tour</title>

    <script>
    function addManager() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("output").innerHTML = xhttp.responseText;
            }
        }
        xhttp.open("GET", "managerAdd.php", true);
        xhttp.send();

    }

    function managerList() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("output").innerHTML = xhttp.responseText;
            }
        }
        xhttp.open("GET", "managerList.php", true);
        xhttp.send();

    }
    </script>
</head>

<body>


    <?php
session_start();
include '../controller/managercontroller.php';

if (isset($_POST['addmanager'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $userid = $_SESSION['user'];

    // echo '<h1> Helo </h1>';

    addmanager($name, $phone, $userid);

}

?>


    <style>
    button {
        border: none;
        outline: none;
        padding: 8px;
        padding-left: 50px;
        padding-right: 50px;
        color: #fff;
        font-size: 16px;
        font-family: Arial;
        background: rgb(55, 90, 47);
        cursor: pointer;
        border-radius: 20px;
        margin-top: 16px;
        margin-left: 20px;
    }

    a {
        text-decoration: none;
        color: #fff;
    }

    body {
        background: url('images/createTourB.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0;
        padding: 50px;
        padding-left: 20px;
        font-family: Arial;
    }

    .card {
        border-radius: 20px;
        margin: 0 auto;
        max-width: 700px;
        max-height: 600px;
        padding: 10px;

        background-color: white;
    }

    h1 {
        text-align: center;
    }
    </style>

    <div class="card">
        <h1>Managers</h1>

        <button onclick='addManager();'>Add Manager</button>
        <button onclick='managerList();'>Manager List</button>

        <div id="output"></div>


        <button><a href='eventPlannerProfile.php'>Go back</a></button>



    </div>






</body>

</html>