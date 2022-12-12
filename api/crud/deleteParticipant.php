<?php

    include '../connection.php';

    var_dump($_POST);

    // Check the connection
    if (!$connection) die("Connection failed: " . mysqli_connect_error());

    $sql = "DELETE FROM participants WHERE id = " . $_POST['id'];

    if (mysqli_query($connection, $sql)) {
        $success = true;
    } else {
        $success = false;
    };

    echo $success;     

    mysqli_close($connection);

?>