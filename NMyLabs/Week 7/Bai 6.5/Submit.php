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

$CategoryID = $_POST['catID'];
$Title = $_POST['title'];
$Descriptions = $_POST['description'];

$sql = "INSERT INTO categories (`Category ID`, `Title`, `Description`) VALUES ('$CategoryID','$Title','$Descriptions')";
if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
