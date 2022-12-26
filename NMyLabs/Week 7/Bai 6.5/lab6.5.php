<html>

<head>
    <title>Create Table</title>
</head>

<body>
    <?php
    $server = 'localhost';
    $user = 'it4552';
    $pass = 'it4552_2022';
    $mydb = 'business_service';
    $table_name = 'Categories';
    $conn = mysqli_connect($server, $user, $pass, $mydb);
    if (!$conn) {
        die("Cannot connect to $server using $user");
    } else {
        $SQLcmd = "CREATE TABLE $table_name(
            `Category ID` INT UNSIGNED NOT NULL
            AUTO_INCREMENT PRIMARY KEY,
            `Title` VARCHAR(50),
            `Description` VARCHAR(100))";
    }

    $sqlQuery = "SELECT `Category ID`,`Title`, `Description` FROM `Categories`";

    $result = mysqli_query($conn, $sqlQuery);
    ?>
    <h1>Category Admintration</h1>
    <form method="post" action="Submit.php">
        <table style="width:100%">
            <tr>
                <th style="width:20%">CatID</th>
                <th style="width:40%">Title</th>
                <th>Descriptions</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["Category ID"] . "</td><td> " . $row["Title"] . "</td><td>" . $row["Description"] . "</td></tr>";
            }
            ?>
            <tr>
                <td><input type="text" name="catID" id="catID"></td>
                <td><input type="text" name="title" id="title"></td>
                <td><input type="text" name="description" id="description"></td>
            </tr>
            <input type="submit" value="Add Category">
        </table>
    </form>
</body>

</html>