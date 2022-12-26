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

    function user_sort($a, $b)
    {

        // smarts is all-important, so sort it first

        if ($b == 'smarts') {

            return 1;
        } else if ($a == 'smarts') {

            return -1;
        }

        return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
    }

    $values = array(
        'name' => 'Buzz Lightyear',

        'email_address' => 'buzz@starcommand.gal',

        'age' => 32,

        'smarts' => 'some'
    );

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <p>

            <input type="radio" name="sort_type" value="sort" checked="checked" /> Standard sort<br />

            <input type="radio" name="sort_type" value="rsort" /> Reverse sort<br />

            <input type="radio" name="sort_type" value="usort" /> User-defined sort<br />

            <input type="radio" name="sort_type" value="ksort" /> Key sort<br />

            <input type="radio" name="sort_type" value="krsort" /> Reverse key sort<br />

            <input type="radio" name="sort_type" value="uksort" /> User-defined key sort<br />

            <input type="radio" name="sort_type" value="asort" /> Value sort<br />

            <input type="radio" name="sort_type" value="arsort" /> Reverse value sort<br />

            <input type="radio" name="sort_type" value="uasort" /> User-defined value sort<br />

        </p>

        <p align="center">

            <input type="submit" value="Sort" name="submitted" />

        </p>

        <p>

        </p>

        <ul>

            <?php

            foreach ($values as $key => $value) {

                echo "<li><b>$key</b>: $value</li>";
            }

            ?>

        </ul>



    </form>

    <?php
    if (array_key_exists("sort_type", $_POST)) {
        $sort_type = $_POST["sort_type"];
        switch ($sort_type) {
            case "sort": 
                sort($values);
            break;
            case "rsort":
                rsort($values);
                break;
            case "usort":
                $i = 0;
                foreach($values as $key => $value){
                    $i++;
                    if($i>0){
                    foreach($values as $key1 => $value1){
                        if(user_sort($key1, $key) == 1){
                            $tmp = $values[$key1];
                            $values[$key1] = $values[$key];
                            $values[$key] = $tmp;
                        }
                    }
                    }
                }
                break;
            case "ksort":
                ksort($values);
                break;
            case "krsort":
                krsort($values);
                break;
            case "uksort":
                $i = 0;
                foreach($values as $key => $value){
                    $i++;
                    if($i>0){
                    foreach($values as $key1 => $value1){
                        if(user_sort($key1, $key) == 1){
                            $tmp = $values[$key1];
                            $values[$key1] = $values[$key];
                            $values[$key] = $tmp;
                        }
                    }
                    }
                }
                break;
            case "asort":
                asort($values);
                break;
            case "arsort":
                arsort($values);
                break;
            case "uasort":
                $i = 0;
                foreach($values as $key => $value){
                    $i++;
                    if($i>0){
                    foreach($values as $key1 => $value1){
                        if(user_sort($value1, $value) == 1){
                            $tmp = $values[$value1];
                            $values[$value1] = $values[$value];
                            $values[$value] = $tmp;
                        }
                    }
                    }
                }
                break;
            default:
                break;
        }
        print("after $sort_type:");
        foreach ($values as $key => $value) {

            echo "<li><b>$key</b>: $value</li>";
        }
    }

    

    ?>
</body>

</html>