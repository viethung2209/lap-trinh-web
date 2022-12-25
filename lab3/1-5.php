<html>
<head><title>Decisions</title></head>
<body>
<?php
$date = $_POST["date"];
$mon = $_POST["mon"];
$yea = $_POST["yea"];

if ($mon == 2) {
    if ($date > 29) {
        print "Invalid";
    }
} else {
    
}
?>

</body>
</html>