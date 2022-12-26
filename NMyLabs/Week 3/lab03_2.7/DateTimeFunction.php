<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label for="">First name: </label>
        <input type="text" name="fname">
        <label for="">Second name: </label>
        <input type="text" name="sname">
        <br>

        <p class="birth-text"> Ngày sinh 1</p>
        <input type="text" name="date1" placeholder="d-m-y">
        <p class="birth-text"> Ngày sinh 2</p>
        <input type="text" name="date2" placeholder="d-m-y">
        <input type="submit">

    </form>
    <?php

    function isValid($date, $format = 'd-m-Y')
    {
        $dt = DateTime::createFromFormat($format, $date);
        return $dt && $dt->format($format) === $date;
    }

    if (array_key_exists("date1", $_POST)) {
        $date1 = $_POST["date1"];
        $date2 = $_POST["date2"];
        $name1 = $_POST["fname"];
        $name2 = $_POST["sname"];


        if(isValid($date1) == false || isValid($date2) == false) {
            echo "date is not valid";
        }
        $date1 = date_create($date1);
        $date2 = date_create($date2);
        $nowduc = date_create(date("d-m-Y"));
        $dateDiff = date_diff($date1, $date2);
        $age1 = date_diff($date1, $nowduc);
        $age2 = date_diff($date2, $nowduc);
        
        
        echo "difference : " . $dateDiff->format("%d") . " days " .$dateDiff->format("%m") .  " months <br>"; 
        echo $name1 . " is : " .$age1->format("%y") . "<br>";
        echo $name2 . " is : "  .$age2->format("%y");
    }
    ?>


</body>

</html>