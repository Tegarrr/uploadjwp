<?php
//membuat variabel yang berisi tentang data / path database
$local = "localhost";
$user = "root";
$pass = "";
$dbnm = "nim";

// Create connection
$conn = new mysqli($local, $user, $pass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Konek Bos..";
?>