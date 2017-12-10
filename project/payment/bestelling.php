<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bestelling</title>
     <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
     <style>
         
         body{
             background-color: dodgerblue;
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


$cola = $_POST['cola'];
$light = $_POST['light'];
$kriek = $_POST['kriek'];
$water = $_POST['water'];
$bruis = $_POST['bruis'];
$bier = $_POST['bier'];
$cara = $_POST['cara'];
$hoegaarden = $_POST['hoegaarden'];
$duvel = $_POST['duvel'];
$rood = $_POST['rood'];
$wit = $_POST['wit'];
$koffie = $_POST['koffie'];
$thee = $_POST['thee'];
$flesrood = $_POST['flesrood'];
$fleswit = $_POST['fleswit'];
$aantal_glazen = $_POST['aantal_glazen'];
$tafel = $_POST['tafel'];
$opmerking = $_POST['opmerking'];
$gemaakt = FALSE;
$fles = "";
$aantal_bonnen = $cola * 3 + $light * 3 + $water * 3 + $bruis * 3 + $bier * 3 + $cara + $kriek * 4 + $hoegaarden * 3 + $duvel * 5 + $koffie * 3 + $thee * 3;
if($flesrood == 'fles')
{
    
    $fles = "$rood fles(en) rode wijn <br/>";
    $aantal_bonnen = $aantal_bonnen + $rood * 20;
    $rood = 0;
}
else{
    $aantal_bonnen = $aantal_bonnen + $rood * 5;
}
if($fleswit == 'fles'){

    $fles = $fles . "$wit fles(en) witte wijn";
    $aantal_bonnen = $aantal_bonnen + $wit * 20;
    $wit = 0;
}
else{
    $aantal_bonnen = $aantal_bonnen + $wit * 5;
}
echo $fles;
    $conn = new mysqli('localhost','php','php123','scouts');   
 if($conn)
    {
    $sql = "INSERT INTO drinken " 
            . "VALUES (null, '$cola','$light','$water', '$bruis','$bier' , '$cara' ,'$hoegaarden','$kriek','$duvel','$wit', '$rood','$koffie','$thee' ,'$fles','$aantal_glazen','$opmerking', '$tafel' , '$gemaakt')";

    // Add user to the database
    if ( $conn->query($sql) ){
        echo "<h1>Hartelijk dank voor u bestelling!</h1>";
        echo "<p>We proberen de bestelling zo spoedig mogelijk te behandelen!</p>";
        echo "<h4>Het bestelde drinken kost " . $aantal_bonnen . " vakjes </h4>";
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
