<html>

<head>
    <title>Traveller Profile</title>
</head>

<body>
    <?php

include '../controller/tourController.php';

if (isset($_SESSION['user'])) {
    $allTours = getUserTours($_SESSION['user']);
}
function getName($id)
{
    $res = getTourName($id);
    return $res[0]['place'];
}

?>

    <style>
    body {
        background: url("images/background.jpg");
        background-size: 1500px 1000px;
        background-repeat: no-repeat;
        margin: 0;
        padding: 40px;
        font-family: Arial;
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

    .loginSubmit {
        border-radius: 20px;
        right: 0;
        margin: auto;
        max-width: 500px;
        padding: 25px;
        background-color: white;
        margin-top: 80px;
    }

    h1 {
        margin: 30px 0 0 0;
        padding: 20px;
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

    input[type="button"] {
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

    input[type="button"]:hover {
        background: rgb(75, 150, 30);
        color: #ffffff;
    }
    </style>
    <form class="loginSubmit">
        <h1>Traveller Information</h1>
        <br />
        <b>First Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b>
        <?php if (!empty($_SESSION['first_name'])) {echo $_SESSION['first_name'];}?>
        <br />
        <b>Last Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b>
        <?php if (!empty($_SESSION['last_name'])) {echo $_SESSION['last_name'];}?>
        <br />
        <b>User Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b>
        <?php if (!empty($_SESSION['username'])) {echo $_SESSION['username'];}?>
        <br />
        <b>Email
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b>
        <?php if (!empty($_SESSION['email'])) {echo $_SESSION['email'];}?>
        <br />
        <b>Phone Number &nbsp;:</b>
        <?php if (!empty($_SESSION['phone'])) {echo $_SESSION['phone'];}?>
        <br />
        <b>Gender
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
            :</b>
        <?php if (!empty($_SESSION['gender'])) {echo $_SESSION['gender'];}?>
        <br />
        <b>Role
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:</b>
        <?php if (!empty($_SESSION['role'])) {echo $_SESSION['role'];}?>
        <br />
        <tr>
            <h1>Booked Tours</h1>
            <td colspan="2" align="center">
                <ol>
                    <?php
foreach ($allTours as $tour) {

    echo "<li>" . getName($tour['id']) . "</td>";

}
?>
                </ol>
            </td>
        </tr>

        <tr>
            <td>
                <input type="button" onclick="window.location.href = 'event.php';" name="home" value="Book new tour">
            </td>

            <td>
                <input type="button" style="background: red" onclick="window.location.href = 'LogIn.php';" name="home"
                    value="Logout">
            </td>


        </tr>
    </form>
</body>

</html>