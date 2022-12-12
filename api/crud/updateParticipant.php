<?php

    include '../connection.php';

    // Check the connection
    if (!$connection) die("Connection failed: " . mysqli_connect_error());
    
    $sql = "UPDATE participants SET " . 
            "participant = '". $_POST['participant'] ."', " .
            "gender = '". $_POST['gender'] ."', " .
            "email = '". $_POST['email'] ."', " .
            "agency = '". $_POST['agency'] ."', " .
            "paddress = '". $_POST['paddress'] ."', " .
            "remarks = '". $_POST['remarks'] ."' " .
            "WHERE id = ". $_POST['id'];

    if (mysqli_query($connection, $sql)) {
        $success = true;
    } else {
        $success = false;
    };

    echo $success;     

    mysqli_close($connection);
    
?>