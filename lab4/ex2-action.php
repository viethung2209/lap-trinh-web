<html>
<head><title> Distance and Time Calculations </title></head>
<body>
<?php
//header("Content-Type: text/plain");

$destination[] = $_GET["destination"];
var_dump($destination);
$cities = array('Dallas' => 803, 'Toronto' => 435, 'Boston' => 848, 'Nashville' => 406, 'Las Vegas' => 1526, 'San Francisco' => 1835,
    'Washington,DC' => 595, 'Miami' => 1189, 'Pittsburgh' => 409);
if (isset($destination)) {
    print '<table border=1> <th> No. <th> Destination<th>Distance <th> Driving time <th> Walking time ';

    print "<tr>";
    $id = 1;
    foreach ($_GET["destination"] as $option) {
        var_dump($option);
        $distance = $cities[$option];
        $time = round(($distance / 60), 2);
        $walktime = round(($distance / 5), 2);

        print "<td> $id </td>";
        print "<td> {$option} </td>";
        print "<td> {$distance} </td>";
        print "<td> {$time} </td>";
        print "<td> {$walktime} </td></tr>";
        $id++;
    }

} else {
    print "Sorry, do not have destination information for $destination.";
} ?>

</body>
</html>