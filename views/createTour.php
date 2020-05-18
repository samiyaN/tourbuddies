<?php
require_once "../controller/tourController.php";
require_once "../controller/managercontroller.php";
if (isset($_SESSION['user'])) {
    $allManagers = getallmanager($_SESSION['user']);
}

?>
<html>

<head>
    <title>Create Tour</title>
</head>

<body>


    <?php
if (isset($_POST['save'])) {
    $place = $_POST['location'];
    $cost = $_POST['fee'];
    $date = $_POST['date'];
    $duration = $_POST['days'];
    $maxBooking = $_POST['maxPeople'];
    $contact = $_POST['contact'];
    $description = $_POST['description'];
    $organizer_id = $_SESSION['user'];
    $managerId = $_POST['manager'];

    // echo $place . '<br>';
    // echo $cost . '<br>';
    // echo $date . '<br>';
    // echo $duration . '<br>';
    // echo $maxBooking . '<br>';
    // echo $contact . '<br>';
    // echo $description . '<br>';
    // echo $organizer_id . '<br>';
    // echo $managerId . '<br>';

    //(`id`, `place`, `cost`, `date`, `duration`, `maxBooking`, `booked`, `isFull`, `picture`, `organizerId`, `Rating`, `managerID`, `managerRating`)

    if ($place == '' ||
        $cost == '' ||
        $date == '' ||
        $duration == '' ||
        $maxBooking == '' ||
        $contact == '' ||
        $description == '' ||
        $organizer_id == '' ||
        $managerId == '') {
        header('location: ./createTour.php');
    }

    createTour($place, $cost, $date, $duration, $maxBooking, $contact, $description, $organizer_id, $managerId);

}
?>



    <style>
    body {
        background: url('images/createTourB.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0;
        padding: 50px;
        padding-left: 20px;
        font-family: Arial;

    }

    .createTour {

        border-radius: 20px;
        margin: 0 auto;
        max-width: 500px;
        max-height: 600px;
        padding: 10px;

        background-color: white;
    }

    b {
        padding: 8px;
        padding-left: 30px;
        padding-right: 30px;
    }

    h1 {
        margin: 30px 0 0 0;
        padding: 2px;
        color: rgb(55, 90, 47);
        text-align: center;
        margin-bottom: 10px;
    }


    #date {
        margin-left: 55px;
        border: 2px #000000 solid;
        border-radius: 20px;
        padding: 5px 20px;


    }

    #days {
        padding: 5px;
        padding-left: 75px;
        padding-right: 75px;
        border: none;
        outline: none;
        border: 2px #000000 solid;
        background: transparent;
        border-radius: 20px;
        box-sizing: border-box;
        color: #000000;
        font-size: 16px;
        text-align: center;
        margin-top: 6px;
        margin-left: 90px;
        resize: vertical;
    }

    #maxPeople {
        padding: 5px;
        padding-left: 69px;
        padding-right: 69px;
        border: none;
        outline: none;
        border: 2px #000000 solid;
        background: transparent;
        border-radius: 20px;
        box-sizing: border-box;
        color: #000000;
        font-size: 16px;
        text-align: center;
        margin-top: 6px;
        resize: vertical;
    }

    #location,
    #manager {
        padding: 5px;
        padding-left: 47px;
        padding-right: 47px;
        border: none;
        outline: none;
        border: 2px #000000 solid;
        background: transparent;
        border-radius: 20px;
        box-sizing: border-box;
        color: #000000;
        font-size: 16px;
        text-align: left;
        margin-top: 6px;
        margin-left: 63px;
        resize: vertical;
    }

    #fee,
    #place {
        padding: 5px;
        padding-left: 58px;
        padding-right: 58px;
        border: none;
        outline: none;
        border: 2px #000000 solid;
        background: transparent;
        border-radius: 20px;
        box-sizing: border-box;
        color: #000000;
        font-size: 16px;
        text-align: center;
        margin-top: 6px;
        margin-left: 103px;
        resize: vertical;
    }

    #contact {
        padding: 8px;
        padding-left: 20px;
        padding-right: 30px;
        border: none;
        outline: none;
        border: 2px #000000 solid;
        background: transparent;
        border-radius: 20px;
        box-sizing: border-box;
        color: #000000;
        font-size: 16px;
        padding: 5px;
        text-align: left;
        margin-top: 6px;
        margin-left: 72px;
        resize: vertical;
    }

    #description {
        padding: 8px;
        padding-left: 2px;
        padding-right: 2px;
        border: none;
        outline: none;
        border: 2px #000000 solid;
        background: transparent;
        border-radius: 20px;
        box-sizing: border-box;
        color: #000000;
        font-size: 16px;
        text-align: left;
        margin-top: 6px;
        margin-left: 25px;
        resize: vertical;
    }

    ::placeholder {
        color: #000000;
        text-align: center;
    }

    input[type=submit] {

        border: none;
        outline: none;
        padding: 8px;
        padding-left: 40px;
        padding-right: 40px;
        color: #fff;
        font-size: 16px;
        font-family: Arial;
        background: rgb(55, 90, 47);
        cursor: pointer;
        border-radius: 20px;
        margin-top: 16px;
        margin-left: 30px;
    }

    input[type=submit]:hover {
        background: rgb(75, 150, 30);
        color: #ffffff;
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
        margin-left: 30px;
        margin-bottom: 25px;
    }

    input[type=button]:hover {
        background: rgb(75, 150, 30);
        color: #ffffff;
    }
    </style>

    <form method="POST" action="#" class="createTour">
        <h1>Create Tour</h1>
        <tr>
            <td><b>Tour Date &nbsp;</b> </td>
            <td>
                <input type="date" name="date" id="date">
            </td>
        </tr>
        <br>
        <tr>
            <td><b>Days &nbsp;</b> </td>
            <td> <input type="number" id="days" name="days" min="1" max="6" placeholder="1"></td>
        </tr>
        <br>
        <tr>
            <td><b>Maximum People &nbsp;</b> </td>
            <td> <input type="number" id="maxPeople" name="maxPeople" min="1" max="50" placeholder="1"></td>
        </tr>
        <br>
        <tr>
            <td><b>Location &nbsp;</b> </td>
            <td>
                <input style='width: 40%' type="text" id='location' name="location">
            </td>
        </tr>


        <tr>
            <td><b>Manager &nbsp;</b> </td>
            <td>
                <select name="manager" id="manager">
                    <option selected="selected">Select...</option>
                    <?php
foreach ($allManagers as $manager) {
    echo "<option value=" . $manager['id'] . ">" . $manager['name'] . "</option>";
}
?>
                </select>
            </td>
        </tr>



        <br>
        <tr>
            <td><b>Fee &nbsp;</b> </td>
            <td> <input type="number" id="fee" name="fee" min="500" max="10000" placeholder="fee"></td>
        </tr>
        <br>
        <tr>
            <td><b>Contact &nbsp;</b></td>
            <!--  pattern="[0-9]{4}-[0-9]{6}" -->
            <td> <input type="number" id="contact" name="contact" placeholder="Enter Phone Number">
            </td>

        </tr>
        <br>
        <tr>
            <td><b>About The Tour &nbsp; </b> </td>
            <td> <textarea name="description" id="description" rows="4" cols="42">
								</textarea>
            </td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="save" value="Save" id="save">
                <input type="button" onclick="window.location.href = 'eventPlannerProfile.php';" name="back"
                    value="Back" id="back">
            </td>
        </tr>


    </form>
</body>

</html>