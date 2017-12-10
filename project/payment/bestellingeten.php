<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Bestelling</title>
     <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
     <style>
         
         body{
             background-color: darkred;
         }
         .container{
             margin-top: 30px;
             padding-top: 30px;
             padding-bottom:  30px;
             background-color: whitesmoke;
             border: 1px solid gray;
             border-radius: 15px;
         }
     </style>
</head>
<body>
    <div class="container">
<?php


$groot = $_POST['groot'];
$klein = $_POST['klein'];
$vegi = $_POST['vegi'];
$tafel = $_POST['tafel'];
$opmerking = $_POST['opmerking'];

$gemaakt = FALSE;
    $conn = new mysqli('localhost','php','php123','scouts');
    if($conn)
    {
    $sql = "INSERT INTO eten " 
            . "VALUES (null, '$groot','$klein','$vegi', '$opmerking','$tafel' , '$gemaakt')";

    // Add user to the database
    if ( $conn->query($sql) ){
        echo "<h1>Hartelijk dank voor u bestelling!</h1>";
        echo "<p>We proberen de bestelling zo spoedig mogelijk te behandelen!</p>";
    }
    else{
        echo "<h1>Bestelling gefaald</h1>";
        echo "<p>Probeer opnieuw of neem contact op met de verantwoordelijke</p>";
    }
    $conn->close();
    }
    else{
        echo("<h1>De bestelling is gefaald</h1>");
        echo("<p>Neem contact met de verantwoordelijke op</p>");
    }
?>
    <a href="opnemen.html" class="btn btn-primary">Drinken bestellen</a>
    <a href="opnemeneten.html" class="btn btn-danger">Eten Bestellen</a>
    </div>
</body>
</html>
