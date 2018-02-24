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

$score1 = $_POST["Score1"];
	$score2 = $_POST["Score2"];
$score3 = $_POST["Score3"];
	$score4 = $_POST["Score4"];
	
   $sql="INSERT INTO globalhighscore (Score1, Score2, Score3, Score4) VALUES (" . $score1 . "," . $score2 . "," . $score3 . "," . $score4 . ")";


//$sql = "INSERT INTO globalhighscore (Score1, Score2, Score3, Score4) VALUES (1,1,1,1)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 