<?php

    include '../connection.php';

    // Check the connection
    if (!$connection) die("Connection failed: " . mysqli_connect_error());

    $sql = "INSERT INTO participants (participant, gender, email, agency, paddress, remarks)" . 
            "VALUES ('". $_POST['participant'] ."', " .
                    "'". $_POST['gender'] ."', " .
                    "'". $_POST['email'] ."', " .
                    "'". $_POST['agency'] ."', " .
                    "'". $_POST['paddress'] ."', " .
                    "'". $_POST['remarks'] ."')";
    
    mysqli_query($connection, $sql);
    
    echo mysqli_insert_id($connection);

    mysqli_close($connection);
    
?>