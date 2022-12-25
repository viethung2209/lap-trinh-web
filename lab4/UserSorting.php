<html>
<head>
    <title></title>
</head>
<body>
<?php
//function user_sort($a, $b): int
//{
//    // smarts is all-important, so sort it first
//    if ($b == 'smarts') {
//        return 1;
//    } else if ($a == 'smarts') {
//        return -1;
//    }
//    return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
//}

$values = array('name' => 'Buzz Lightyear',
    'email_address' => 'buzz@starcommand.gal',
    'age' => 32,
    'smarts' => 'some');


//if ($_GET("submitted")) {
//switch ($_GET("sort_type")) {
//    case "rsort":
//        rsort($values);
//        break;
//
//    case "usort":
//        usort($values);
//        break;
//    case "ksort":
//        ksort($values);
//        break;
//    case "krsort":
//        krsort($values);
//        break;
//    case "uksort":
//        uksort($values);
//        break;
//    case "asort":
//        asort($values);
//        break;
//    case "arsort":
//        arsort($values);
//        break;
//    case "uasort":
//        uasort($values);
//        break;
//    default:
//        $values;
//}
//}


?>
<form action="UserSorting.php" method="get">
    <p>
        <input type="radio" name="sort_type" value="sort" checked="checked"/>
        Standard sort<br/>
        <input type="radio" name="sort_type" value="rsort"/> Reverse sort<br/>
        <input type="radio" name="sort_type" value="usort"/> User-defined sort<br/>
        <input type="radio" name="sort_type" value="ksort"/> Key sort<br/>
        <input type="radio" name="sort_type" value="krsort"/> Reverse key sort<br/>
        <input type="radio" name="sort_type" value="uksort"/> User-defined key sort<br/>
        <input type="radio" name="sort_type" value="asort"/> Value sort<br/>
        <input type="radio" name="sort_type" value="arsort"/> Reverse value sort<br/>
        <input type="radio" name="sort_type" value="uasort"/> User-defined value sort<br/>
    </p>

    <p align="center">
        <input type="submit" value="Sort" name="submitted"/>
    </p>

    <p>
        Values <?php
        $submitted ? "sorted by $sort_type" : "unsorted";
        ?>:
    </p>

    <ul>
        <?php
        foreach ($values as $key => $value) {
            echo "<li><b>$key</b>: $value</li>";
        }

        print_r($_GET("submitted"));
        ?>
    </ul>

</form>

</body>
</html>