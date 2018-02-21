<?php
   $con=mysqli_connect("den1.mysql5.gear.host","catflyscore","Bn1F_75w1?tr","catflyscore");
   $sql="INSERT INTO globalhighscore (Score1, Score2, Score3, Score4) VALUES (100, 100,100,100)";
   if (mysqli_query($con,$sql)) {
      echo "Values have been inserted successfully";
   }
	mysqli_close($con);
?>