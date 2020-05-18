<?php
require_once "../controller/userController.php";
?>

<html>

<head>
    <title>Sign Up</title>
    <style>
    body {
        background: url('images/registrationBackground.jpg');
        background-size: 1500px 1000px;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
        font-family: Arial;
    }

    .registration {
        border-radius: 20px;
        margin: auto;
        width: 400px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.9);
        padding: 25px 25px;
        margin-top: 30px;
        background: linear-gradient(top, #3c3c3c 0%, #222222 100%);
        background: #ffffff;
    }

    input[type=text],
    input[type=password],
    input[type=email],
    input[type=tel],
    input[type=number] {
        border: none;
        outline: none;
        border: 2px #000000 solid;
        background: transparent;
        border-radius: 20px;
        box-sizing: border-box;
        color: #000000;
        font-size: 16px;
        padding: 5px;
        text-align: center;
    }

    #role {
        border: none;
        outline: none;
        border: 2px #000000 solid;
        background: transparent;
        border-radius: 20px;
        box-sizing: border-box;
        color: #000000;
        font-size: 16px;
        padding: 5px;
        text-align: center;
    }

    input[type=radio] {
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
        margin-left: 20px;
    }

    input[type=button]:hover {
        background: rgb(75, 150, 30);
        color: #ffffff;
    }

    .avatar {

        width: 100px;
        height: 100px;
        border-radius: 50%;
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

    h2 {
        margin: 0 0 30px 0;
        padding: 05px;
        color: rgb(55, 90, 47);
        text-align: center;
    }

    #selectRole {
        color: rgba(255, 255, 255, 1.0);
        text-align: center;
    }
    </style>

</head>

<body>
    <?php
$err_fname = "";
$firstname = "";
$err_lname = "";
$lastname = "";
$err_uname = "";
$username = "";
$err_pass = "";
$password = "";
$err_email = "";
$email = "";
$err_nid = "";
$nid = "";
$err_phone = "";
$phone = "";
$role = "";
$err_role = "";
$gender = "";
$err_gender = "";
$formvalid = true;
if (isset($_POST['submit'])) {
    if (empty($_POST['firstname'])) {
        $err_fname = "*First Name Required";
        $formvalid = false;
    } else {
        $firstname = htmlspecialchars($_POST['firstname']);
        echo $firstname;
    }
    if (empty($_POST['lastname'])) {
        $err_lname = "*Last Name Required";
        $formvalid = false;
    } else {
        $lastname = htmlspecialchars($_POST['lastname']);
        echo $lastname;
    }
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
    if (empty($_POST['email'])) {
        $err_email = "*Email Required";
        $formvalid = false;
    } else {
        $email = $_POST['email'];
    }
    if (empty($_POST['nid'])) {
        $err_nid = "*NID Required";
        $formvalid = false;
    } else {
        $nid = $_POST['nid'];
    }
    if (empty($_POST['phone'])) {
        $err_phone = "*Phone Number Required";
        $formvalid = false;
    } else {
        $phone = $_POST['phone'];
    }

    if (empty($_POST['gender'])) {
        $err_gender = "*Gender Required";
        $formvalid = false;
    } else {
        $gender = $_POST['gender'];
    }

    if (empty($_POST['role'])) {
        $err_role = "*Role Required";
        $formvalid = false;
    } else {
        $role = $_POST['role'];
    }

    if ($formvalid == true) {
        register($firstname, $lastname, $username, $password, $email, $nid, $phone, $gender, $role);
    }
}
?>

    <form method="post" action="#" class="registration">
        <h2> Sign Up </h2>
        <table>
            <tr>
                <td><b>Firstname</b></td>
                <td><input id='fName' type="text" value="<?php echo $firstname; ?>" name="firstname"
                        placeholder="First Name">
                    <br><span style="color:red"><?php echo $err_fname; ?></span></td>
                <td>

                    <img src="images/img_avatar.png" alt="Avatar" class="avatar">
                </td>
            </tr>
            <tr>
                <td><b>Lastname </b></td>
                <td><input id='lName' type="text" name="lastname" value="<?php echo $lastname; ?>"
                        placeholder="Last Name">
                    <br><span style="color:red"><?php echo $err_lname; ?></span></td>

            </tr>
            <tr>
                <td><b>Username </b></td>
                <td><input id='username' type="text" name="username" value="<?php echo $username; ?>"
                        placeholder="Enter User Name">
                    <br><span style="color:red"><?php echo $err_uname; ?></span></td>

            </tr>
            <tr>
                <td><b>Password</b></td>
                <td> <input id='password' name='password' type="password" value="<?php echo $password; ?>"
                        placeholder="Enter Password">
                    <br><span style="color:red"><?php echo $err_pass; ?></span></td>

            </tr>
            <tr>
                <td><b>Confirm Password</b></td>
                <td> <input onkeyup='matchpassword();' id='password2' type="password"
                        placeholder=" Enter Confirm Password">
                    <br><span id='error' style="color:red"></span></td>

            </tr>
            <tr>
                <td><b>Email</b></td>
                <td> <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Email">
                    <br><span style="color:red"><?php echo $err_email; ?></span></td>

            </tr>
            <tr>
                <td><b>NID</b></td>
                <td> <input type="number" id="nid" name="nid" value="<?php echo $nid; ?>" placeholder="Enter NID">
                    <br><span style="color:red"><?php echo $err_nid; ?></span></td>

            </tr>
            <tr>
                <td><b>Contact</b></td>
                <td> <input type="number" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{4}-[0-9]{6}"
                        placeholder="Enter Phone Number">
                    <br><span style="color:red"><?php echo $err_phone; ?></span></td>

            </tr>

            <tr>
                <td><b>Gender </b></td>
                <td><input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender"
                        value="Female"> Female <br>

                    <span style="color:red"><?php echo $err_gender; ?></span></td>
            </tr>
            <tr>
                <td><b>Role</b> </td>
                <td>
                    <select name="role" id="role">
                        <option value="roll" selected="selected" id="selectRole">select role...</option>
                        <option value="traveller">Traveller</option>
                        <option value="eventplanner">Event Planner</option>
                        <option value="manager">Manager</option>
                    </select>
                    <br><span style="color:red"><?php echo $err_role; ?></span></td>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Submit">
                    <input type="button" onclick="window.location.href = ' home.php';" name="back" value="Back">
                </td>
            </tr>

            <tr>
                <a href="login.php"> Already have an account? Log In Here!</a>
            </tr>
        </table>
    </form>

    <script>
    function matchpassword() {
        var password = document.getElementById('password').value;
        var password2 = document.getElementById('password2').value;

        var error = document.getElementById('error');
        if (password === password2) {
            error.innerText = '';
        } else {
            error.innerText = 'Password does not matched';
        }
    }
    </script>

</body>
</body>