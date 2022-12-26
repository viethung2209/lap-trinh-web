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
        function degreeToRadianAndViceVersa($degree, $radian){
            if($degree== 0) return $radian*180/pi();
            return $degree*pi()/180;
        }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method = "POST">
        <label for="">Enter number:</label>
        <input type="text" name = "number">
        <label for="">Is this radian or degree</label>
        <select name="type" id="">
            <option value="radian" type = "radio">radian</option>
            <option value="degree" type = "radio">degree</option>
        </select>
        <br>
        <input type="submit" value = "convert">
    </form>
    
    <?php 

            if(array_key_exists("type", $_POST)){
                $number = $_POST["number"];
                if($_POST["type"] == "radian"){
                    $result = degreeToRadianAndViceVersa(0, $number);
                echo "<p>degree: " . $result  . "</p>";
                }
                if($_POST["type"] == "degree"){
                    $result = degreeToRadianAndViceVersa($number, 0);
                    echo "<p>radian: " . $result  . "</p>";

                }
            }
    
    ?>

</body>
</html>