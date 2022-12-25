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
    $contact = $_GET["contact"];
    print ("<br>Your email address is $email");
    print ("<br>Your Contact address is $contact");
    ?>
</body>
</html>
