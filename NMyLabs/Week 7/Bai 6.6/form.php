<?php
    if(isset($_POST['submit']))
    {
        $business_name = $_POST['business_name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $telephone = $_POST['telephone'];
        $url = $_POST['url'];
        $category = $_POST['category'];
    }

    $host = "localhost";
    $username = "it4552";
    $password = "it4552_2022";
    $dbname = "business_service";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    $sql = "INSERT INTO businesses ( Name, Address, City, Telephone, URL) VALUES ('$business_name', '$address', '$city', '$telephone', '$url');";
    if ($con->query($sql) === TRUE) {
        $last_id = $con->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    $sql .= "INSERT INTO biz_categories ( Business_ID, Category_ID) VALUES ('$last_id', '$category')";

    if (mysqli_multi_query($con, $sql)) {
        echo "New records created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
      }
    $con->close();
?>