<html>
<head><title>Create Table</title></head>
<body>
<?php
$server = "localhost";
$user = "root";
$pass = "root";
$mydb = "bookstore";
$table_name = 'Products';

$connect = mysql_connect($server, $user, $pass);
if (!$connect) {
    die ("Cannot connect to $server using $user\n" . mysql_error());

} else {
    $SQLcmd = "CREATE TABLE $table_name(
	                 ProductID INT UNSIGNED NOT NULL
			          AUTO_INCREMENT PRIMARY KEY,
			    Product_desc VARCHAR(50),
			    Cost INT, 
    Weight INT, 
   Numb INT)";
    mysql_select_db($mydb);
    if (mysql_query($SQLcmd, $connect)) {
        print '<font size="4" color="blue" >Created Table';
        print "<i>$table_name</i> in database<i>$mydb</i><br></font>";
        print "<br>SQLCmd=$SQLcmd";
    } else {
        print ("Table Create Creation Failed SQLcmd=$SQLcmd");
        die ("Table Create Creation Failed SQLcmd=$SQLcmd");
    }
    mysql_close($connect);
}
?></body>
</html>