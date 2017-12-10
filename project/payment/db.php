<?php
/* Database connection settings */
$host = '192.168.0.206';
$user = 'php';
$pass = 'PAcE41JHVyNcTyYr';
$db = 'scouts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);