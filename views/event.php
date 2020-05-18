<html>

<head>
    <title>Tours</title>
</head>

<body>

    <?php

include '../controller/tourController.php';
$allTours = getAllTours();

if (isset($_GET['id'])) {
    $tourId = $_GET['id'];
    $userId = $_SESSION['user'];

    // echo $tourId;
    // echo $userId;
    bookTour($userId, $tourId);

}

?>
    <style>
    body {
        background: url('images/nafakhum.jpg');
        background-size: 100%;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
        font-family: Arial;
    }

    .eventForm {
        border-radius: 20px;
        right: 0;
        margin: auto;
        max-width: 800px;
        padding: 20px;
        background-color: white;
        margin-top: 40px;
        text-align: center;
    }

    h1,
    h4 {
        margin: 0 0 30px 0;
        padding: 05px;
        color: rgb(55, 90, 47);
        text-align: center;
    }

    p {
        margin: 0 0 30px 0;
        padding: 05px;
        color: rgb(55, 90, 47);
        text-align: center;
    }

    input[type=button] {

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

    input[type=button]:hover {
        background: rgb(75, 150, 30);
        color: #ffffff;
    }

    b {
        margin-left: 20px;
    }

    .column {
        display: flex;
        flex-wrap: wrap;
        padding: 0 10px;
        margin-bottom: 20px;
    }

    .btn {
        border: none;
        outline: none;
        padding: 10px;
        color: #fff;
        font-size: 16px;
        font-family: Arial;
        background: rgb(55, 90, 47);
        cursor: pointer;
        border-radius: 20px;
        margin-bottom: 30px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        flex: 0 40%;
        margin: 10px 20px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 2px 16px;
    }

    .text {
        text-decoration: none;
        color: #fff;
    }

    .row {
        margin: 0 -5px;
    }


    * {
        box-sizing: border-box;
    }
    </style>
    <form method="POST" action="" class="eventForm">
        <h1>Events</h1>
        <p>Here you will get all the information about tours around Bangladesh...</p>
        <tr>
            <td>
                <div class="row">
                    <div class="column">

                        <?php
foreach ($allTours as $tour) {
    echo "<div class='card'>";
    echo '<img src="images/coxsBazar.jpg" alt="Coxs Bazar" style="width:100%">';
    echo '<div class="container">
				<h4><b>' . $tour["place"] . '</b></h4>
				<p>Tour Date : ' . $tour["date"] . '</p>
				<p>People : ' . $tour["maxBooking"] . '</p>
				<p>Fee : ' . $tour["cost"] . '</p>
				<button class="btn" >
 			<a class="text" href="event.php?id=' . $tour["id"] . '">Book Now</a>
			</button>
			</div>';
    echo "</div>";

}
?>
                    </div>

                </div>
            </td>
        </tr>
        <br>
        <input type="button" onclick="window.location.href = 'home.php';" name="home" value="Home">
    </form>
</body>

</html>