<?php
   
    // Random Leaderboard Demo 
    // Save a player's score to a database 

    // Replace missing score by 0
    if (!array_key_exists("score", $_GET) || $_GET["score"] == "") {
        $_GET["score"] = 0;
    }

    // Replace missing name by 'anonymous'
    if (!array_key_exists("name", $_GET) || $_GET["name"] == "") {
        $_GET["name"] = "anonymous";
    }

    // Open a connection to the database as a PDO
    require 'get_db_connection.php';
    $conn = get_db_connection();

    // Prepared statements help prevent SQL injection attacks
    // If you have to do lots of executions, they're also faster
    $query = $conn->prepare(
        "INSERT INTO leaderboard (score, name) " .
        "VALUES (:score, :name)"
    );

    // Include the values from $_GET in the query
    $name = $_GET['name'];
    $score = intVal($_GET['score']);
    $query->bindParam(':name', $name);
    $query->bindParam(':score', $score);

    $query->execute();

    // Remove all references to the connection
    $query = null;
    $conn = null;
?>
