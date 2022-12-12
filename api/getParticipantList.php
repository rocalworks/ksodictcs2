<?php

    include 'connection.php';

    // Check the connection
    if (!$connection) die("Connection failed: " . mysqli_connect_error());

    $sql = "SELECT * FROM participants ORDER BY created_at DESC";

    if (isset($_GET['keyword'])) $sql = "SELECT * FROM participants WHERE participant LIKE '" . $_GET['keyword'] ."%'";

    $result = mysqli_query($connection, $sql);

    $participants = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $participants[] = $row;
    }

    header('Content-type: application/json');
    echo json_encode($participants);

    mysqli_close($connection);

?>