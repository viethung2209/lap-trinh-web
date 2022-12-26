

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /* cũng là bài 4.3 */
    $destination = $_POST["destination"];
    $cities = array(
        'Dallas' => 803, 'Toronto' => 435, 'Boston' => 848, 'Nashville' => 406,
        'Las Vegas' => 1526, 'San Francisco' => 1835, 'Washington, DC' => 595, 'Miami' => 1189, 'Pittsburgh' => 409
    );
    $i = 0;
    print '<table border=1> <th> No. <th> Destination <th> Distance  <th> Driving time <th> Walking time ';
    foreach ($destination as $key) {
        
        if (isset($cities[$key])) {
            $distance = $cities[$key];
            $time = round(($distance / 60), 2);
            $walktime = round(($distance / 5), 2);
            $i++;

            
            print "<tr> ";
            print "<td> {$i} </td>";
            print "<td> {$key} </td>";
            print "<td> {$distance} </td>";
            print "<td> {$time} </td>";
            print "<td> {$walktime} </td></tr>";

        } else {
            print "Sorry, do not have destination information for $$key.";
        }
    }
    ?>
</body>

</html>