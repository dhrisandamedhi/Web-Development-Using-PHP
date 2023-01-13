<?php

    $SERVER = "localhost";
    $USERNAME = "root";
    $PASSWORD = "root"; 
    $DATABASE = "internship";

    $conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);

    // Check connection
    if (!$conn)
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

?>