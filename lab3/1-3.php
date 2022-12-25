<html>
<head><title>Decisions</title></head>
<body>
<?php
$grade1 = $_POST["midScore"];
$grade2 = $_POST["finalScore"];
$firstName = $_POST["firstName"];
$midName = $_POST["midName"];
$lastName = $_POST["lastName"];

$average = ($grade1 + $grade2) / 2;
if ($average > 8.9) {
    printf("Your final grade is %.1f. You got A.<br>", $average);
    $rate = "A";
} elseif ($average > 79) {
    printf("Your final grade is %.1f. You got B.<br>", $average);
    $rate = "B";
} elseif ($average > 69) {
    printf("Your final grade is %.1f. You got C.<br>", $average);
    $rate = "C";
} elseif ($average > 59) {
    printf("Your final grade is %.1f. You got D.<br>", $average);
    $rate = "D";
} elseif ($average > 39) {
    printf("Your final grade is %.1f. You got E.<br>", $average);
    $rate = "E";
} elseif ($average >= 0) {
    printf("Your final grade is %.1f. You got F.<br>", $average);
    $rate = "F";
} else {
    print ("Illegal grade less than 0.<br>");
    $rate = "Illegal";
}
switch ($rate) {
    case "A":
        print ("Excellent!");
        break;
    case "B":
        print ("Good!");
        break;
    case "C":
        print ("Not bad!");
        break;
    case "D":
        print ("Normal!");
        break;
    case "E":
        print ("WOW!");
        break;
    case "F":
        print ("Try again!");
        break;
    default:
        print ("Illegal");
}

printf("Hi " . $lastName . "! Your full name is " . $firstName . $midName . $lastName . ".")
?>

</body>
</html>