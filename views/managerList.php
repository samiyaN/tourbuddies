<body>

    <?php
session_start();
include '../controller/managercontroller.php';
if (isset($_SESSION['user'])) {
    $allManagers = getallmanager($_SESSION['user']);
}

?>
    <style>
    table {
        border-collapse: collapse;
        margin: 0 auto;
        margin-top: 30px;
        font-size: 20px;
    }

    th {
        padding: 5px 10px;
    }

    td {
        padding: 5px 10px;
    }
    </style>
    <table border="1">
        <tr>
            <th>Manger ID</th>
            <th>Manger Name</th>
            <th>Phone Number</th>

        </tr>

        <?php
foreach ($allManagers as $manager) {
    echo "<tr>";
    echo "<td>" . $manager['id'] . "</td>";
    echo "<td>" . $manager['name'] . "</td>";
    echo "<td>" . $manager['mobile'] . "</td>";
    echo "</tr>";

}
?>
    </table>
</body>

</html>