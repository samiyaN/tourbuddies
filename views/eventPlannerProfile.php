<html>

<head>
    <title>Event Planner Profile</title>
</head>

<body>
    <?php
include '../controller/tourController.php';
$allTours = getPlannerTours($_SESSION['user']);

?>
    <style>
    body {
        background: url('images/background.jpg');
        background-size: 1500px 1000px;
        background-repeat: no-repeat;
        margin: 0;
        padding: 40px;
        font-family: Arial;
    }

    .loginSubmit {
        border-radius: 20px;
        right: 0;
        margin: auto;
        max-width: 500px;
        padding: 25px;
        background-color: white;
        margin-top: 80px;

    }

    #dataTable {
        border-collapse: collapse;

    }

    #dataTable td,
    th {
        padding: 2px 5px;
    }

    h1 {
        margin: 20px 0 0 0;
        padding: 10px;
        color: rgb(55, 90, 47);
        text-align: center;
    }

    b {
        width: 100%;
        border: none;
        outline: none;
        margin: 30px 0 0 0;
        padding: 20px;
        color: #000000;
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

    .edit {
        padding-left: 40px;
        padding-right: 40px;
    }
    </style>
    <form class="loginSubmit">
        <h1>Event Planner Information</h1> <br>

        <b>First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b>
        <?php if (!empty($_SESSION['first_name'])) {echo $_SESSION['first_name'];}?> <br>
        <b>Last Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b>
        <?php if (!empty($_SESSION['last_name'])) {echo $_SESSION['last_name'];}?> <br>
        <b>User Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b>
        <?php if (!empty($_SESSION['username'])) {echo $_SESSION['username'];}?> <br>
        <b>Email
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b>
        <?php if (!empty($_SESSION['email'])) {echo $_SESSION['email'];}?> <br>
        <b>Phone Number &nbsp;:</b> <?php if (!empty($_SESSION['phone'])) {echo $_SESSION['phone'];}?> <br>
        <b>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp :</b>
        <?php if (!empty($_SESSION['gender'])) {echo $_SESSION['gender'];}?> <br>
        <b>Role
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b>
        <?php if (!empty($_SESSION['role'])) {echo $_SESSION['role'];}?> <br>
        <tr>
            <td colspan="2" align="center">
                <input type="button" class="edit" onclick="window.location.href = 'Registration.php';" name="edit"
                    value="Edit">
                <input type="button" class="create" onclick="window.location.href = 'createTour.php';"
                    name="createEvent" value="Create Event">
            </td>
        </tr>
        <tr>
            <input type="button" class="create" onclick="window.location.href = 'manager.php';" name="createEvent"
                value="Managers">
        </tr>
        <table border='1' id='dataTable'>
            <tr>
                <H1>Event List</H1>
            </tr>
            <tr>
                <th>Tour Id</th>
                <th>Place</th>
                <th>Date</th>
                <th>Booked</th>
                <th>Manager Name</th>
            </tr>

            <?php
foreach ($allTours as $tour) {
    echo "  <tr>";
    echo '
             <td>' . $tour["id"] . '</td>
             <td>' . $tour["place"] . '</td>
             <td>' . $tour["date"] . '</td>
             <td>' . $tour["booked"] . '/' . $tour["maxBooking"] . '</td>
             <td>' . $tour["managerID"] . '</td>
       ';
    echo "</tr>";

}
?>

        </table>
    </form>
</body>

</html>