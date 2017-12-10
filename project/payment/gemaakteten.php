<?php
$gemaakt = 1;
$id = $_POST['id'];
 $conn = new mysqli('localhost','php','php123','scouts');
    if($conn)
    {
    $sql = "UPDATE eten SET gemaakt = '1' WHERE eten.etenId = '$id'";
    
    // Add user to the database
    if ( $conn->query($sql) ){
        echo "<p>" . $id . "</p>";
       header("Location: keuken.php");
    }
    else{
        echo "<h1>Update gefaald</h1>";
        echo "<p>Probeer opnieuw of neem contact op met de verantwoordelijke</p>";
    }
    $conn->close();
    }
    else{
        echo("<h1>De bestelling is gefaald</h1>");
        echo("<p>Neem contact met de verantwoordelijke op</p>");
    }

