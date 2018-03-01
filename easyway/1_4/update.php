 <?php
$servername = "den1.mysql5.gear.host";
$username = "catflyscore";
$password = "Bn1F_75w1?tr";
$dbname = "catflyscore";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$scorenr = $_POST["ScoreNr"];
$amount = $_POST["Amount"];
$name = $_POST["Name"];


$sql= "UPDATE `globalhighscorenew` SET `Amount`=" . $amount . ",`Name`='" . $name . "' WHERE `Score`=" . $scorenr;

if (mysqli_multi_query($conn, $sql)) {
    echo "New update successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 