<?php
require_once("../controller/userController.php");
?>

<html>

<head>
    <title> Login Form </title>
    <style>
    body {
        background: url('images/panthumai.jpg');
        background-size: 1500px 700px;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
        font-family: Arial;
    }

    .loginForm {
        border-radius: 20px;
        right: 0;
        margin: auto;
        max-width: 300px;
        padding: 25px;
        background-color: white;
        margin-top: 100px;

    }

    h1 {
        margin: 30px 0 0 0;
        padding: 20px;
        color: rgb(55, 90, 47);
        text-align: center;
    }

    h2 {
        margin: 0 0 30px 0;
        padding: 05px;
        color: rgb(55, 90, 47);
        text-align: center;
    }

    input {
        width: 100%;
        margin-bottom: 30px;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        border: none;
        outline: none;
        border: 2px #000000 solid;
        background: #f1f1f1;
        border-radius: 20px;
        box-sizing: border-box;
        color: #000000;
        font-size: 16px;
        padding: 10px;
        text-align: center;
    }


    ::placeholder {
        color: rgba(255, 255, 255, 1.0);
        text-align: center;
    }

    input[type=submit] {
        border: none;
        outline: none;
        padding: 10px;
        color: #fff;
        font-size: 16px;
        font-family: Arial;
        background: rgb(55, 90, 47);
        cursor: pointer;
        border-radius: 20px;
    }

    input[type=submit]:hover {
        background: rgb(75, 150, 30);
        color: #ffffff;
    }



    a {
        color: #000000;
        font-size: 15px;
        font-weight: bold;
        text-decoration: none;
        text-align: center;
    }

    a:hover {
        text-decoration: underline;
    }


    .back-button {
        color: white;
        display: block;
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
        text-align: center;

    }

    .back-button:hover {
        background: rgb(75, 150, 30);
        color: #ffffff;
    }

    .back-button a {
        color: white;
        text-decoration: none;

    }
    </style>
</head>

<body>
    <?php
$err_uname = "";
$username = "";
$err_pass = "";
$password = "";
$formvalid = true;
if (isset($_POST['login'])) {
    if (empty($_POST['username'])) {
        $err_uname = "*Username Required";
        $formvalid = false;
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $err_pass = "*Password Required";
        $formvalid = false;
    } else {
        $password = $_POST['password'];
    }

    if ($formvalid == true) {

		login($username, $password);
       // header('location: ../controller/userController.php');

    }
}
?>

    <form method="POST" action="" class="loginForm">
        <h2> LOG IN </h2>
        <tr>
            <td><b>Username </b></td>
            <td><input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter User Name">
                <br><span style="color:red"><?php echo $err_uname; ?></span></td>

        </tr>
        <br>
        <tr>
            <td><b>Password</b></td>
            <td> <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Enter Password">
                <br><span style="color:red"><?php echo $err_pass; ?></span></td>
        </tr>
        <br>

        <tr>
            <td><input type="submit" name="login" value="Log In"></td>
        </tr>
        <tr>
            <td>
                <div class="back-button"><a href="home.php">Go Back</a></div>
            </td>
        </tr>

        <center>
            <a href="registration.php"> Don't have an account? Register Here!</a>
        </center>
    </form>
</body>