<?php
    // if(isset($_GET["selected_options"])) {
    //     $selected_options = $_GET['selected_options'];
    // }    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient";
    
    
    $con =mysqli_connect($host, $username, $password, $dbname, 3307);

    
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    
    $sql = "SELECT first_name, last_name, dob, disabilities, description, phone, email FROM patient_table";
    $rs = mysqli_query($con, $sql);
    if(! $rs ) {
        die('Could not get data: ' . mysql_error($con));
    }
    while($row = mysqli_fetch_assoc($rs)) {
        echo "NAME :{$row['first_name']} ". 
        "{$row['last_name']} <br> ".
        "DOB: {$row['dob']}  <br>".
        "CONTACT: {$row['phone']}  <br>".
        "EMAIL: {$row['email']} <br> ".
        "DISABILITIES : {$row['disabilities']} <br> ".
        "DESCRIPTION: {$row['description']} <br> ".
        "--------------------------------<br>";
    } 

    // echo "Fetched data successfully\n";

    mysqli_close($con);

?>
