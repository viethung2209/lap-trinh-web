<html>

<head>
    <title>Business Listings</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "it4552";
    $password = "it4552_2022";
    $mydb = "business_service";
    $table_name = "categories";
    // Create connection
    $connect = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$connect) {
        die("Connection failed: <br>" . mysqli_connect_error());
    } else {
        print("Connection success!!<br>");
    }
    $connect->select_db($mydb);
    ?>

    <h1>Business Listings</h1>

    <div style="float:left; width:30%">
        <table border="1px">
            <tr>
                <th>Click on a category to find business listings</th>
            </tr>

            <?php


            $SQLcmd = "SELECT * FROM $table_name";
            $result = mysqli_query($connect, $SQLcmd);

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $link = "http://localhost/lap_trinh_web/week7/lap_trinh_web/week7/lab6.7.php?CategoryID={$row['Category ID']}";
                    print("<tr><td><a href='input67.php?CategoryID={$row['Category ID']}' value='2' onclick='showDetails(this)'>" . $row["Title"] . "</a></td></tr>");
                    
                }
            } else {
                print("Result empty <br>");
            }
            



            ?>
        </table>
    </div>
    <div>
        <table border="1px">
            <?php
            if (array_key_exists("CategoryID", $_GET)) {
                $CategoryID = $_GET["CategoryID"];
               print("$CategoryID");
                    $query = "SELECT * FROM businesses, biz_categories where businesses.Business_ID = biz_categories.Business_ID and biz_categories.Category_ID = '$CategoryID';";
                    $result = mysqli_query($connect, $query);
                    if ($result) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['Business_ID'] . "</td>";
                            echo "<td>" . $row['Name'] . "</td>";
                            echo "<td>" . $row['Address'] . "</td>";
                            echo "<td>" . $row['City'] . "</td>";
                            echo "<td>" . $row['Telephone'] . "</td>";
                            echo "<td>" . $row['URL'] . "</td>";
                            echo "</tr>";
                        }
                    }
            }
            ?>
        </table>
    </div>
    <script>
        function showDetails(a){
            let value = a.getAttribute("value");
            // view value
        }
    </script>
</body>

</html>