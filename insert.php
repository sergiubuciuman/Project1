<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_oop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO utilizator (nume, prenume, email, mesaj)
VALUES ('".$_POST["nume"]."','".$_POST["prenume"]."','".$_POST["email"]."','".$_POST["mesaj"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
ht
?>