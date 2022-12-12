<?php
    /** USED ATTACHED CRUD FILES AS BASE CODE */
    /** CHANGES: Shortened all total count codes into one file using code reuse principle */
    include 'connection.php';

    /** -------------------------------------------------- */
    /** RUN FILE HERE */
    /** -------------------------------------------------- */
    // Check the connection
    echo 'wow';
    if (!$connection) die("Connection failed: " . mysqli_connect_error());
    
    // Run query here
    // See runQuery for process
    $participants = [
        'total' => runQuery($connection),
        'males' => runQuery($connection, "WHERE gender = 'Male'"),
        'females' => runQuery($connection, "WHERE gender = 'Female'"),
        'finished' => runQuery($connection, "WHERE remarks = 'Finished'"),
        'ongoing' => runQuery($connection, "WHERE remarks = 'On-going'"),
    ];

    // Return data to client 
    header('Content-type: application/json');
    echo json_encode($participants);

    // Closes connection
    mysqli_close($connection);


    /** -------------------------------------------------- */
    /** FUNCTIONS STARTS HERE  */
    /** -------------------------------------------------- */
    
    // Simplify running of query thru here for reusability
    function runQuery($connection, $condition = '') {
        $sql = "SELECT COUNT(id) AS total FROM participants " . $condition;
        $result = mysqli_query($connection, $sql);
        $data[] = mysqli_fetch_assoc($result);
        
        // Return value only since count only returns one set (as per sql) 
        return $data[0]['total'];
    }
    
?>