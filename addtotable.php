<?php
    // Connect to MySQL
    include("connect.php");
    
    $sql = "INSERT INTO parameters (t, h, p)
    VALUES ('".$_GET["t"]."','".$_GET["h"]."','".$_GET["p"]."')";

    if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
    } 
    else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
    header("Location: index.php");
?>
