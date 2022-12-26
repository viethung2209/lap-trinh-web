<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <font size = 4 color = "red">Welcome to the distance Caculation Page</font>
    <br>

    <?php
        print('<form action="checkDistance.php" method = "post">
        <select name="destination[]" multiple>
            <option value = "Boston"> Boston </option>
            <option value = "Dallas"> Dallas </option>
            <option value = "Las Vegas"> Las Vegas </option>
            <option value = "Miami"> Miami </option>
            <option value = "Nashville"> Nashville </option>
            <option value = "Pittsburgh"> Pittsburgh </option>
            <option value = "San Francisco"> San Francisco </option>
            <option value = "Toronto"> Toronto </option>
            <option value = "Washington, DC"> Washington, DC </option>
        </select>
        <br>
        <input type="submit" value = "click to submit">
    </form>');
    ?>
</body>
</html>