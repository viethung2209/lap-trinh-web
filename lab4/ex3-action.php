<html>
<head><title>Inventory Add </title>
</head>
<body>
<?php
$index = $_POST["index"];

$Value = $_POST["value"];
$action = $_POST["action"];
//var_dump($index, $Value, $action);
$invent = array('Nuts' => 44, 'Nails' => 34, 'Bolts' => 31);
if ($action == "Add") {


    $item = $invent["$index"];

    if (isset($invent["$index"])) {

        print "Sorry, already exists $index <br>";

    } else {

        $invent["$index"] = (int)$Value;

        print "Adding index=$index value=$Value <br>";

        print '-----<br>';


        asort($invent);

        foreach ($invent as $index => $item) {

            print "Index is $index, value is $item.<br> ";

        }

    }
} else {
    print "Sorry, no such action=$action<br>";
}
?></body>
</html>