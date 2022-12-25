<html>
<head><title>Coin Flip!</title></head>
<body>
<form action="GoFlip.php" method="post" >
    <?php
    print ("<input type = \"radio\" name = \"pick\" value = 0>Heads");
    print ("<input type = \"radio\" name = \"pick\" value = 1>Tails");
    print ("<br");
    ?>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

</body>
</html>