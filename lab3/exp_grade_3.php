<html>
<head><title>Decisions</title></head>
<body>
<?php
$rating = $_POST["rating"];

switch ($rating) {

    case  "Poor":
        $rated = "Poor";
        print ("The rating was $rated");
        break;

    case "Fair":
        $rated = "Fair";
        print ("The rating was $rated");
        break;
    case "Good":
        $rated = "Good";
        print ("The rating was $rated");
        break;
    default:
        print ("Error: that rating does not exist");
}
?>
</body>
</html>
