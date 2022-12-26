    <?php
    session_start();
    if (!$_SESSION['number']) {
        $_SESSION["number"] = rand(0, 100);
    }
    if (!$_SESSION['number']) {
        $_SESSION["times"] = 0;
    }
    ?>
    <html>

    <head>
        <link rel="stylesheet" href="style.css">
    </head>

    <body style="justify-content: center;">
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <div class="formsignin">
            <div class="inputlable">
                <h1>Guess Number</h1>
            </div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="inputfield">
                    <input class="inputform" type="text" size="4" maxlength="7" name="input"><br>
                </div>
                <br>
                <input type="submit" name="submitbutton" value="submit">
                <input type="reset" value="reset">
            </form>
            <?php

            if (isset($_POST['submitbutton'])) {

                checkinput($_POST['input'], $_SESSION["number"], $_SESSION["times"]);
            }

            function checkinput($data, $preset, $i)
            {
                if ($data < $preset) {
                    print "<h3>Wrong answer!</h3>
                    <br>
                    <p>Please try a higher number.</p> 
                    <br>
                    <p>You have guessed $i times</p>";
                }
                if ($data > $preset) {
                    print "<h3>Wrong answer!</h3>
                    <br>
                    <p>Please try a lower number.</p> 
                    <br>
                    <p>You have guessed $i times</p>";
                }
                if ($data == $preset) {
                    print "<h3>Correct answer!</h3>
                    <br>
                    <p>You have guessed the number after $i times</p>";
                    $_SESSION["number"] = rand(0, 100);
                    $_SESSION["times"] = 0;
                }
                $_SESSION["times"]++;
            }
            ?>
        </div>
    </body>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-width: 500px;
        }

        .formsignin {
            width: 500px;
            height: 450px;
            background-color: white;
            box-shadow:
                1.1px 4.3px 3.3px -7px rgba(0, 0, 0, 0.038),
                2.2px 8.7px 6.8px -7px rgba(0, 0, 0, 0.058),
                3.4px 13.6px 10.6px -7px rgba(0, 0, 0, 0.072),
                4.9px 19.4px 15px -7px rgba(0, 0, 0, 0.083),
                6.8px 26.9px 20.7px -7px rgba(0, 0, 0, 0.093),
                9.5px 37.7px 29.1px -7px rgba(0, 0, 0, 0.104),
                14.1px 55.7px 43.6px -7px rgba(0, 0, 0, 0.12),
                25px 99px 80px -7px rgba(0, 0, 0, 0.16);
            text-align: center;
        }

        .inputfield {
            margin-bottom: 20px;
        }

        .inputform {
            margin-bottom: 5px;
            width: 200px;
        }

        .inputlable p {
            margin-right: 10px;
            margin-bottom: 7px;
        }
    </style>

    </html>