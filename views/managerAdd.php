<body>

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
        max-width: 700px;
        max-height: 600px;
        padding: 10px;

        background-color: white;
    }

    form {
        text-align: center;

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

    h1 {
        text-align: center;
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

    <form method="POST" action="manager.php" class="createTour">
        <input type="text" name="name" placeholder="Manger Name">
        <input type="text" name="phone" placeholder="Manger Phone">
        <input type="submit" name="addmanager" value="Add Manager">
    </form>
</body>

</html>