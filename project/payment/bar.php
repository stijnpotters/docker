<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Bar</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <meta http-equiv="refresh" content="5">
    <style>
        body {
            background-color: rgb(31, 209, 49);
        }

        .container {
            background-color: lightgray;
            border-radius: 5px;
        }

        header {
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
    {$sql = "select * from drinken";
       $antwoord = $conn->query($sql);
        if ($antwoord->num_rows > 0) {
    // output data of each row
    while($row = $antwoord->fetch_assoc())
    {
        if($row["gemaakt"] == 0){
        echo "<header>";
        echo "<h3>tafel " . $row["tafel"]. "</h3>" ;
        if($row["cola"] != 0){
        echo "<p>" .$row["cola"]. " cola</p>";
        }
        if($row["light"] != 0){
        echo "<p>" .$row["light"]. " Cola light</p>";
        }
        if($row["water"] != 0){
        echo "<p>" .$row["water"]. " Water</p>";
        }
        if($row["bruis"] != 0){
        echo "<p>" .$row["bruis"]. " Bruiswater</p>";
        }
        if($row["bier"] != 0){
        echo "<p>" .$row["bier"]. " Pils</p>";
        }
        if($row["cara"] != 0){
        echo "<p>" .$row["cara"]. " Cara</p>";
        }
        if($row["hoegaarden"] != 0){
        echo "<p>" .$row["hoegaarden"]. " Hoegaarden</p>";
        }
        if($row["kriek"] != 0){
        echo "<p>" .$row["kriek"]. " Kriek</p>";
        }
        if($row["duvel"] != 0){
        echo "<p>" .$row["duvel"]. " Duvel</p>";
        }
        if($row["koffie"] != 0){
        echo "<p>" .$row["koffie"]. " koffie</p>";
        }
        if($row["thee"] != 0){
        echo "<p>" .$row["thee"]. " Thee</p>";
        }
        if($row["wijnwit"] != 0){
        echo "<p>" .$row["wijnwit"]. " Glas(zen) witte wijn</p>";
        }
        if($row["wijnrood"] != 0){
        echo "<p>" .$row["wijnrood"]. " Glas(zen) rode wijn</p>";
        }
        if($row["fles"] != ""){
        echo "<p>" .$row["fles"]. "</p>";
        echo "<p>Bij de fles(en) wijn mogen " .$row["glazen"]. " glazen</p>";
        }
        if($row["opmerking"] != ""){
        echo "<p>Opmerkingen: " .$row["opmerking"]. "</p>";
        }
        echo '<form action="gemaakt.php" method="post"><input type="hidden" value="' . $row["drinkId"] . '" name="id"><input type="submit" value="Bestelling gemaakt" class="btn btn-primary"></form>';
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
