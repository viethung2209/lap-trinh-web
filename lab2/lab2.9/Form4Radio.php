<html>
<header>
    <title>
        Receiving Input
    </title>
</header>
<body>
<font size="5">Thanks</font>
<?php
$email = $_GET["email"];
$name = $_GET["name"];
$class = $_GET["class"];
$university = $_GET["university"];
$hobby = $_GET["hobby"];

print ("<br>Your email address is $email");
print ("<br>Your name  is $name");
print ("<br>Your class  is $class");
print ("<br>Your university  is $university");
print ("<br>Your hobby  is $hobby" );

?>
</body>
</html>
