<?php
   $con=mysqli_connect("den1.mysql5.gear.host","catflyscore","Bn1F_75w1?tr","catflyscore");
$sql="TRUNCATE TABLE globalhighscore";


	$score1 = $_POST["Score1"];
	$score2 = $_POST["Score2"];
	$score3 = $_POST["Score3"];
	$score4 = $_POST["Score4"];
   $sql="INSERT INTO globalhighscore (Score1, Score2, Score3, Score4) VALUES (" . $score1 . "," . $score2 . "," .$score3 . "," .$score4 . ")";
	mysqli_close($con);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully". score1;
?>