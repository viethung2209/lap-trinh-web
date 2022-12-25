<?php
# parameters for connecting to the "business_service"
$user = "root";
$pass = "root";
$server = "localhost";
$database = "business_service";
$dbtype = 'mysqli';

# Establish the connection
$connection =  mysqli_connect($server, $user, $pass);
if (!$connection) {
    die ("Cannot connect to $server using $user\n" . mysqli_error($connection));
} else
    print ("Connected!\n");
?>