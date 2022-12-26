<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance from Chicago!</title>
</head>

<body>
    <FONT SIZE=4 color=blue>Welcome to the Distance Calculator Page.</FONT>
    <br>The page that calculates the distances from Chicago!
    <br>Select the destination:
    <form action="CheckDistance.php" method="get">
        <select name="destination" size=5 multiple>
            <option>Boston</option>
            <option>Dallas</option>
            <option>Miami</option>
            <option>Nashville</option>
            <option>Las Vegas</option>
            <option>Pittsburgh</option>
            <option>San Francisco</option>
            <option>Toronto</option>
            <option>Washington, DC</option>
        </select>
        <br>
        <input type="Submit" value="submit">
        <input type="Reset" value="reset">
    </form>
</body>

</html>