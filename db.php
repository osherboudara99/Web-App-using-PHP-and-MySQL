<?php

$host = "127.0.0.1";
$port = 3306;
$socket = "";
$user = "comp440";
$password = "pass1234";
$dbname = "webapp";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    
}

$sql = "CREATE DATABASE IF NOT EXISTS webapp";
if ($conn->query($sql) === TRUE) {

}
else {
    echo $conn->error;
}

$sql2 = "CREATE TABLE IF NOT EXISTS `Users` (
    `userid` int(10) NOT NULL AUTO_INCREMENT,
    `firstName` varchar(45),
    `lastName` varchar(45) NOT NULL,
    `username` varchar(45) NOT NULL,
    `password` varchar(45)  NOT NULL,
    `email` varchar(45) DEFAULT NULL,
    PRIMARY KEY (`userid`),
    UNIQUE KEY `username_UNIQUE` (`username`),
    UNIQUE KEY `email_UNIQUE` (`email`))";
if ($conn->query($sql2) === TRUE) {
}
else {
    echo  $conn->error;
}




//$con->close();

//$con->close();



?>

