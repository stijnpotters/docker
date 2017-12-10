<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Keuken</title>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <meta http-equiv="refresh" content="5" >
        <style>
            body{
                background-color: rgb(221, 133, 17);
            }
            .container{
                     background-color: lightgray;
                     border-radius: 5px;
}
            header{
                max-width: 1100px;
                 border-radius: 5px;
                 background-color: #fff;
                 color: black;
                padding: 10px;
                 margin-top: 10px;
}
        </style>
    </head>
    <body>
        
        <div class="container">
            <h1>Bestellingen</h1>
        <?php
        $conn = new mysqli('localhost','php','php123','scouts');
        if($conn)
    {$sql = "select * from eten";
       $antwoord = $conn->query($sql);
        if ($antwoord->num_rows > 0) {
    // output data of each row
    while($row = $antwoord->fetch_assoc())
    {
        if($row["gemaakt"] == 0){
        echo "<header>";
        echo "<h3>tafel " . $row["tafel"]. "</h3>" ;
        if($row["groot"] != 0){
        echo "<p>" .$row["groot"]. " Grote spaghetti</p>";
        }
        if($row["klein"] != 0){
        echo "<p>" .$row["klein"]. " Kleine spaghetti</p>";
        }
        if($row["vegi"] != 0){
        echo "<p>" .$row["vegi"]. " Vegetarische spaghetti</p>";
        }
        if($row["opmerking"] != ""){
        echo "<p>Opmerkingen: " .$row["opmerking"]. "</p>";
        }
        echo '<form action="gemaakteten.php" method="post"><input type="hidden" value="' . $row["etenId"] . '" name="id"><input type="submit" value="Bestelling gemaakt" class="btn btn-primary"></form>';
        echo "</header>";
    }
    }
    
        } else {
    echo "Er zijn momenteel geen bestellingen";
}
$conn->close();
    }
        // put your code here
        ?>
        </div>
    </body>
</html>
