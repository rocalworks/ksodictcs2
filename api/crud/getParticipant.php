<?php

    include '../connection.php';

    // Check the connection
    if (!$connection) die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT * FROM participants WHERE id = " . $_GET['id'];

    $result = mysqli_query($connection, $sql);

    $participant[] = mysqli_fetch_assoc($result);

    header('Content-type: application/json');
    echo json_encode($participant[0]);

    mysqli_close($connection);
?>