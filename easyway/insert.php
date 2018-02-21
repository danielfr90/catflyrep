<?php
   $con=mysqli_connect("den1.mysql5.gear.host","catflyscore","Bn1F_75w1?tr","catflyscore");
	$score1 = $_GET["Score1"];
	$score2 = $_GET["Score2"];
	$score3 = $_GET["Score3"];
	$score4 = $_GET["Score4"];
   $sql="INSERT INTO globalhighscore (Score1, Score2, Score3, Score4) VALUES (" . $score1 . "," . $score2 . "," .$score3 . "," .$score4 . ")";
   if (mysqli_query($con,$sql)) {
      echo "Values have been inserted successfully";
   }
	mysqli_close($con);
?>