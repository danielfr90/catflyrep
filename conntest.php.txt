 <?php
$servername = "den1.mysql5.gear.host";
$username = "catflyscore";
$password = "Bn1F_75w1?tr";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 